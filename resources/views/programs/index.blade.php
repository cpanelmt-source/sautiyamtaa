@extends('layouts.app')

@section('title', 'Our Programs - Sauti ya Mtaa')

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
        <i class="fas fa-rocket text-6xl text-red-400 floating"></i>
    </div>
    <div class="absolute bottom-16 left-16 opacity-20 hidden lg:block">
        <i class="fas fa-hands-helping text-5xl text-white animate-pulse"></i>
    </div>

    <div class="container mx-auto px-6 text-center text-white relative z-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-display text-5xl md:text-7xl font-bold mb-6 animate-fade-in-down">
                <span class="bg-gradient-to-r from-white via-red-200 to-red-400 bg-clip-text text-transparent">
                    Our Programs
                </span>
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8 animate-fade-in-up"></div>
            <p class="text-xl md:text-2xl text-gray-200 leading-relaxed animate-fade-in-up animation-delay-300 max-w-3xl mx-auto">
                Empowering youth and communities through transformative initiatives that build leadership, develop skills, and create lasting positive impact.
            </p>
            
            <!-- Program Categories Filter -->
            <div class="mt-12 flex flex-wrap justify-center gap-4 animate-fade-in-up animation-delay-600">
                <button class="filter-btn active glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="all">
                    All Programs
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="leadership">
                    Leadership
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="skills">
                    Skills Development
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="outreach">
                    Community Outreach
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="mentorship">
                    Mentorship
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl opacity-70"></i>
    </div>
</section>

<!-- Enhanced Programs Grid Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/20 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Programs Grid -->
            <div id="programs-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($programs as $program)
                    @if(data_get($program, 'slug'))
                    <div class="program-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d" 
                         data-category="{{ strtolower(data_get($program, 'acf.program_category', 'leadership')) }}">
                        
                        <!-- Enhanced Image Section -->
                        <div class="relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <a href="{{ route('programs.show', data_get($program, 'slug')) }}">
                                <img class="h-64 w-full object-cover transform group-hover:scale-110 transition-transform duration-700" 
                                     src="{{ data_get($program, 'acf.cover_image', 'https://placehold.co/600x400/E53935/FFFFFF?text=Sauti+ya+Mtaa+Program') }}" 
                                     alt="Image for {{ data_get($program, 'title.rendered') }}">
                            </a>
                            
                            <!-- Program Category Badge -->
                            <div class="absolute top-4 left-4 z-20">
                                <span class="inline-block bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                    {{ ucfirst(data_get($program, 'acf.program_category', 'Leadership')) }}
                                </span>
                            </div>
                            
                            <!-- Impact Badge -->
                            @if(data_get($program, 'acf.participants_count'))
                            <div class="absolute top-4 right-4 z-20">
                                <div class="glass text-white px-3 py-1 rounded-lg text-sm font-semibold">
                                    <i class="fas fa-users mr-1"></i>
                                    {{ data_get($program, 'acf.participants_count') }}+ participants
                                </div>
                            </div>
                            @endif
                            
                            <!-- Program Duration -->
                            @if(data_get($program, 'acf.duration'))
                            <div class="absolute bottom-4 right-4 z-20">
                                <div class="glass text-white px-3 py-1 rounded-lg text-sm font-semibold">
                                    <i class="fas fa-clock mr-1"></i>
                                    {{ data_get($program, 'acf.duration') }}
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- Enhanced Content Section -->
                        <div class="p-8 flex flex-col h-full">
                            <div class="flex-grow space-y-4">
                                <!-- Program Meta Info -->
                                <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500">
                                    @if(data_get($program, 'acf.program_status'))
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                                        <span class="font-semibold text-green-600">
                                            {{ data_get($program, 'acf.program_status') }}
                                        </span>
                                    </div>
                                    @endif
                                    @if(data_get($program, 'acf.target_age'))
                                    <div class="flex items-center">
                                        <i class="fas fa-user-friends text-red-500 mr-2"></i>
                                        <span>Ages {{ data_get($program, 'acf.target_age') }}</span>
                                    </div>
                                    @endif
                                </div>

                                <!-- Program Title -->
                                <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 leading-tight group-hover:text-red-500 transition-colors duration-300">
                                    <a href="{{ route('programs.show', data_get($program, 'slug')) }}" class="hover:text-red-500">
                                        {!! data_get($program, 'title.rendered') !!}
                                    </a>
                                </h2>

                                <!-- Program Description -->
                                <div class="text-gray-600 leading-relaxed">
                                    {{ data_get($program, 'acf.short_description', strip_tags(data_get($program, 'excerpt.rendered', ''))) }}
                                </div>

                                <!-- Program Features/Skills -->
                                @if(data_get($program, 'acf.key_skills'))
                                <div class="flex flex-wrap gap-2">
                                    @foreach(explode(',', data_get($program, 'acf.key_skills')) as $skill)
                                    <span class="bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm border border-red-200">
                                        {{ trim($skill) }}
                                    </span>
                                    @endforeach
                                </div>
                                @endif

                                <!-- Impact Metrics -->
                                @if(data_get($program, 'acf.success_rate') || data_get($program, 'acf.completion_rate'))
                                <div class="grid grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg">
                                    @if(data_get($program, 'acf.success_rate'))
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-red-500">{{ data_get($program, 'acf.success_rate') }}%</div>
                                        <div class="text-xs text-gray-500">Success Rate</div>
                                    </div>
                                    @endif
                                    @if(data_get($program, 'acf.completion_rate'))
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-green-500">{{ data_get($program, 'acf.completion_rate') }}%</div>
                                        <div class="text-xs text-gray-500">Completion</div>
                                    </div>
                                    @endif
                                </div>
                                @endif
                            </div>

                            <!-- Enhanced Action Section -->
                            <div class="mt-8 flex items-center justify-between">
                                <a href="{{ route('programs.show', data_get($program, 'slug')) }}" 
                                   class="magnetic-btn inline-flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 px-6 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red group">
                                    <span>Learn More</span>
                                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                                </a>
                                
                                <!-- Quick Action Buttons -->
                                <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    @if(data_get($program, 'acf.enrollment_open'))
                                    <button class="w-10 h-10 bg-green-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            title="Enroll Now">
                                        <i class="fas fa-plus text-sm"></i>
                                    </button>
                                    @endif
                                    <button class="w-10 h-10 bg-blue-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="shareProgram('{{ route('programs.show', data_get($program, 'slug')) }}')"
                                            title="Share Program">
                                        <i class="fas fa-share text-sm"></i>
                                    </button>
                                    <button class="w-10 h-10 bg-purple-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="addToFavorites('{{ data_get($program, 'slug') }}')"
                                            title="Save for Later">
                                        <i class="fas fa-heart text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @empty
                    <!-- Enhanced Empty State -->
                    <div class="col-span-full text-center py-24">
                        <div class="max-w-md mx-auto">
                            <div class="text-8xl text-gray-300 mb-8">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3 class="font-display text-3xl font-bold text-gray-700 mb-4">Programs Coming Soon</h3>
                            <p class="text-xl text-gray-500 mb-8 leading-relaxed">
                                We're developing exciting new programs to empower our community! Check back soon for transformative opportunities.
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

<!-- Program Impact Statistics -->
<section class="py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-red-500/10 to-transparent"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-red-600/10 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">
                Our <span class="text-red-400">Impact</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto">
                Through our comprehensive programs, we're building stronger communities and empowering the next generation of leaders.
            </p>
        </div>

        <!-- Impact Stats Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-red-400 mb-4 counter" data-target="500">0</div>
                    <div class="text-lg font-semibold mb-2">Youth Empowered</div>
                    <div class="text-gray-400 text-sm">Through our leadership programs</div>
                </div>
            </div>
            
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-green-400 mb-4 counter" data-target="15">0</div>
                    <div class="text-lg font-semibold mb-2">Active Programs</div>
                    <div class="text-gray-400 text-sm">Across different communities</div>
                </div>
            </div>
            
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-blue-400 mb-4 counter" data-target="95">0</div>
                    <div class="text-lg font-semibold mb-2">Success Rate</div>
                    <div class="text-gray-400 text-sm">Program completion percentage</div>
                </div>
            </div>
            
            <div class="text-center group">
                <div class="glass p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-purple-400 mb-4 counter" data-target="50">0</div>
                    <div class="text-lg font-semibold mb-2">Community Partners</div>
                    <div class="text-gray-400 text-sm">Organizations we collaborate with</div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <h3 class="text-2xl md:text-3xl font-bold mb-6">Ready to Make a Difference?</h3>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                Join our programs and become part of a movement that's transforming communities and empowering youth across Kenya.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/get-involved" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    <i class="fas fa-rocket mr-3"></i>Join a Program
                </a>
                <a href="/volunteer" class="magnetic-btn glass-dark text-white font-bold py-4 px-8 rounded-full hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-hands-helping mr-3"></i>Become a Mentor
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Filter System
    const filterBtns = document.querySelectorAll('.filter-btn');
    const programCards = document.querySelectorAll('.program-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active', 'bg-red-500', 'text-white'));
            btn.classList.add('active', 'bg-red-500', 'text-white');
            
            // Filter programs with smooth animation
            programCards.forEach(card => {
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
    const revealElements = document.querySelectorAll('.program-card');
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

    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'));
                let count = 0;
                const increment = target / 100;
                
                const updateCounter = () => {
                    if (count < target) {
                        count += increment;
                        counter.textContent = Math.ceil(count);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.textContent = target + (target === 95 ? '%' : '+');
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });
    });

    counters.forEach(counter => counterObserver.observe(counter));
});

// Social Sharing Function
function shareProgram(url) {
    const title = encodeURIComponent('Check out this amazing program from Sauti ya Mtaa!');
    const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
    window.open(shareUrl, '_blank', 'width=600,height=400');
}

// Add to Favorites Function
function addToFavorites(programSlug) {
    // Simple feedback animation
    event.target.style.color = '#EC4899';
    event.target.style.transform = 'scale(1.2)';
    setTimeout(() => {
        event.target.style.transform = 'scale(1)';
    }, 200);
    
    // Here you would typically save to localStorage or send to server
    console.log('Added to favorites:', programSlug);
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
    
    .program-card {
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }
`;
document.head.appendChild(enhancedStyle);
</script>

@endsection