@extends('layouts.app')

@section('title', 'Get Involved - Sauti ya Mtaa')

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
        <i class="fas fa-hand-holding-heart text-6xl text-red-400 floating"></i>
    </div>
    <div class="absolute bottom-16 left-16 opacity-20 hidden lg:block">
        <i class="fas fa-users text-5xl text-white animate-pulse"></i>
    </div>

    <div class="container mx-auto px-6 text-center text-white relative z-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-display text-5xl md:text-7xl font-bold mb-6 animate-fade-in-down">
                <span class="bg-gradient-to-r from-white via-red-200 to-red-400 bg-clip-text text-transparent">
                    Join Our
                </span>
                <br>
                <span class="text-red-400">Movement</span>
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8 animate-fade-in-up"></div>
            <p class="text-xl md:text-2xl text-gray-200 leading-relaxed animate-fade-in-up animation-delay-300 max-w-3xl mx-auto">
                Your time, skills, and donations are powerful tools for change. Here's how you can make a real difference in transforming communities.
            </p>
            
            <!-- Quick Action Buttons -->
            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-600">
                <button onclick="scrollToSection('donate')" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    <i class="fas fa-heart mr-3"></i>Donate Now
                </button>
                <button onclick="scrollToSection('volunteer')" class="magnetic-btn glass-dark text-white font-bold py-4 px-8 rounded-full hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-hands-helping mr-3"></i>Volunteer Today
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl opacity-70"></i>
    </div>
</section>

<!-- Enhanced Main Content Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/20 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            
            <!-- Impact Statistics Section -->
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Your Impact <span class="text-red-500">Matters</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-12"></div>
                
                <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="text-center group">
                        <div class="glass-light p-6 rounded-2xl hover:bg-red-50 transition-all duration-300 transform group-hover:scale-105">
                            <div class="text-4xl font-bold text-red-500 mb-2 counter" data-target="50000">0</div>
                            <div class="text-lg font-semibold text-gray-700 mb-1">Lives Changed</div>
                            <div class="text-gray-500 text-sm">Through community support</div>
                        </div>
                    </div>
                    <div class="text-center group">
                        <div class="glass-light p-6 rounded-2xl hover:bg-blue-50 transition-all duration-300 transform group-hover:scale-105">
                            <div class="text-4xl font-bold text-blue-500 mb-2 counter" data-target="200">0</div>
                            <div class="text-lg font-semibold text-gray-700 mb-1">Active Volunteers</div>
                            <div class="text-gray-500 text-sm">Making a difference</div>
                        </div>
                    </div>
                    <div class="text-center group">
                        <div class="glass-light p-6 rounded-2xl hover:bg-green-50 transition-all duration-300 transform group-hover:scale-105">
                            <div class="text-4xl font-bold text-green-500 mb-2">KES <span class="counter" data-target="2">0</span>M+</div>
                            <div class="text-lg font-semibold text-gray-700 mb-1">Funds Raised</div>
                            <div class="text-gray-500 text-sm">For community programs</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">

                <!-- Enhanced Donation Section -->
                <div id="donate" class="involvement-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d">
                    <div class="relative p-8">
                        <!-- Gradient Background -->
                        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-red-500 to-red-600"></div>
                        
                        <!-- Icon Section -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 glow-red">
                                <i class="fas fa-hand-holding-heart text-3xl text-white"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 group-hover:text-red-500 transition-colors duration-300">Make a Donation</h2>
                        </div>

                        <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                            Every contribution, no matter the size, directly funds our programs—providing essential training, resources, and mentorship to the youth and communities we serve. Your generosity fuels our mission.
                        </p>

                        <!-- Donation Amount Suggestions -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Suggested Amounts</h3>
                            <div class="grid grid-cols-3 gap-3">
                                <button class="donation-amount bg-gray-100 hover:bg-red-500 hover:text-white p-3 rounded-lg font-semibold transition-all duration-300" data-amount="1000">
                                    KES 1,000
                                </button>
                                <button class="donation-amount bg-gray-100 hover:bg-red-500 hover:text-white p-3 rounded-lg font-semibold transition-all duration-300" data-amount="5000">
                                    KES 5,000
                                </button>
                                <button class="donation-amount bg-gray-100 hover:bg-red-500 hover:text-white p-3 rounded-lg font-semibold transition-all duration-300" data-amount="10000">
                                    KES 10,000
                                </button>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <!-- M-Pesa Details -->
                            <div class="payment-method">
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-mobile-alt text-white"></i>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-700">M-Pesa</h3>
                                </div>
                                <div class="glass-light p-4 rounded-lg border border-green-200">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-gray-700 font-semibold">Paybill Number:</span>
                                        <div class="flex items-center">
                                            <span class="font-mono text-lg text-green-600 mr-2">{{ data_get($siteSettings, 'mpesa_paybill_number', '522522') }}</span>
                                            <button onclick="copyToClipboard('{{ data_get($siteSettings, 'mpesa_paybill_number', '000000') }}')" 
                                                    class="text-green-500 hover:text-green-600 transition-colors">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-700 font-semibold">Account Number:</span>
                                        <div class="flex items-center">
                                            <span class="font-mono text-lg text-green-600 mr-2">{{ data_get($siteSettings, 'mpesa_account_number', '1237876842
') }}</span>
                                            <button onclick="copyToClipboard('{{ data_get($siteSettings, 'mpesa_account_number', 'SAUTI') }}')" 
                                                    class="text-green-500 hover:text-green-600 transition-colors">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <!-- Donation Impact -->
                        <div class="mt-8 p-4 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border-l-4 border-red-500">
                            <h4 class="text-lg font-semibold text-red-700 mb-2">Your Impact</h4>
                            <ul class="space-y-1 text-sm text-red-600">
                                <li><strong>KES 1,000</strong> - Provides school supplies for 5 students</li>
                                <li><strong>KES 5,000</strong> - Funds a week of mentorship programs</li>
                                <li><strong>KES 10,000</strong> - Sponsors a youth leadership workshop</li>
                            </ul>
                        </div>

                        <!-- Decorative Element -->
                        <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                            <i class="fas fa-hand-holding-heart text-6xl text-red-500"></i>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Volunteer Section -->
                <div id="volunteer" class="involvement-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d">
                    <div class="relative p-8">
                        <!-- Gradient Background -->
                        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-blue-500 to-purple-600"></div>
                        
                        <!-- Icon Section -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 glow-blue">
                                <i class="fas fa-users text-3xl text-white"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 group-hover:text-blue-500 transition-colors duration-300">Become a Volunteer</h2>
                        </div>

                        <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                           Lend your skills and passion to our cause. We are always looking for dedicated individuals to help with mentorship, event organization, and program support. Join our community of changemakers.
                        </p>

                        <!-- Volunteer Opportunities -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Volunteer Opportunities</h3>
                            <div class="space-y-3">
                                <div class="volunteer-option p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors cursor-pointer">
                                    <div class="flex items-center">
                                        <i class="fas fa-chalkboard-teacher text-blue-500 mr-3"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700">Mentorship Programs</div>
                                            <div class="text-sm text-gray-500">Guide youth in leadership and skills development</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="volunteer-option p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors cursor-pointer">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar-alt text-green-500 mr-3"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700">Event Organization</div>
                                            <div class="text-sm text-gray-500">Help plan and execute community events</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="volunteer-option p-3 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors cursor-pointer">
                                    <div class="flex items-center">
                                        <i class="fas fa-laptop-code text-purple-500 mr-3"></i>
                                        <div>
                                            <div class="font-semibold text-gray-700">Skills Training</div>
                                            <div class="text-sm text-gray-500">Share your expertise in workshops</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Volunteer Form -->
                        <form action="#" method="POST" id="volunteer-form" class="space-y-6">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="volunteer-name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                                    <input type="text" id="volunteer-name" name="name" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                           placeholder="Enter your full name" required>
                                </div>
                                <div>
                                    <label for="volunteer-email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                                    <input type="email" id="volunteer-email" name="email" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                           placeholder="Enter your email" required>
                                </div>
                            </div>
                            
                            <div>
                                <label for="volunteer-phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                                <input type="tel" id="volunteer-phone" name="phone" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                       placeholder="Enter your phone number">
                            </div>
                            
                            <div>
                                <label for="volunteer-interest" class="block text-gray-700 font-semibold mb-2">Area of Interest & Skills</label>
                                <textarea id="volunteer-interest" name="interest" rows="4" 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 resize-none" 
                                          placeholder="Tell us about your skills and which volunteer opportunities interest you most..." required></textarea>
                            </div>
                            
                            <div>
                                <label for="availability" class="block text-gray-700 font-semibold mb-2">Availability</label>
                                <select id="availability" name="availability" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                                    <option value="weekends">Weekends</option>
                                    <option value="weekdays">Weekdays</option>
                                    <option value="flexible">Flexible</option>
                                    <option value="events-only">Events Only</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="magnetic-btn w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold py-4 px-8 rounded-lg hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 glow-blue">
                                <span class="flex items-center justify-center">
                                    <i class="fas fa-hands-helping mr-3"></i>I'm Ready to Help
                                </span>
                            </button>
                        </form>

                        <!-- Volunteer Benefits -->
                        <div class="mt-8 p-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg border-l-4 border-blue-500">
                            <h4 class="text-lg font-semibold text-blue-700 mb-2">Volunteer Benefits</h4>
                            <ul class="space-y-1 text-sm text-blue-600">
                                <li>✓ Networking opportunities with like-minded individuals</li>
                                <li>✓ Skill development and training workshops</li>
                                <li>✓ Certificate of volunteer service</li>
                                <li>✓ Make a lasting impact in your community</li>
                            </ul>
                        </div>

                        <!-- Decorative Element -->
                        <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                            <i class="fas fa-users text-6xl text-blue-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-red-500/10 to-transparent"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-red-600/10 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">
                Every Action <span class="text-red-400">Counts</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 leading-relaxed mb-12 max-w-3xl mx-auto">
                Whether you donate, volunteer, or simply spread the word about our mission, you're contributing to positive change. Join thousands of supporters making a difference.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                <a href="/programs" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    <i class="fas fa-rocket mr-3"></i>Explore Our Programs
                </a>
                <a href="/events" class="magnetic-btn glass-dark text-white font-bold py-4 px-8 rounded-full hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-alt mr-3"></i>Upcoming Events
                </a>
            </div>

            <!-- Social Sharing -->
            <div class="text-center">
                <p class="text-gray-400 mb-6">Share our mission with your network</p>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnSocial('facebook')" class="w-14 h-14 bg-blue-600 text-white rounded-full hover:scale-110 transition-transform duration-300 glow-blue">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </button>
                    <button onclick="shareOnSocial('twitter')" class="w-14 h-14 bg-sky-500 text-white rounded-full hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </button>
                    <button onclick="shareOnSocial('whatsapp')" class="w-14 h-14 bg-green-500 text-white rounded-full hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </button>
                    <button onclick="shareOnSocial('linkedin')" class="w-14 h-14 bg-blue-700 text-white rounded-full hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </button>
                </div>
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
    const revealElements = document.querySelectorAll('.involvement-card, .payment-method, .volunteer-option');
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
                        counter.textContent = target.toLocaleString();
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });
    });

    counters.forEach(counter => counterObserver.observe(counter));

    // Donation Amount Selection
    document.querySelectorAll('.donation-amount').forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('.donation-amount').forEach(b => {
                b.classList.remove('bg-red-500', 'text-white');
                b.classList.add('bg-gray-100');
            });
            
            // Add active class to clicked button
            this.classList.remove('bg-gray-100');
            this.classList.add('bg-red-500', 'text-white');
            
            // Show amount selection feedback
            const amount = this.getAttribute('data-amount');
            showNotification(`Selected amount: KES ${parseInt(amount).toLocaleString()}`, 'success');
        });
    });

    // Volunteer Option Selection
    document.querySelectorAll('.volunteer-option').forEach(option => {
        option.addEventListener('click', function() {
            // Toggle selection
            this.classList.toggle('ring-2');
            this.classList.toggle('ring-blue-400');
            
            // Update textarea with selected options
            updateVolunteerInterest();
        });
    });

    // Enhanced Volunteer Form Submission
    document.getElementById('volunteer-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const button = e.target.querySelector('button[type="submit"]');
        const originalContent = button.innerHTML;
        
        // Loading state
        button.innerHTML = '<span class="flex items-center justify-center"><i class="fas fa-spinner fa-spin mr-3"></i>Submitting...</span>';
        button.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
            // Success state
            button.innerHTML = '<span class="flex items-center justify-center"><i class="fas fa-check mr-3"></i>Application Sent!</span>';
            button.classList.remove('from-blue-500', 'to-purple-600');
            button.classList.add('from-green-500', 'to-green-600');
            
            showNotification('Thank you for volunteering! We\'ll be in touch soon.', 'success');
            
            // Reset after 3 seconds
            setTimeout(() => {
                button.innerHTML = originalContent;
                button.disabled = false;
                button.classList.remove('from-green-500', 'to-green-600');
                button.classList.add('from-blue-500', 'to-purple-600');
                e.target.reset();
            }, 3000);
        }, 2000);
    });

    // Form Field Focus Effects
    const formInputs = document.querySelectorAll('input, textarea, select');
    formInputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('focused');
            input.style.transform = 'translateY(-2px)';
            input.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
        });
        
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('focused');
            input.style.transform = 'translateY(0)';
            input.style.boxShadow = 'none';
        });
    });
});

// Smooth Scroll to Section
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ 
            behavior: 'smooth', 
            block: 'start',
            inline: 'nearest'
        });
        
        // Add highlight effect
        element.classList.add('highlight');
        setTimeout(() => {
            element.classList.remove('highlight');
        }, 2000);
    }
}

// Copy to Clipboard Function
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        showNotification(`Copied: ${text}`, 'success');
    }).catch(() => {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        showNotification(`Copied: ${text}`, 'success');
    });
}

// Copy Bank Details Function
function copyBankDetails() {
    const bankDetails = `{{ data_get($siteSettings, 'bank_account_details', 'Bank Name: Example Bank\nAccount Name: Sauti ya Mtaa\nAccount Number: 1234567890\nBranch: Nairobi') }}`;
    copyToClipboard(bankDetails);
}

// Update Volunteer Interest Based on Selected Options
function updateVolunteerInterest() {
    const selectedOptions = [];
    document.querySelectorAll('.volunteer-option.ring-2').forEach(option => {
        const title = option.querySelector('.font-semibold').textContent;
        selectedOptions.push(title);
    });
    
    const textarea = document.getElementById('volunteer-interest');
    if (selectedOptions.length > 0) {
        const currentText = textarea.value;
        const optionsText = `Interested in: ${selectedOptions.join(', ')}\n\n`;
        
        if (!currentText.includes('Interested in:')) {
            textarea.value = optionsText + currentText;
        }
    }
}

// Social Sharing Function
function shareOnSocial(platform) {
    const url = window.location.href;
    const title = encodeURIComponent('Join Sauti ya Mtaa - Make a Difference in Your Community');
    const text = encodeURIComponent('Join our movement to empower youth and transform communities. Every contribution matters!');
    
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
        case 'linkedin':
            shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
            break;
    }
    
    if (shareUrl) {
        window.open(shareUrl, '_blank', 'width=600,height=400');
        showNotification('Thanks for sharing our mission!', 'success');
    }
}

// Notification System
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll('.notification');
    existingNotifications.forEach(notif => notif.remove());
    
    const notification = document.createElement('div');
    notification.className = `notification fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 max-w-sm`;
    
    switch(type) {
        case 'success':
            notification.classList.add('bg-green-500', 'text-white');
            break;
        case 'error':
            notification.classList.add('bg-red-500', 'text-white');
            break;
        default:
            notification.classList.add('bg-blue-500', 'text-white');
    }
    
    notification.innerHTML = `
        <div class="flex items-center">
            <i class="fas fa-${type === 'success' ? 'check' : type === 'error' ? 'exclamation' : 'info'}-circle mr-3"></i>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 4 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 300);
    }, 4000);
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
    
    .glass-light {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.7);
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
    
    .involvement-card {
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .payment-method, .volunteer-option {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .payment-method:hover, .volunteer-option:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .donation-amount {
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    .donation-amount::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.3s;
    }
    
    .donation-amount:hover::before {
        left: 100%;
    }
    
    .highlight {
        animation: highlight-pulse 2s ease-in-out;
    }
    
    @keyframes highlight-pulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(229, 57, 53, 0.4); }
        50% { box-shadow: 0 0 0 20px rgba(229, 57, 53, 0); }
    }
    
    .focused {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }
    
    /* Enhanced form styling */
    input:focus, textarea:focus, select:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-color: #3B82F6;
        ring: 2px;
        ring-color: #3B82F6;
    }
    
    /* Copy button animations */
    button:active {
        transform: scale(0.95);
    }
    
    /* Notification styles */
    .notification {
        animation: slideInRight 0.3s ease-out;
    }
    
    @keyframes slideInRight {
        from { transform: translateX(100%); }
        to { transform: translateX(0); }
    }
    
    /* Enhanced hover effects for social buttons */
    .w-14.h-14:hover {
        transform: scale(1.1) rotate(5deg);
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #E53935, #C62828);
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, #C62828, #B71C1C);
    }
`;
document.head.appendChild(enhancedStyle);
</script>

@endsection