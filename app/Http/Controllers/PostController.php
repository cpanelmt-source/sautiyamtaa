<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    // Define the base API URL for your WordPress posts
    private $wpApiUrl = 'https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/posts';

    /**
     * Display a listing of all blog posts.
     */
    public function index()
    {
        // Cache the results for 10 minutes to improve performance
        $posts = Cache::remember('all_blog_posts', now()->addMinutes(10), function () {
            // Fetch all posts from the WordPress API
            // The '_embed' parameter includes featured image data directly
            $response = Http::withoutVerifying()->get($this->wpApiUrl, ['_embed' => '']);
            return $response->json();
        });

        // Pass the posts data to the view
        return view('blog.index', compact('posts'));
    }

    /**
     * Display a single blog post.
     */
    public function show($slug)
    {
        // Cache the result for this specific post for 10 minutes
        $postData = Cache::remember("blog_post_{$slug}", now()->addMinutes(10), function () use ($slug) {
            // Fetch the specific post by its slug
            $response = Http::get($this->wpApiUrl, [
                'slug' => $slug,
                '_embed' => '' // Also embed media for the single post
            ]);
            // The API returns an array, we want the first (and only) item
            return $response->json()[0] ?? null;
        });

        // If the API returned no post for that slug, show a 404 error page
        if (!$postData) {
            abort(404, 'Post not found');
        }

        // Map the complex API response to a simple array for the view
        $post = [
            'title' => $postData['title']['rendered'],
            'content' => $postData['content']['rendered'],
            'date' => \Carbon\Carbon::parse($postData['date'])->format('F j, Y'),
            'featured_image_url' => $postData['acf']['featured_image'] ?? 'https://placehold.co/1200x600/E53935/FFFFFF?text=Sauti+ya+Mtaa',
        ];

        // Pass the simplified post data to the view
        return view('blog.show', compact('post'));
    }
}
