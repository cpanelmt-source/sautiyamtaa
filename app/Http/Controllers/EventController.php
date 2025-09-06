<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;

class EventController extends Controller
{
    private $wpApiUrl = 'https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/events';

    /**
     * Display a listing of all events.
     */
    public function index()
    {
        $events = Cache::remember('all_events_list', now()->addMinutes(10), function () {
            try {
                // Fetch all published events, regardless of date
                $response = Http::get($this->wpApiUrl, ['per_page' => 50, '_embed' => '']);
                
                logger()->info('WP API Response', $response->json());
                if (!$response->successful() || empty($response->json())) {
                    return collect([]); // Return an empty collection on failure
                }
               

                // Filter out any events that don't have a date set, and sort them
                return collect($response->json())
                    ->filter(fn($event) => !empty(data_get($event, 'acf.event_date')))
                    ->sortBy(fn($event) => data_get($event, 'acf.event_date'))
                    ->values(); // Reset keys

            } catch (\Exception $e) {
                return collect([]);
            }
        });

        return view('events.index', compact('events'));
    }

    /**
     * Display a single event.
     */
    public function show($slug)
    {
        $eventData = Cache::remember("event_{$slug}", now()->addMinutes(10), function () use ($slug) {
            try {
                $response = Http::get($this->wpApiUrl, ['slug' => $slug, '_embed' => '']);
                return $response->successful() ? ($response->json()[0] ?? null) : null;
            } catch (\Exception $e) {
                return null;
            }
        });

        if (!$eventData) {
            abort(404, 'Event not found');
        }

        return view('events.show', compact('eventData'));
    }
}

