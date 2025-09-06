<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProgramController extends Controller
{
    private $wpApiUrl = 'https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/programs';

    /**
     * Display a listing of all programs.
     */
    public function index()
    {
        $programs = Cache::remember('all_programs', now()->addMinutes(10), function () {
            $response = Http::withoutVerifying()->get($this->wpApiUrl, ['_embed' => '']);
            return $response->json();
        });

        return view('programs.index', compact('programs'));
    }

    /**
     * Display a single program.
     */
    public function show($slug)
    {
        $programData = Cache::remember("program_{$slug}", now()->addMinutes(10), function () use ($slug) {
            $response = Http::get($this->wpApiUrl, [
                'slug' => $slug,
                '_embed' => ''
            ]);
            return $response->json()[0] ?? null;
        });

        if (!$programData) {
            abort(404, 'Program not found');
        }

        // Handle the objectives list from the text area
        $objectivesText = $programData['acf']['objectives_list'] ?? '';
        // Split the text by new lines, trim whitespace, and remove any empty lines
        $objectivesArray = array_filter(array_map('trim', explode("\n", $objectivesText)));

        // Map the API data to a simple array for the view
        $program = [
            'title' => $programData['title']['rendered'],
            'content' => $programData['content']['rendered'],
            'short_description' => $programData['acf']['short_description'] ?? '',
            'cover_image_url' => $programData['acf']['cover_image'] ?? 'https://placehold.co/1200x600/E53935/FFFFFF?text=Program',
            'objectives' => $objectivesArray,
            'testimonial_photo_url' => $programData['acf']['testimonial_photo'] ?? 'https://placehold.co/100x100/1A1A1A/FFFFFF?text=Person',
            'testimonial_name' => $programData['acf']['testimonial_name'] ?? 'Anonymous',
            'testimonial_quote' => $programData['acf']['testimonial_quote'] ?? 'This program had a wonderful impact on my life.',
        ];
        
        return view('programs.show', compact('program'));
    }
}

