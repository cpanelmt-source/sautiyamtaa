@extends('layouts.app')

@section('title', 'Events - Sauti ya Mtaa')

@section('content')

<!-- Premium Page Header with Animated Background -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-red-900">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute top-0 left-0 w-full h-full opacity-20">
            <div class="absolute top-20 left-20 w-72 h-72 bg-red-500 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-600 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white rounded-full blur-3xl opacity-10 animate-pulse animation-delay-2000"></div>
        </div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-16 right-16 opacity-30 hidden lg:block">
        <i class="fas fa-calendar-alt text-6xl text-red-400 floating"></i>
    </div>
    <div class="absolute bottom-16 left-16 opacity-20 hidden lg:block">
        <i class="fas fa-users text-5xl text-white animate-pulse"></i>
    </div>

    <div class="container mx-auto px-6 text-center text-white relative z-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-display text-5xl md:text-7xl font-bold mb-6 animate-fade-in-down">
                <span class="bg-gradient-to-r from-white via-red-200 to-red-400 bg-clip-text text-transparent">
                    Community Events
                </span>
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8 animate-fade-in-up"></div>
            <p class="text-xl md:text-2xl text-gray-200 leading-relaxed animate-fade-in-up animation-delay-300 max-w-3xl mx-auto">
                Join us for transformative workshops, inspiring fundraisers, and meaningful community gatherings that bring our mission to life.
            </p>
            
            <!-- Event Categories Filter -->
            <div class="mt-12 flex flex-wrap justify-center gap-4 animate-fade-in-up animation-delay-600">
                <button class="filter-btn active glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="all">
                    All Events
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="workshop">
                    Workshops
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="fundraiser">
                    Fundraisers
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="community">
                    Community Gatherings
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl opacity-70"></i>
    </div>
</section>

<!-- Enhanced Events List Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/20 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Events Grid -->
            <div id="events-container" class="space-y-8">
                @forelse ($events as $event)
                    @if(data_get($event, 'slug'))
                    <div class="event-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d" 
                         data-category="{{ strtolower(data_get($event, 'acf.event_category', 'community')) }}">
                        <div class="md:flex">
                            <!-- Enhanced Image Section -->
                            <div class="md:w-2/5 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <a href="{{ route('events.show', data_get($event, 'slug')) }}">
                                    <img class="h-64 md:h-full w-full object-cover transform group-hover:scale-110 transition-transform duration-700" 
                                         src="{{ data_get($event, 'acf.featured_image', 'https://placehold.co/600x400/E53935/FFFFFF?text=Sauti+ya+Mtaa+Event') }}" 
                                         alt="Image for {{ data_get($event, 'title.rendered') }}">
                                </a>
                                <!-- Event Category Badge -->
                                <div class="absolute top-4 left-4 z-20">
                                    <span class="inline-block bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                        {{ ucfirst(data_get($event, 'acf.event_category', 'Community Event')) }}
                                    </span>
                                </div>
                                <!-- Date Badge -->
                                @if(data_get($event, 'acf.event_date'))
                                <div class="absolute bottom-4 right-4 z-20">
                                    <div class="glass text-white px-4 py-2 rounded-lg text-sm font-semibold">
                                        <i class="fas fa-calendar-alt mr-2"></i>
                                        {{ \Carbon\Carbon::parse(data_get($event, 'acf.event_date'))->format('M d') }}
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Enhanced Content Section -->
                            <div class="md:w-3/5 p-8 flex flex-col justify-between">
                                <div class="space-y-4">
                                    <!-- Event Meta Info -->
                                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                                        @if(data_get($event, 'acf.event_date'))
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-red-500 mr-2"></i>
                                            <span class="font-semibold text-red-600">
                                                {{ \Carbon\Carbon::parse(data_get($event, 'acf.event_date'))->format('F j, Y') }}
                                            </span>
                                        </div>
                                        @endif
                                        @if(data_get($event, 'acf.event_time'))
                                        <div class="flex items-center">
                                            <i class="fas fa-clock text-red-500 mr-2"></i>
                                            <span>{{ data_get($event, 'acf.event_time') }}</span>
                                        </div>
                                        @endif
                                        @if(data_get($event, 'acf.event_location'))
                                        <div class="flex items-center">
                                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                                            <span>{{ data_get($event, 'acf.event_location') }}</span>
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Event Title -->
                                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 leading-tight group-hover:text-red-500 transition-colors duration-300">
                                        <a href="{{ route('events.show', data_get($event, 'slug')) }}" class="hover:text-red-500">
                                            {!! data_get($event, 'title.rendered') !!}
                                        </a>
                                    </h2>

                                    <!-- Event Excerpt -->
                                    <div class="text-gray-600 leading-relaxed text-lg">
                                        {!! data_get($event, 'excerpt.rendered') !!}
                                    </div>

                                    <!-- Event Tags/Features -->
                                    @if(data_get($event, 'acf.event_features'))
                                    <div class="flex flex-wrap gap-2">
                                        @foreach(explode(',', data_get($event, 'acf.event_features')) as $feature)
                                        <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                            {{ trim($feature) }}
                                        </span>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>

                                <!-- Enhanced Action Section -->
                                <div class="mt-8 flex items-center justify-between">
                                    <a href="{{ route('events.show', data_get($event, 'slug')) }}" 
                                       class="magnetic-btn inline-flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red group">
                                        <span>View Event Details</span>
                                        <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </a>
                                    
                                    <!-- Social Share Buttons -->
                                    <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <button class="w-10 h-10 bg-blue-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                                onclick="shareEvent('facebook', '{{ route('events.show', data_get($event, 'slug')) }}')">
                                            <i class="fab fa-facebook-f text-sm"></i>
                                        </button>
                                        <button class="w-10 h-10 bg-sky-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                                onclick="shareEvent('twitter', '{{ route('events.show', data_get($event, 'slug')) }}')">
                                            <i class="fab fa-twitter text-sm"></i>
                                        </button>
                                        <button class="w-10 h-10 bg-green-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                                onclick="shareEvent('whatsapp', '{{ route('events.show', data_get($event, 'slug')) }}')">
                                            <i class="fab fa-whatsapp text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @empty
                    <!-- Enhanced Empty State -->
                    <div class="text-center py-24">
                        <div class="max-w-md mx-auto">
                            <div class="text-8xl text-gray-300 mb-8">
                                <i class="fas fa-calendar-times"></i>
                            </div>
                            <h3 class="font-display text-3xl font-bold text-gray-700 mb-4">No Events Found</h3>
                            <p class="text-xl text-gray-500 mb-8 leading-relaxed">
                                We're planning amazing events for our community! Check back soon for exciting upcoming gatherings.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105">
                                    <i class="fas fa-home mr-2"></i>Back to Home
                                </a>
                                <a href="/get-involved" class="magnetic-btn glass-dark text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                                    <i class="fas fa-bell mr-2"></i>Get Notified
                                </a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Signup Section -->
<section class="py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-red-500/10 to-transparent"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-red-600/10 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">
                Never Miss an <span class="text-red-400">Event</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                Subscribe to our newsletter and be the first to know about upcoming community events, workshops, and opportunities to get involved.
            </p>
            
            <form class="flex flex-col sm:flex-row max-w-md mx-auto gap-4" id="newsletter-form">
                <input type="email" placeholder="Enter your email address" required
                       class="flex-1 px-6 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-400 focus:bg-white/15 transition-all duration-300">
                <button type="submit" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    <i class="fas fa-bell mr-2"></i>Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Filter System
    const filterBtns = document.querySelectorAll('.filter-btn');
    const eventCards = document.querySelectorAll('.event-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active', 'bg-red-500', 'text-white'));
            btn.classList.add('active', 'bg-red-500', 'text-white');
            
            // Filter events with smooth animation
            eventCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px) scale(0.95)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Enhanced Magnetic Effect for Buttons
    document.querySelectorAll('.magnetic-btn').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            btn.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px) scale(1.02)`;
        });
        
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0px, 0px) scale(1)';
        });
    });

    // Smooth Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.event-card');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0) scale(1)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px) scale(0.95)';
        el.style.transition = 'all 0.8s cubic-bezier(0.23, 1, 0.320, 1)';
        revealObserver.observe(el);
    });

    // Newsletter Form Submission
    document.getElementById('newsletter-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const button = e.target.querySelector('button');
        const originalText = button.innerHTML;
        
        button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Subscribing...';
        button.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            button.innerHTML = '<i class="fas fa-check mr-2"></i>Subscribed!';
            button.classList.add('bg-green-500');
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
                button.classList.remove('bg-green-500');
                e.target.reset();
            }, 2000);
        }, 2000);
    });
});

// Social Sharing Function
function shareEvent(platform, url) {
    const title = encodeURIComponent('Join us for this amazing Sauti ya Mtaa event!');
    const text = encodeURIComponent('Check out this community event from Sauti ya Mtaa');
    
    let shareUrl;
    switch(platform) {
        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            break;
        case 'twitter':
            shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${text}`;
            break;
        case 'whatsapp':
            shareUrl = `https://wa.me/?text=${text}%20${encodeURIComponent(url)}`;
            break;
    }
    
    if (shareUrl) {
        window.open(shareUrl, '_blank', 'width=600,height=400');
    }
}

// Enhanced CSS Animations
const enhancedStyle = document.createElement('style');
enhancedStyle.textContent = `
    @keyframes fade-in-down {
        0% { opacity: 0; transform: translateY(-40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fade-in-up {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fade-in-down { 
        animation: fade-in-down 1.2s cubic-bezier(0.23, 1, 0.320, 1) forwards; 
    }
    .animate-fade-in-up { 
        animation: fade-in-up 1.2s cubic-bezier(0.23, 1, 0.320, 1) forwards; 
        animation-fill-mode: both;
    }
    
    .animation-delay-300 { animation-delay: 0.3s; }
    .animation-delay-600 { animation-delay: 0.6s; }
    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }
    
    .floating {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    .glass-dark {
        backdrop-filter: blur(20px);
        background: rgba(15, 15, 15, 0.85);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .glass {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .glow-red {
        box-shadow: 0 0 30px rgba(229, 57, 53, 0.3);
    }
    
    .glow-red:hover {
        box-shadow: 0 0 50px rgba(229, 57, 53, 0.5);
    }
    
    .card-3d {
        transform-style: preserve-3d;
        transition: transform 0.3s ease;
    }
    
    .card-3d:hover {
        transform: rotateX(2deg) rotateY(2deg) scale(1.01);
    }
    
    .magnetic-btn {
        transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
        position: relative;
        overflow: hidden;
    }
    
    .magnetic-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }
    
    .magnetic-btn:hover::before {
        left: 100%;
    }
    
    .filter-btn.active {
        background: linear-gradient(45deg, #E53935, #C62828) !important;
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(229, 57, 53, 0.4);
    }
    
    .event-card {
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }
`;
document.head.appendChild(enhancedStyle);
</script>

@endsection