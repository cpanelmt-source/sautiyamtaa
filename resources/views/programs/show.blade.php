@extends('layouts.app')

@section('title', $program['title'] . ' - Sauti ya Mtaa')

@section('content')

<!-- 1. Program Header -->
<section class="bg-gradient-to-br from-brand-dark via-brand-dark to-gray-900 text-white py-20 md:py-28 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight mb-6 bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
            {{ $program['title'] }}
        </h1>
        <p class="mt-4 text-lg md:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed font-medium">
            {{ $program['short_description'] }}
        </p>
        <div class="mt-8 h-1 w-24 bg-gradient-to-r from-brand-red to-red-400 mx-auto rounded-full"></div>
    </div>
</section>

<!-- 2. Program Details & Objectives -->
<section class="py-20 md:py-28 bg-white relative">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-16">
            <!-- Main Content -->
            <div class="md:col-span-2">
                <div class="mb-8">
                    <h2 class="text-3xl md:text-4xl font-black text-brand-dark mb-2 tracking-tight">Program Overview</h2>
                    <div class="h-1 w-16 bg-gradient-to-r from-brand-red to-red-400 rounded-full"></div>
                </div>
                
                <div class="mb-8 group">
                    <img src="{{ $program['cover_image_url'] }}" 
                         alt="Image for {{ $program['title'] }}" 
                         class="rounded-2xl shadow-2xl w-full object-cover transition-all duration-500 group-hover:shadow-3xl group-hover:scale-[1.02]">
                </div>
                
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <div class="first-letter:text-5xl first-letter:font-black first-letter:text-brand-red first-letter:float-left first-letter:mr-3 first-letter:mt-1">
                        {!! $program['content'] !!}
                    </div>
                </div>
            </div>
            
            <!-- Sidebar with Key Objectives -->
            <aside class="relative">
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 sticky top-8 backdrop-blur-sm">
                    <div class="mb-6">
                        <h3 class="text-2xl md:text-3xl font-black text-brand-dark mb-2 tracking-tight">Key Objectives</h3>
                        <div class="h-1 w-12 bg-gradient-to-r from-brand-red to-red-400 rounded-full"></div>
                    </div>
                    
                    @if(!empty($program['objectives']))
                        <ul class="space-y-4">
                            @foreach($program['objectives'] as $objective)
                            <li class="flex items-start group">
                                <div class="flex-shrink-0 mr-4 mt-1">
                                    <div class="w-8 h-8 bg-gradient-to-br from-brand-red to-red-400 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <span class="text-gray-700 font-medium leading-relaxed">{{ $objective }}</span>
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="text-center py-8">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <p class="text-gray-500 font-medium">Details on objectives will be updated soon.</p>
                        </div>
                    @endif
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- 3. Success Story / Testimonial -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 via-gray-100 to-gray-50 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-red rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-brand-dark rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="mb-12">
            <h2 class="text-3xl md:text-4xl font-black text-brand-dark mb-4 tracking-tight">Impact Story</h2>
            <div class="h-1 w-20 bg-gradient-to-r from-brand-red to-red-400 mx-auto rounded-full"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-2xl border border-gray-100 backdrop-blur-sm">
                <div class="mb-8">
                    <div class="relative inline-block">
                        <img src="{{ $program['testimonial_photo_url'] }}" 
                             alt="Photo of {{ $program['testimonial_name'] }}" 
                             class="w-28 h-28 rounded-full mx-auto border-4 border-white shadow-2xl object-cover bg-gray-200 ring-4 ring-brand-red/10">
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-br from-brand-red to-red-400 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <blockquote class="text-xl md:text-2xl text-gray-700 italic font-medium leading-relaxed mb-8">
                    "{{ $program['testimonial_quote'] }}"
                </blockquote>
                
                <div class="border-t border-gray-200 pt-6">
                    <p class="font-black text-brand-dark text-lg">{{ $program['testimonial_name'] }}</p>
                    <p class="text-brand-red font-semibold">Program Graduate</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection