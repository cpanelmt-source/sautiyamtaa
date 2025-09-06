<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    /**
     * Display the homepage.
     */
    public function home()
    {
        // Fetch the next 3 upcoming events
        $events = Cache::remember('upcoming_events_homepage', now()->addMinutes(10), function () {
            try {
                $response = Http::get('https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/events', [
                    'orderby' => 'meta_value',
                    'meta_key' => 'event_date',
                    'order' => 'asc',
                    'per_page' => 3,
                    '_embed' => ''
                ]);
                return $response->successful() ? $response->json() : [];
            } catch (\Exception $e) {
                return [];
            }
        });

        // Fetch the global site settings
        $siteSettings = Cache::remember('global_site_settings', now()->addMinutes(10), function () {
            try {
                $response = Http::get('https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/site_settings');
                
                if ($response->successful() && !empty($response->json())) {
                    return $response->json()[0]['acf'] ?? [];
                }
                return [];
            } catch (\Exception $e) {
                return [];
            }
        });

        return view('home', compact('events', 'siteSettings'));
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        // Fetch the global site settings (for contact info, etc.)
        $siteSettings = Cache::remember('global_site_settings', now()->addMinutes(10), function () {
            try {
                $response = Http::get('https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/site_settings');
                
                if ($response->successful() && !empty($response->json())) {
                    return $response->json()[0]['acf'] ?? [];
                }
                return [];
            } catch (\Exception $e) {
                return [];
            }
        });

        return view('about', compact('siteSettings'));
    }

    /**
     * Display the get involved page.
     */
    public function getInvolved()
    {
        // Fetch the global site settings (for donation info)
        $siteSettings = Cache::remember('global_site_settings', now()->addMinutes(10), function () {
            try {
                $response = Http::get('https://cns.sautiyamtaa.co.ke/wp/wp-json/wp/v2/site_settings');

                if ($response->successful() && !empty($response->json())) {
                    return $response->json()[0]['acf'] ?? [];
                }
                return [];
            } catch (\Exception $e) {
                return [];
            }
        });

        return view('get-involved', compact('siteSettings'));
    }
}

