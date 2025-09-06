@extends('layouts.app')

@section('title', 'Sauti ya Mtaa - Empowering Youth and Communities')

@section('content')

<!-- 1. Enhanced Hero Section with Premium Carousel -->
<section class="relative h-screen w-full overflow-hidden">
    <!-- Carousel Wrapper with Premium Effects -->
    <div id="hero-carousel" class="relative h-full w-full">
        <!-- Slide 1 -->
        <div class="carousel-item active absolute inset-0 transition-all duration-2000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent z-10"></div>
            <img src="http://cns.sautiyamtaa.co.ke/wp/wp-content/uploads/2025/09/children-200066_1280.jpg" alt="Youth Empowerment Program" class="w-full h-full object-cover scale-105 hover:scale-110 transition-transform duration-10000">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item absolute inset-0 opacity-0 transition-all duration-2000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-l from-black/70 via-black/50 to-transparent z-10"></div>
            <img src="http://cns.sautiyamtaa.co.ke/wp/wp-content/uploads/2025/09/2001809_thumbnail_1080x810.jpg" alt="Skills Development Initiative" class="w-full h-full object-cover scale-105 hover:scale-110 transition-transform duration-10000">
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item absolute inset-0 opacity-0 transition-all duration-2000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-r from-red-900/60 via-black/50 to-transparent z-10"></div>
            <img src="http://cns.sautiyamtaa.co.ke/wp/wp-content/uploads/2025/09/10-frame-assembled-hive-kits-no-bees-821599.webp" alt="Community Outreach" class="w-full h-full object-cover scale-105 hover:scale-110 transition-transform duration-10000">
        </div>
    </div>

   

    <!-- Carousel Indicators -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20">
        <button class="carousel-indicator active w-12 h-2 bg-white/50 rounded-full transition-all duration-300 hover:bg-white" data-slide="0"></button>
        <button class="carousel-indicator w-12 h-2 bg-white/30 rounded-full transition-all duration-300 hover:bg-white" data-slide="1"></button>
        <button class="carousel-indicator w-12 h-2 bg-white/30 rounded-full transition-all duration-300 hover:bg-white" data-slide="2"></button>
    </div>

    <!-- Enhanced Hero Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 z-20">
        <div class="max-w-5xl mx-auto pt-20">
            <h1 class="font-display text-5xl md:text-8xl font-bold mb-6 text-white leading-tight animate-fade-in-down">
                <span class="bg-gradient-to-r from-white via-red-200 to-red-400 bg-clip-text text-transparent">
                    Amplifying Youth Voices
                </span>
                <br>
                <span class="text-3xl md:text-5xl font-light text-gray-200">
                    Transforming Communities
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-12 font-light leading-relaxed animate-fade-in-up max-w-3xl mx-auto">
                We are Sauti ya Mtaa, providing platforms for advocacy, mentorship, and life-changing opportunities that empower youth and strengthen communities.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center animate-fade-in-up animation-delay-600">
                <a href="/get-involved" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-10 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red pulse-glow text-lg">
                    <i class="fas fa-rocket mr-3"></i>Get Involved Now
                </a>
                <a href="/about" class="glass text-white font-semibold py-4 px-10 rounded-full hover:bg-white/20 transition-all duration-300 transform hover:scale-105 text-lg">
                    <i class="fas fa-play-circle mr-3"></i>Discover Our Story
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-20 right-20 opacity-20 animate-bounce animation-delay-1000 hidden lg:block">
        <i class="fas fa-heart text-6xl text-red-400"></i>
    </div>
    <div class="absolute bottom-32 left-20 opacity-20 animate-pulse animation-delay-2000 hidden lg:block">
        <i class="fas fa-users text-5xl text-white"></i>
    </div>
</section>

<!-- 2. Enhanced Who We Are Section -->
<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/20 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-red-500/20 to-transparent rounded-2xl blur-lg"></div>
                <img src="http://cns.sautiyamtaa.co.ke/wp/wp-content/uploads/2025/09/group-3137670_1280.jpg" 
                     alt="Sauti ya Mtaa team and community members" 
                     class="relative rounded-2xl shadow-2xl w-full hover:shadow-3xl transition-all duration-500 card-3d">
            </div>
            <div class="space-y-8">
                <div>
                    <h2 class="font-display text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                        Who <span class="text-red-500">We Are</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-red-600 rounded-full mb-6"></div>
                </div>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    Sauti ya Mtaa is a beacon of hope dedicated to empowering the youth and vulnerable members of our communities. We believe in creating sustainable change by offering robust platforms for advocacy, providing critical mentorship, and opening doors to life-changing opportunities.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed mb-8">
                    Our mission extends beyond traditional community work – we're building a movement that amplifies the voices of those who need to be heard most.
                </p>
                <a href="/about" class="inline-flex items-center magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    Learn More About Our Mission 
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. Premium Programs Section -->
<section class="py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-red-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-600 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="font-display text-4xl md:text-6xl font-bold mb-6">
                Our Core <span class="text-red-400">Programs</span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 leading-relaxed">
                We offer several impactful programs designed to foster growth, leadership, and self-sufficiency in our communities.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Program Card 1 -->
            <div class="card-3d group">
                <div class="glass-dark p-8 rounded-2xl hover:bg-white/10 transition-all duration-500 h-full border border-white/10">
                    <div class="text-6xl text-red-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-4 text-white">Youth Leadership</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Developing the next generation of community leaders through intensive mentorship and transformative training programs.
                    </p>
                    <a href="/programs" class="inline-flex items-center text-red-400 font-semibold hover:text-red-300 transition-colors">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Program Card 2 -->
            <div class="card-3d group">
                <div class="glass-dark p-8 rounded-2xl hover:bg-white/10 transition-all duration-500 h-full border border-white/10">
                    <div class="text-6xl text-red-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-4 text-white">Skills Development</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Providing comprehensive vocational and entrepreneurial training to equip youth with highly marketable skills.
                    </p>
                    <a href="/programs" class="inline-flex items-center text-red-400 font-semibold hover:text-red-300 transition-colors">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Program Card 3 -->
            <div class="card-3d group">
                <div class="glass-dark p-8 rounded-2xl hover:bg-white/10 transition-all duration-500 h-full border border-white/10">
                    <div class="text-6xl text-red-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-4 text-white">Community Outreach</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Supporting vulnerable families with essential resources while fostering stronger community bonds and resilience.
                    </p>
                    <a href="/programs" class="inline-flex items-center text-red-400 font-semibold hover:text-red-300 transition-colors">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Premium Impact Stats Section -->
<section class="py-24 bg-gradient-to-r from-red-500 to-red-600 text-white relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-black/20 to-transparent"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-black/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-6xl font-bold mb-6">Our Impact</h2>
            <div class="w-24 h-1 bg-white rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-red-100 max-w-2xl mx-auto">
                Numbers that tell the story of transformation and hope in our communities.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 mb-4">
                    <p class="text-6xl md:text-7xl font-extrabold text-white mb-2" id="youth-counter">0+</p>
                    <p class="text-xl text-red-100 font-semibold">Youth Empowered</p>
                </div>
                <p class="text-red-200 text-sm">Lives transformed through our programs</p>
            </div>
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 mb-4">
                    <p class="text-6xl md:text-7xl font-extrabold text-white mb-2" id="communities-counter">0+</p>
                    <p class="text-xl text-red-100 font-semibold">Communities Served</p>
                </div>
                <p class="text-red-200 text-sm">Neighborhoods strengthened and supported</p>
            </div>
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 mb-4">
                    <p class="text-6xl md:text-7xl font-extrabold text-white mb-2" id="years-counter">0+</p>
                    <p class="text-xl text-red-100 font-semibold">Years of Service</p>
                </div>
                <p class="text-red-200 text-sm">Dedicated years of community impact</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Enhanced Upcoming Events Section -->
<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Upcoming <span class="text-red-500">Events</span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-500 to-red-600 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Get involved, learn something new, and connect with your community. Join us at our next transformative event!
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($events as $event)
                <div class="card-3d group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <div class="p-8 h-full flex flex-col">
                        <div class="mb-6">
                            <div class="inline-block bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-full text-sm font-bold mb-4">
                                {{ \Carbon\Carbon::parse($event['acf']['event_date'])->format('M d, Y') }}
                            </div>
                            <h3 class="font-display text-2xl font-bold text-gray-900 group-hover:text-red-500 transition-colors duration-300 mb-3">
                                <a href="{{ route('events.show', $event['slug']) }}">{!! $event['title']['rendered'] !!}</a>
                            </h3>
                        </div>
                        <div class="text-gray-600 mb-6 flex-grow leading-relaxed">
                            {!! $event['excerpt']['rendered'] !!}
                        </div>
                        <a href="{{ route('events.show', $event['slug']) }}" class="inline-flex items-center magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-semibold py-3 px-6 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 self-start">
                            View Event Details
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="md:col-span-3 text-center py-16">
                    <div class="text-6xl text-gray-300 mb-6">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-500 mb-4">No Upcoming Events</h3>
                    <p class="text-gray-400 max-w-md mx-auto">
                        We're planning something amazing! Check back soon for exciting upcoming events.
                    </p>
                </div>
            @endforelse
        </div>

        @if(count($events) > 0)
        <div class="text-center mt-16">
            <a href="{{ route('events.index') }}" class="magnetic-btn bg-gradient-to-r from-gray-800 to-gray-900 text-white font-bold py-4 px-10 rounded-full hover:from-gray-900 hover:to-black transition-all duration-300 transform hover:scale-105 glow-red">
                <i class="fas fa-calendar-check mr-3"></i>View All Events
            </a>
        </div>
        @endif
    </div>
</section>

<!-- 6. Premium Call to Action Section -->
<section class="py-24 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-red-500/10 to-transparent"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-red-600/10 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-display text-4xl md:text-6xl font-bold mb-8">
                Ready to Make a <span class="text-red-400">Difference?</span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 leading-relaxed mb-12 max-w-2xl mx-auto">
                Your support can change lives and transform communities. Join us in our mission to empower youth and build a stronger, more equitable future for all.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                <a href="/get-involved" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-10 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red pulse-glow w-full sm:w-auto">
                    <i class="fas fa-heart mr-3"></i>Donate Now
                </a>
                <a href="/get-involved" class="magnetic-btn glass border-2 border-white/20 text-white font-bold py-4 px-10 rounded-full hover:bg-white/10 hover:border-red-400 transition-all duration-300 transform hover:scale-105 w-full sm:w-auto">
                    <i class="fas fa-hands-helping mr-3"></i>Volunteer With Us
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Hero Carousel with Premium Effects
    const carouselItems = document.querySelectorAll('.carousel-item');
    const indicators = document.querySelectorAll('.carousel-indicator');
    
    if (carouselItems.length > 0) {
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        let currentIndex = 0;
        let intervalId = null;

        function showSlide(index) {
            // Update carousel items
            carouselItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.add('active');
                    item.classList.remove('opacity-0');
                    item.style.transform = 'scale(1.05)';
                } else {
                    item.classList.remove('active');
                    item.classList.add('opacity-0');
                    item.style.transform = 'scale(1)';
                }
            });

            // Update indicators
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.add('active', 'bg-white');
                    indicator.classList.remove('bg-white/30');
                } else {
                    indicator.classList.remove('active', 'bg-white');
                    indicator.classList.add('bg-white/30');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            showSlide(currentIndex);
        }
        
        function prevSlide() {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            showSlide(currentIndex);
        }

        function startCarousel() {
            stopCarousel();
            intervalId = setInterval(nextSlide, 6000);
        }
        
        function stopCarousel() {
            clearInterval(intervalId);
        }

        // Event listeners
        nextBtn.addEventListener('click', () => {
            stopCarousel();
            nextSlide();
            startCarousel();
        });

        prevBtn.addEventListener('click', () => {
            stopCarousel();
            prevSlide();
            startCarousel();
        });

        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                stopCarousel();
                currentIndex = index;
                showSlide(currentIndex);
                startCarousel();
            });
        });

        // Pause on hover
        const heroSection = carouselItems[0].parentElement.parentElement;
        heroSection.addEventListener('mouseenter', stopCarousel);
        heroSection.addEventListener('mouseleave', startCarousel);

        startCarousel();
    }

    // Enhanced Animated Stats Counter with Easing
    function animateCounter(element, target) {
        if (!element || !target) return;
        
        let current = 0;
        const duration = 3000;
        const startTime = performance.now();
        
        function easeOutQuart(t) {
            return 1 - Math.pow(1 - t, 4);
        }
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutQuart(progress);
            
            current = Math.ceil(target * easedProgress);
            element.textContent = current + '+';
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target + '+';
            }
        }
        
        requestAnimationFrame(updateCounter);
    }

    // Intersection Observer for Stats Animation
    const statsSection = document.getElementById('youth-counter')?.closest('section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        animateCounter(document.getElementById('youth-counter'), {{ $siteSettings['stat_youth_empowered'] ?? 0 }});
                    }, 200);
                    setTimeout(() => {
                        animateCounter(document.getElementById('communities-counter'), {{ $siteSettings['stat_communities_served'] ?? 0 }});
                    }, 400);
                    setTimeout(() => {
                        animateCounter(document.getElementById('years-counter'), {{ $siteSettings['stat_years_of_service'] ?? 0 }});
                    }, 600);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        observer.observe(statsSection);
    }

    // Smooth Scroll Reveal Animation
    const revealElements = document.querySelectorAll('[class*="animate-fade-in"]');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s cubic-bezier(0.23, 1, 0.320, 1)';
        revealObserver.observe(el);
    });

    // Enhanced Magnetic Effect for Premium Buttons
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
});

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
        animation: fade-in-up 1.2s cubic-bezier(0.23, 1, 0.320, 1) 0.8s forwards; 
        animation-fill-mode: both; 
    }
    
    .animation-delay-600 { animation-delay: 0.6s; }
    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }
    
    .carousel-item {
        transition: all 2s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .carousel-item.active {
        opacity: 1;
        transform: scale(1.05);
    }
    
    .carousel-item img {
        transition: transform 10s ease-in-out;
    }
    
    .carousel-item:hover img {
        transform: scale(1.1);
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
        transition: all 0.3s ease;
    }
    
    .glow-red:hover {
        box-shadow: 0 0 50px rgba(229, 57, 53, 0.5);
    }
    
    .pulse-glow {
        animation: pulse-glow 2s infinite;
    }
    
    @keyframes pulse-glow {
        0%, 100% {
            box-shadow: 0 0 20px rgba(229, 57, 53, 0.3);
        }
        50% {
            box-shadow: 0 0 40px rgba(229, 57, 53, 0.6);
        }
    }
    
    .card-3d {
        transform-style: preserve-3d;
        transition: transform 0.3s ease;
    }
    
    .card-3d:hover {
        transform: rotateX(2deg) rotateY(2deg) scale(1.02);
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
    
    /* Smooth parallax scrolling effect */
    @media (prefers-reduced-motion: no-preference) {
        .carousel-item img {
            will-change: transform;
        }
        
        .card-3d {
            will-change: transform;
        }
    }
`;
document.head.appendChild(enhancedStyle);

</script>

@endsection