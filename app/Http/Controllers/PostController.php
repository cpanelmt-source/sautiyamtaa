<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Models\Comment; // <-- ADD THIS
use App\Models\PostInteraction; // <-- ADD THIS

class PostController extends Controller
{
    private $wpApiUrl = 'https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/posts';

    /**
     * Display a listing of all blog posts.
     */
    public function index()
    {
        $posts = Cache::remember('all_blog_posts', now()->addMinutes(10), function () {
            try {
                $response = Http::get($this->wpApiUrl, ['_embed' => '']);
                return $response->successful() ? $response->json() : [];
            } catch (\Exception $e) { return []; }
        });

        return view('blog.index', compact('posts'));
    }

    /**
     * Display a single blog post.
     */
    public function show($slug)
    {
        $postData = Cache::remember("blog_post_{$slug}", now()->addMinutes(10), function () use ($slug) {
            try {
                $response = Http::get($this->wpApiUrl, ['slug' => $slug, '_embed' => '']);
                return $response->successful() ? ($response->json()[0] ?? null) : null;
            } catch (\Exception $e) { return null; }
        });

        if (!$postData) {
            abort(404, 'Post not found');
        }

        // --- NEW: Fetch interaction data from our local database ---
        $interactions = PostInteraction::firstOrCreate(['post_slug' => $slug]);
        $comments = Comment::where('post_slug', $slug)->where('is_approved', true)->latest()->get();

        $post = [
            'title' => data_get($postData, 'title.rendered'),
            'content' => data_get($postData, 'content.rendered'),
            'date' => \Carbon\Carbon::parse(data_get($postData, 'date'))->format('F j, Y'),
            'featured_image_url' => data_get($postData, 'acf.featured_image') ?: 'https://placehold.co/1200x600/E53935/FFFFFF?text=Sauti+ya+Mtaa',
        ];

        return view('blog.show', compact('post', 'interactions', 'comments'));
    }

    /**
     * --- NEW: Store a new comment. ---
     */
    public function storeComment(Request $request, $slug)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email|max:255',
            'content' => 'required|string|max:5000',
        ]);

        Comment::create([
            'post_slug' => $slug,
            'author_name' => $request->author_name,
            'author_email' => $request->author_email,
            'content' => $request->content,
            'is_approved' => true, // Set to true for auto-approval. Change to false for moderation.
        ]);

        return back()->with('success', 'Thank you for your comment!');
    }

    /**
     * --- NEW: Handle a 'like' action. ---
     */
    public function like($slug)
    {
        $interaction = PostInteraction::firstOrCreate(['post_slug' => $slug]);
        $interaction->increment('likes_count');

        return response()->json(['likes_count' => $interaction->likes_count]);
    }
}

