@extends('layouts.app')

@section('title', $post['title'] . ' - Sauti ya Mtaa')

@section('content')

<div class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <article class="max-w-4xl mx-auto">
            <!-- Post Header -->
            <header class="mb-8 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-brand-dark tracking-tight mb-4">{!! $post['title'] !!}</h1>
                <p class="text-lg text-gray-500">Published on {{ $post['date'] }}</p>
            </header>

            <!-- Featured Image -->
            <div class="mb-8">
                <img src="{{ $post['featured_image_url'] }}" alt="Featured image for {{ $post['title'] }}" class="w-full rounded-lg shadow-xl">
            </div>

            <!-- Post Content -->
            <div class="prose lg:prose-xl max-w-none text-gray-700 leading-relaxed">
                {{-- The {!! !!} syntax is crucial here to render all the formatting (paragraphs, headings, etc.) from the WordPress editor --}}
                {!! $post['content'] !!}
            </div>
        </article>
    </div>
</div>

@endsection
