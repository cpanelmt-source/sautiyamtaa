@extends('layouts.app')

@section('title', 'About Us - Sauti ya Mtaa')

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
        <i class="fas fa-heart text-6xl text-red-400 floating"></i>
    </div>
    <div class="absolute bottom-16 left-16 opacity-20 hidden lg:block">
        <i class="fas fa-hands-helping text-5xl text-white animate-pulse"></i>
    </div>

    <div class="container mx-auto px-6 text-center text-white relative z-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-display text-5xl md:text-7xl font-bold mb-6 animate-fade-in-down">
                <span class="bg-gradient-to-r from-white via-red-200 to-red-400 bg-clip-text text-transparent">
                    The Story Behind
                </span>
                <br>
                <span class="text-red-400">Sauti ya Mtaa</span>
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8 animate-fade-in-up"></div>
            <p class="text-xl md:text-2xl text-gray-200 leading-relaxed animate-fade-in-up animation-delay-300 max-w-3xl mx-auto">
                Learn about our journey, our mission, and the dedicated team driving our vision forward to empower communities across Kenya.
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl opacity-70"></i>
    </div>
</section>

<!-- Enhanced Mission, Vision, Values Section -->
<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/20 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                Our Foundation
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Mission Card -->
            <div class="mission-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d p-8 text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 glow-red">
                        <i class="fas fa-bullseye text-3xl text-white"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-red-500 transition-colors duration-300">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">To empower youth and vulnerable communities by providing dynamic platforms for advocacy, mentorship, and life-changing opportunities.</p>
                
                <!-- Decorative Element -->
                <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                    <i class="fas fa-bullseye text-4xl text-red-500"></i>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="mission-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d p-8 text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 glow-blue">
                        <i class="fas fa-eye text-3xl text-white"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-500 transition-colors duration-300">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">A future where every young person has the voice, skills, and support to shape their own destiny and uplift their community.</p>
                
                <!-- Decorative Element -->
                <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                    <i class="fas fa-eye text-4xl text-blue-500"></i>
                </div>
            </div>

            <!-- Values Card -->
            <div class="mission-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d p-8 text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 glow-green">
                        <i class="fas fa-heart text-3xl text-white"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-500 transition-colors duration-300">Our Values</h3>
                <p class="text-gray-600 leading-relaxed">Integrity, Community, Empowerment, and Resilience are the pillars that guide every action we take.</p>
                
                <!-- Values List -->
                <div class="mt-6 flex flex-wrap justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">Integrity</span>
                    <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">Community</span>
                    <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">Empowerment</span>
                    <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">Resilience</span>
                </div>
                
                <!-- Decorative Element -->
                <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                    <i class="fas fa-heart text-4xl text-green-500"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Our Story Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-red-500/5 to-transparent"></div>
        <div class="absolute -top-40 -left-40 w-80 h-80 bg-red-500/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
            <div class="order-2 md:order-1 space-y-6">
                <div class="animate-fade-in-left">
                    <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        From a Simple Idea to a <span class="text-red-500">Movement</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mb-8"></div>
                </div>
                
                <div class="space-y-6 text-lg leading-relaxed">
                    <p class="text-gray-600 animate-fade-in-left animation-delay-300">
                        <strong class="text-red-500">Sauti ya Mtaa</strong>, meaning "Voice of the Street" in Swahili, began as a small grassroots initiative with a powerful idea: that the solutions to a community's challenges lie within the community itself, especially in its youth.
                    </p>
                    <p class="text-gray-600 animate-fade-in-left animation-delay-600">
                        Founded with passion and determination, we've grown from a local mentorship group into a registered organization, expanding our reach and impact through structured programs, strategic partnerships, and the unwavering support of our community.
                    </p>
                    <p class="text-gray-600 animate-fade-in-left animation-delay-900">
                        Our journey is a testament to the power of collective action and the incredible potential of young people when given the right opportunities and support.
                    </p>
                </div>

                <!-- Impact Numbers -->
                <div class="grid grid-cols-3 gap-4 mt-8 animate-fade-in-left animation-delay-1200">
                    <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                        <div class="text-2xl font-bold text-red-500 counter" data-target="500">0</div>
                        <div class="text-sm text-gray-500">Lives Touched</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                        <div class="text-2xl font-bold text-blue-500 counter" data-target="15">0</div>
                        <div class="text-sm text-gray-500">Programs</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                        <div class="text-2xl font-bold text-green-500 counter" data-target="5">0</div>
                        <div class="text-sm text-gray-500">Years Impact</div>
                    </div>
                </div>
            </div>
            
            <div class="order-1 md:order-2 animate-fade-in-right">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl transform rotate-3 group-hover:rotate-6 transition-transform duration-300"></div>
                    <img src="{{ data_get($siteSettings, 'who_we_are_image', 'https://placehold.co/600x400/1A1A1A/FFFFFF?text=Our+Community') }}" 
                         alt="Sauti ya Mtaa community" 
                         class="relative rounded-2xl shadow-2xl w-full transform group-hover:scale-105 transition-transform duration-300">
                    
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-full p-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-xl font-bold text-red-500">2019</div>
                            <div class="text-xs text-gray-500">Founded</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Enhanced Contact Section -->
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
                Get In <span class="text-red-400">Touch</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto">
                Have questions or want to partner with us? We'd love to hear from you and explore how we can work together.
            </p>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="glass p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group">
                    <div class="flex items-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-phone-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Phone</h3>
                    </div>
                    <a href="tel:{{ data_get($siteSettings, 'official_phone_number') }}" 
                       class="text-gray-300 hover:text-red-400 transition-colors duration-300 text-lg">
                        {{ data_get($siteSettings, 'official_phone_number', '+254 717 396 394') }}
                    </a>
                </div>

                <div class="glass p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group">
                    <div class="flex items-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-envelope text-xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Email</h3>
                    </div>
                    <a href="mailto:{{ data_get($siteSettings, 'contact_email_address') }}" 
                       class="text-gray-300 hover:text-blue-400 transition-colors duration-300 text-lg">
                        {{ data_get($siteSettings, 'contact_email_address', 'info@sautiyamtaa.co.ke') }}
                    </a>
                </div>

                <div class="glass p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group">
                    <div class="flex items-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-map-marker-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Location</h3>
                    </div>
                    <p class="text-gray-300 text-lg">Nairobi, Kenya</p>
                    <p class="text-gray-400 text-sm mt-2">Serving communities across Kenya</p>
                </div>

               
            </div>

            <!-- Enhanced Contact Form -->
            <div class="glass p-8 rounded-2xl">
                <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>
                <form action="#" method="POST" id="contact-form" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-gray-300 font-semibold mb-2">Full Name</label>
                            <input type="text" id="name" name="name" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-red-400 focus:bg-white/15 transition-all duration-300" 
                                   placeholder="Enter your full name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-300 font-semibold mb-2">Email Address</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-red-400 focus:bg-white/15 transition-all duration-300" 
                                   placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-gray-300 font-semibold mb-2">Subject</label>
                        <select id="subject" name="subject" 
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-red-400 focus:bg-white/15 transition-all duration-300">
                            <option value="partnership" class="bg-gray-800">Partnership Inquiry</option>
                            <option value="volunteer" class="bg-gray-800">Volunteer Opportunities</option>
                            <option value="programs" class="bg-gray-800">Program Information</option>
                            <option value="general" class="bg-gray-800">General Inquiry</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-gray-300 font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" 
                                  class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-red-400 focus:bg-white/15 transition-all duration-300 resize-none" 
                                  placeholder="Tell us how we can help you..." required></textarea>
                    </div>

                    <button type="submit" class="magnetic-btn w-full bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-lg hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-3"></i>Send Message
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Magnetic Effect for Buttons
    document.querySelectorAll('.magnetic-btn').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            btn.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.02)`;
        });
        
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0px, 0px) scale(1)';
        });
    });

    // Smooth Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.mission-card, .team-card');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0) scale(1)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    revealElements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px) scale(0.95)';
        el.style.transition = `all 0.8s cubic-bezier(0.23, 1, 0.320, 1) ${index * 0.1}s`;
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
                const increment = target / 50;
                
                const updateCounter = () => {
                    if (count < target) {
                        count += increment;
                        counter.textContent = Math.ceil(count);
                        setTimeout(updateCounter, 40);
                    } else {
                        counter.textContent = target + '+';
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });
    });

    counters.forEach(counter => counterObserver.observe(counter));

    // Enhanced Contact Form Submission
    document.getElementById('contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const button = e.target.querySelector('button[type="submit"]');
        const originalContent = button.innerHTML;
        
        // Loading state
        button.innerHTML = '<span class="flex items-center justify-center"><i class="fas fa-spinner fa-spin mr-3"></i>Sending...</span>';
        button.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
            // Success state
            button.innerHTML = '<span class="flex items-center justify-center"><i class="fas fa-check mr-3"></i>Message Sent!</span>';
            button.classList.remove('from-red-500', 'to-red-600');
            button.classList.add('from-green-500', 'to-green-600');
            
            // Reset after 3 seconds
            setTimeout(() => {
                button.innerHTML = originalContent;
                button.disabled = false;
                button.classList.remove('from-green-500', 'to-green-600');
                button.classList.add('from-red-500', 'to-red-600');
                e.target.reset();
            }, 3000);
        }, 2000);
    });

    // Parallax Effect for Background Elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating');
        
        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Dynamic Form Field Focus Effects
    const formInputs = document.querySelectorAll('input, textarea, select');
    formInputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('focused');
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
    
    @keyframes fade-in-left {
        0% { opacity: 0; transform: translateX(-40px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes fade-in-right {
        0% { opacity: 0; transform: translateX(40px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    
    .animate-fade-in-down { 
        animation: fade-in-down 1.2s cubic-bezier(0.23, 1, 0.320, 1) forwards; 
    }
    .animate-fade-in-up { 
        animation: fade-in-up 1.2s cubic-bezier(0.23, 1, 0.320, 1) forwards; 
        animation-fill-mode: both;
    }
    .animate-fade-in-left { 
        animation: fade-in-left 1.2s cubic-bezier(0.23, 1, 0.320, 1) forwards; 
        animation-fill-mode: both;
    }
    .animate-fade-in-right { 
        animation: fade-in-right 1.2s cubic-bezier(0.23, 1, 0.320, 1) forwards; 
        animation-fill-mode: both;
    }
    
    .animation-delay-300 { animation-delay: 0.3s; }
    .animation-delay-600 { animation-delay: 0.6s; }
    .animation-delay-900 { animation-delay: 0.9s; }
    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-1200 { animation-delay: 1.2s; }
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
    
    .glow-blue {
        box-shadow: 0 0 30px rgba(37, 99, 235, 0.3);
    }
    
    .glow-blue:hover {
        box-shadow: 0 0 50px rgba(37, 99, 235, 0.5);
    }
    
    .glow-green {
        box-shadow: 0 0 30px rgba(5, 150, 105, 0.3);
    }
    
    .glow-green:hover {
        box-shadow: 0 0 50px rgba(5, 150, 105, 0.5);
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
    
    .mission-card, .team-card {
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .focused {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }
    
    /* Pulse animation for status indicators */
    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(1.1); }
    }
    
    /* Custom scrollbar for the page */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #1a1a1a;
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #E53935, #C62828);
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, #C62828, #B71C1C);
    }
    
    /* Enhance form inputs */
    input:focus, textarea:focus, select:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(229, 57, 53, 0.1);
    }
    
    /* Team card hover effects */
    .team-card:hover .w-32.h-32 {
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
    
    /* Mission card decorative elements */
    .mission-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, transparent, rgba(229, 57, 53, 0.1), transparent);
        border-radius: 18px;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }
    
    .mission-card:hover::before {
        opacity: 1;
    }
`;
document.head.appendChild(enhancedStyle);
</script>

@endsection