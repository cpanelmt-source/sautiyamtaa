@extends('layouts.app')

@section('title', $event['title'] . ' - Sauti ya Mtaa')

@section('content')

<div class="bg-white">
    <!-- Header with Background Image -->
    <div class="relative bg-brand-dark">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ $event['featured_image_url'] }}" alt="Background image for {{ $event['title'] }}">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>
        <div class="relative container mx-auto px-6 py-24 md:py-32 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">{!! $event['title'] !!}</h1>
        </div>
    </div>

    <!-- Event Info Bar -->
    <div class="bg-gray-100 border-b border-t border-gray-200">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 text-center divide-y md:divide-y-0 md:divide-x divide-gray-200">
                <div class="py-6">
                    <h3 class="text-sm font-bold uppercase text-gray-500 tracking-wider">Date</h3>
                    <p class="text-xl font-semibold text-brand-dark mt-1">{{ $event['event_date_formatted'] }}</p>
                </div>
                <div class="py-6">
                    <h3 class="text-sm font-bold uppercase text-gray-500 tracking-wider">Time</h3>
                    <p class="text-xl font-semibold text-brand-dark mt-1">{{ $event['event_time'] }}</p>
                </div>
                <div class="py-6">
                    <h3 class="text-sm font-bold uppercase text-gray-500 tracking-wider">Location</h3>
                    <p class="text-xl font-semibold text-brand-dark mt-1">{{ $event['event_location'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Description -->
    <div class="py-16 md:py-24">
        <div class="container mx-auto px-6">
            <div class="prose lg:prose-xl max-w-4xl mx-auto text-gray-700 leading-relaxed">
                <h2 class="font-bold text-3xl text-brand-dark mb-4">About The Event</h2>
                {!! $event['content'] !!}
            </div>
        </div>
    </div>
</div>

@endsection
