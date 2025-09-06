@extends('layouts.app')

@section('title', $program['title'] . ' - Sauti ya Mtaa')

@section('content')

<!-- 1. Program Header -->
<section class="bg-brand-dark text-white py-16 md:py-24">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">{{ $program['title'] }}</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
            {{ $program['short_description'] }}
        </p>
    </div>
</section>

<!-- 2. Program Details & Objectives -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="md:col-span-2">
                <h2 class="text-3xl font-bold text-brand-dark mb-4">Program Overview</h2>
                
                <img src="{{ $program['cover_image_url'] }}" alt="Image for {{ $program['title'] }}" class="rounded-lg shadow-lg w-full mb-6 object-cover">
                
                <div class="prose max-w-none text-gray-600 leading-relaxed">
                    {!! $program['content'] !!}
                </div>
            </div>
            
            <!-- Sidebar with Key Objectives -->
            <aside class="bg-gray-50 p-8 rounded-lg shadow-md self-start">
                <h3 class="text-2xl font-bold text-brand-dark mb-4">Key Objectives</h3>
                @if(!empty($program['objectives']))
                    <ul class="space-y-3 text-gray-700">
                        @foreach($program['objectives'] as $objective)
                        <li class="flex items-start">
                             <svg class="w-6 h-6 text-brand-red mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>{{ $objective }}</span>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-600">Details on objectives will be updated soon.</p>
                @endif
            </aside>
        </div>
    </div>
</section>

<!-- 3. Success Story / Testimonial -->
<section class="py-16 md:py-24 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-brand-dark mb-8">Impact Story</h2>
        <div class="max-w-3xl mx-auto">
            <img src="{{ $program['testimonial_photo_url'] }}" alt="Photo of {{ $program['testimonial_name'] }}" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow-lg object-cover bg-gray-200">
            <blockquote class="text-xl text-gray-700 italic">
                "{{ $program['testimonial_quote'] }}"
            </blockquote>
            <p class="mt-4 font-bold text-brand-dark">- {{ $program['testimonial_name'] }}, Program Graduate</p>
        </div>
    </div>
</section>

@endsection

