<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauti ya Mtaa - Empowering Communities</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --brand-red: #E53935;
            --brand-red-dark: #C62828;
            --brand-red-light: #EF5350;
            --brand-dark: #0F0F0F;
            --brand-dark-light: #1A1A1A;
            --accent-gold: #FFD700;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            overflow-x: hidden;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* Glass morphism effect */
        .glass {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .glass-dark {
            backdrop-filter: blur(20px);
            background: rgba(15, 15, 15, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Animated background */
        .animated-bg {
            background: linear-gradient(-45deg, #E53935, #C62828, #1A1A1A, #000000);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Glow effects */
        .glow-red {
            box-shadow: 0 0 30px rgba(229, 57, 53, 0.3);
            transition: all 0.3s ease;
        }

        .glow-red:hover {
            box-shadow: 0 0 50px rgba(229, 57, 53, 0.5);
            transform: translateY(-2px);
        }

        /* Animated underline */
        .animated-underline {
            position: relative;
            overflow: hidden;
        }

        .animated-underline::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--brand-red), transparent);
            transition: left 0.5s;
        }

        .animated-underline:hover::before {
            left: 100%;
        }

        /* Particle effect */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            display: block;
            pointer-events: none;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(229, 57, 53, 0.8), transparent);
            animation: particleFloat 10s infinite linear;
        }

        @keyframes particleFloat {
            0% {
                opacity: 0;
                transform: translateY(100vh) rotate(0deg);
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translateY(-100vh) rotate(360deg);
            }
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, var(--brand-red), var(--brand-red-dark));
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, var(--brand-red-dark), var(--brand-red));
        }

        /* Magnetic button effect */
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

        /* 3D card effect */
        .card-3d {
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }

        .card-3d:hover {
            transform: rotateX(5deg) rotateY(5deg) scale(1.02);
        }

        /* Pulse animation */
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(229, 57, 53, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(229, 57, 53, 0.6);
            }
        }

        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Particle Background -->
    <div class="particles" id="particles"></div>

    <!-- Header with Glassmorphism -->
    <header id="header" class="glass-dark text-white shadow-2xl fixed top-0 w-full z-50 transition-all duration-500">
        <div class="container mx-auto flex items-center justify-between p-6">
            <!-- Enhanced Logo -->
            <a href="/" class="flex items-center group">
                <div class="relative">
                    <img src="http://cns.sautiyamtaa.co.ke/wp/wp-content/uploads/2025/09/WhatsApp-Image-2025-09-05-at-22.31.21_b25de453.jpg" 
                         alt="Sauti ya Mtaa Logo" 
                         class="h-12 w-auto mr-4 rounded-full border-2 border-white/20 group-hover:border-red-500/50 transition-all duration-300 floating">
                    <div class="absolute -inset-1 bg-gradient-to-r from-red-500 to-red-600 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </div>
                <div>
                    <h1 class="text-2xl font-display font-bold tracking-wider group-hover:text-red-400 transition-colors duration-300">
                        SAUTI YA MTAA
                    </h1>
                    <p class="text-xs text-gray-400 font-light">Empowering Communities</p>
                </div>
            </a>
            
            <!-- Enhanced Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="/" class="animated-underline hover:text-red-400 transition-colors duration-300 font-medium">Home</a>
                <a href="/about" class="animated-underline hover:text-red-400 transition-colors duration-300 font-medium">About Us</a>
                <a href="/programs" class="animated-underline hover:text-red-400 transition-colors duration-300 font-medium">Programs</a>
                <a href="/blog" class="animated-underline hover:text-red-400 transition-colors duration-300 font-medium">Blogs</a>
                <a href="/events" class="animated-underline hover:text-red-400 transition-colors duration-300 font-medium">Events</a>
                <a href="/get-involved" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    <i class="fas fa-heart mr-2"></i>Get Involved
                </a>
            </nav>
            
            <!-- Enhanced Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden text-2xl p-2 rounded-full hover:bg-white/10 transition-colors duration-300">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <!-- Enhanced Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden glass-dark border-t border-white/10">
            <nav class="flex flex-col space-y-6 p-8">
                <a href="/" class="text-lg hover:text-red-400 transition-colors duration-300 font-medium">Home</a>
                <a href="/about" class="text-lg hover:text-red-400 transition-colors duration-300 font-medium">About Us</a>
                <a href="/programs" class="text-lg hover:text-red-400 transition-colors duration-300 font-medium">Programs</a>
                <a href="/blog" class="text-lg hover:text-red-400 transition-colors duration-300 font-medium">Blogs</a>
                <a href="/events" class="text-lg hover:text-red-400 transition-colors duration-300 font-medium">Events</a>
                <a href="/get-involved" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold w-full text-center py-4 px-6 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 glow-red">
                    <i class="fas fa-heart mr-2"></i>Get Involved
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="relative z-10">
        @yield('content')
    </main>

    <!-- Enhanced Footer -->
    <footer class="relative bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-red-500/10 to-transparent"></div>
        </div>
        
        <div class="relative container mx-auto py-16 px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Enhanced Organization Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-6">
                        <img src="http://cns.sautiyamtaa.co.ke/wp/wp-content/uploads/2025/09/WhatsApp-Image-2025-09-05-at-22.31.21_b25de453.jpg" 
                             alt="Sauti ya Mtaa Logo" 
                             class="h-12 w-auto mr-4 rounded-full border-2 border-red-500/30">
                        <div>
                            <h3 class="font-display text-3xl font-bold">Sauti ya Mtaa</h3>
                            <p class="text-red-400 text-sm">Voice of the Street</p>
                        </div>
                    </div>
                    <p class="text-gray-300 max-w-md leading-relaxed mb-6">
                        Empowering youth and vulnerable communities through advocacy, mentorship, and opportunities for a brighter, more equitable future.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/SautiYa254" class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 glow-red">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://x.com/Sauti_ya254" class="w-12 h-12 bg-gradient-to-br from-sky-400 to-sky-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 glow-red">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/sauti_yamtaa/?hl=en" class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 glow-red">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-display text-xl font-semibold mb-6 text-red-400">Quick Links</h4>
                    <ul class="space-y-4">
                        <li><a href="/about" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-red-500 group-hover:translate-x-1 transition-transform duration-300"></i>About Us
                        </a></li>
                        <li><a href="/programs" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-red-500 group-hover:translate-x-1 transition-transform duration-300"></i>Our Programs
                        </a></li>
                        <li><a href="/get-involved" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-red-500 group-hover:translate-x-1 transition-transform duration-300"></i>Volunteer
                        </a></li>
                        <li><a href="/get-involved" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-red-500 group-hover:translate-x-1 transition-transform duration-300"></i>Donate
                        </a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="font-display text-xl font-semibold mb-6 text-red-400">Get In Touch</h4>
                    <div class="space-y-4">
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-envelope mr-3 text-red-500"></i>
                            <span>info@sautiyamtaa.co.ke</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-phone mr-3 text-red-500"></i>
                            <span>+254 717 396 394</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-map-marker-alt mr-3 text-red-500"></i>
                            <span>Nairobi, Kenya</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; <span id="current-year"></span> Sauti ya Mtaa. All Rights Reserved. 
                    <span class="text-red-400">Made with ❤️ in Kenya</span>
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Set current year
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Enhanced mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = mobileMenuButton.querySelector('i');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-times');
        });

        // Enhanced header scroll effect
        const header = document.getElementById('header');
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY > 100) {
                header.style.transform = currentScrollY > lastScrollY ? 'translateY(-100%)' : 'translateY(0)';
                header.classList.add('backdrop-blur-md');
            } else {
                header.style.transform = 'translateY(0)';
                header.classList.remove('backdrop-blur-md');
            }
            
            lastScrollY = currentScrollY;
        });

        // Particle system
        function createParticle() {
            const particle = document.createElement('span');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.animationDuration = (Math.random() * 10 + 5) + 's';
            particle.style.opacity = Math.random() * 0.5 + 0.2;
            
            document.getElementById('particles').appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 15000);
        }

        // Create particles periodically
        setInterval(createParticle, 300);

        // Add fade-in animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.animate-fade-in-up');
            elements.forEach(el => {
                const elementTop = el.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    el.classList.add('opacity-100', 'translate-y-0');
                    el.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);

        // Add magnetic effect to buttons
        document.querySelectorAll('.magnetic-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                btn.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'translate(0px, 0px) scale(1)';
            });
        });

        // Add CSS for fade-in animation
        const style = document.createElement('style');
        style.textContent = `
            .animate-fade-in-up {
                transform: translateY(2rem);
                transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
            }
            .animation-delay-300 {
                animation-delay: 300ms;
            }
            .animation-delay-600 {
                animation-delay: 600ms;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>