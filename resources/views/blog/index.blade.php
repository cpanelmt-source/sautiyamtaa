@extends('layouts.app')

@section('title', 'Blog - Sauti ya Mtaa')

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
        <i class="fas fa-pen-nib text-6xl text-red-400 floating"></i>
    </div>
    <div class="absolute bottom-16 left-16 opacity-20 hidden lg:block">
        <i class="fas fa-newspaper text-5xl text-white animate-pulse"></i>
    </div>

    <div class="container mx-auto px-6 text-center text-white relative z-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-display text-5xl md:text-7xl font-bold mb-6 animate-fade-in-down">
                <span class="bg-gradient-to-r from-white via-red-200 to-red-400 bg-clip-text text-transparent">
                    News &
                </span>
                <br>
                <span class="text-red-400">Stories</span>
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8 animate-fade-in-up"></div>
            <p class="text-xl md:text-2xl text-gray-200 leading-relaxed animate-fade-in-up animation-delay-300 max-w-3xl mx-auto">
                Insights, updates, and inspiring stories from the heart of our community. Discover the impact we're making together.
            </p>
            
            <!-- Blog Categories Filter -->
            <div class="mt-12 flex flex-wrap justify-center gap-4 animate-fade-in-up animation-delay-600">
                <button class="filter-btn active glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="all">
                    All Stories
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="impact">
                    Impact Stories
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="news">
                    News & Updates
                </button>
                <button class="filter-btn glass-dark px-6 py-3 rounded-full text-white font-semibold hover:bg-red-500/20 transition-all duration-300" data-filter="insights">
                    Community Insights
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl opacity-70"></i>
    </div>
</section>

<!-- Enhanced Blog Grid Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/20 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            
            <!-- Featured Post Section -->
            @if(isset($posts[0]))
            <div class="mb-16">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">
                    Featured <span class="text-red-500">Story</span>
                </h2>
                <div class="featured-post bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d">
                    <div class="md:flex">
                        <!-- Enhanced Image Section -->
                        <div class="md:w-1/2 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <a href="{{ route('blog.show', $posts[0]['slug']) }}">
                                <img class="h-80 md:h-full w-full object-cover transform group-hover:scale-110 transition-transform duration-700" 
                                     src="{{ $posts[0]['acf']['featured_image'] ?? 'https://placehold.co/800x600/E53935/FFFFFF?text=Featured+Story' }}" 
                                     alt="Featured image for {{ $posts[0]['title']['rendered'] }}">
                            </a>
                            <!-- Featured Badge -->
                            <div class="absolute top-4 left-4 z-20">
                                <span class="inline-block bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                    Featured Story
                                </span>
                            </div>
                            <!-- Read Time Badge -->
                            <div class="absolute bottom-4 right-4 z-20">
                                <div class="glass text-white px-3 py-1 rounded-lg text-sm font-semibold">
                                    <i class="fas fa-clock mr-1"></i>5 min read
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Content Section -->
                        <div class="md:w-1/2 p-8 flex flex-col justify-between">
                            <div class="space-y-4">
                                <!-- Post Meta Info -->
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-red-500 mr-2"></i>
                                        <span>{{ date('F j, Y', strtotime($posts[0]['date'] ?? 'now')) }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-user text-red-500 mr-2"></i>
                                        <span>Sauti ya Mtaa Team</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tag text-red-500 mr-2"></i>
                                        <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Impact Story</span>
                                    </div>
                                </div>

                                <!-- Post Title -->
                                <h3 class="font-display text-2xl md:text-3xl font-bold text-gray-900 leading-tight group-hover:text-red-500 transition-colors duration-300">
                                    <a href="{{ route('blog.show', $posts[0]['slug']) }}" class="hover:text-red-500">
                                        {!! $posts[0]['title']['rendered'] !!}
                                    </a>
                                </h3>

                                <!-- Post Excerpt -->
                                <div class="text-gray-600 leading-relaxed text-lg">
                                    {!! $posts[0]['excerpt']['rendered'] !!}
                                </div>
                            </div>

                            <!-- Enhanced Action Section -->
                            <div class="mt-8 flex items-center justify-between">
                                <a href="{{ route('blog.show', $posts[0]['slug']) }}" 
                                   class="magnetic-btn inline-flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red group">
                                    <span>Read Full Story</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                                </a>
                                
                                <!-- Social Share Buttons -->
                                <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <button class="w-10 h-10 bg-blue-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="sharePost('facebook', '{{ route('blog.show', $posts[0]['slug']) }}')">
                                        <i class="fab fa-facebook-f text-sm"></i>
                                    </button>
                                    <button class="w-10 h-10 bg-sky-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="sharePost('twitter', '{{ route('blog.show', $posts[0]['slug']) }}')">
                                        <i class="fab fa-twitter text-sm"></i>
                                    </button>
                                    <button class="w-10 h-10 bg-green-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="sharePost('whatsapp', '{{ route('blog.show', $posts[0]['slug']) }}')">
                                        <i class="fab fa-whatsapp text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Blog Posts Grid -->
            <div id="blog-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($posts as $index => $post)
                    @if($index > 0 && isset($post['slug'])) {{-- Skip the featured post --}}
                    <div class="blog-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group card-3d" 
                         data-category="{{ strtolower($post['acf']['post_category'] ?? 'news') }}">
                        
                        <!-- Enhanced Image Section -->
                        <div class="relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <a href="{{ route('blog.show', $post['slug']) }}">
                                <img class="h-56 w-full object-cover transform group-hover:scale-110 transition-transform duration-700" 
                                     src="{{ $post['acf']['featured_image'] ?? 'https://placehold.co/600x400/E53935/FFFFFF?text=Blog+Post' }}" 
                                     alt="Featured image for {{ $post['title']['rendered'] }}">
                            </a>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4 z-20">
                                <span class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 text-white px-3 py-2 rounded-full text-xs font-bold shadow-lg">
                                    {{ ucfirst($post['acf']['post_category'] ?? 'News') }}
                                </span>
                            </div>
                            
                            <!-- Read Time -->
                            <div class="absolute bottom-4 right-4 z-20">
                                <div class="glass text-white px-3 py-1 rounded-lg text-sm font-semibold">
                                    <i class="fas fa-clock mr-1"></i>3 min read
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Content Section -->
                        <div class="p-6 flex flex-col h-64">
                            <div class="flex-grow space-y-4">
                                <!-- Post Meta Info -->
                                <div class="flex items-center justify-between text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-red-500 mr-2"></i>
                                        <span>{{ date('M j, Y', strtotime($post['date'] ?? 'now')) }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-eye text-gray-400 mr-1"></i>
                                        <span>{{ rand(50, 500) }}</span>
                                    </div>
                                </div>

                                <!-- Post Title -->
                                <h2 class="font-display text-xl font-bold text-gray-900 leading-tight group-hover:text-red-500 transition-colors duration-300 line-clamp-2">
                                    <a href="{{ route('blog.show', $post['slug']) }}" class="hover:text-red-500">
                                        {!! $post['title']['rendered'] !!}
                                    </a>
                                </h2>

                                <!-- Post Excerpt -->
                                <div class="text-gray-600 leading-relaxed text-sm line-clamp-3">
                                    {!! strip_tags($post['excerpt']['rendered']) !!}
                                </div>
                            </div>

                            <!-- Enhanced Action Section -->
                            <div class="mt-6 flex items-center justify-between">
                                <a href="{{ route('blog.show', $post['slug']) }}" 
                                   class="magnetic-btn inline-flex items-center text-red-500 font-bold hover:text-red-600 transition-colors duration-300 group">
                                    <span>Read More</span>
                                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                                </a>
                                
                                <!-- Quick Actions -->
                                <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <button class="w-8 h-8 bg-red-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="toggleBookmark('{{ $post['slug'] }}')"
                                            title="Bookmark">
                                        <i class="fas fa-bookmark text-xs"></i>
                                    </button>
                                    <button class="w-8 h-8 bg-blue-500 text-white rounded-full hover:scale-110 transition-transform duration-300" 
                                            onclick="sharePost('twitter', '{{ route('blog.show', $post['slug']) }}')"
                                            title="Share">
                                        <i class="fas fa-share text-xs"></i>
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
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <h3 class="font-display text-3xl font-bold text-gray-700 mb-4">No Stories Yet</h3>
                            <p class="text-xl text-gray-500 mb-8 leading-relaxed">
                                We're working on bringing you inspiring stories from our community! Check back soon for updates.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105">
                                    <i class="fas fa-home mr-2"></i>Back to Home
                                </a>
                                <a href="/get-involved" class="magnetic-btn glass-dark text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                                    <i class="fas fa-bell mr-2"></i>Get Updates
                                </a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Load More Button -->
            @if(count($posts) > 6)
            <div class="text-center mt-16">
                <button id="load-more-btn" class="magnetic-btn bg-gradient-to-r from-gray-700 to-gray-800 text-white font-bold py-4 px-8 rounded-full hover:from-gray-800 hover:to-gray-900 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-plus mr-3"></i>Load More Stories
                </button>
            </div>
            @endif
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
                Stay <span class="text-red-400">Informed</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-red-500 rounded-full mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                Subscribe to our newsletter and never miss the latest stories, updates, and insights from our community impact work.
            </p>
            
            <form class="flex flex-col sm:flex-row max-w-md mx-auto gap-4" id="newsletter-form">
                <input type="email" placeholder="Enter your email address" required
                       class="flex-1 px-6 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-400 focus:bg-white/15 transition-all duration-300">
                <button type="submit" class="magnetic-btn bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-8 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 glow-red">
                    <i class="fas fa-paper-plane mr-2"></i>Subscribe
                </button>
            </form>
            
            <!-- Newsletter Benefits -->
            <div class="mt-8 flex flex-wrap justify-center gap-6 text-sm text-gray-400">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    <span>Weekly Updates</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    <span>Impact Stories</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    <span>Event Invites</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Filter System
    const filterBtns = document.querySelectorAll('.filter-btn');
    const blogCards = document.querySelectorAll('.blog-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active', 'bg-red-500', 'text-white'));
            btn.classList.add('active', 'bg-red-500', 'text-white');
            
            // Filter blog posts with smooth animation
            blogCards.forEach(card => {
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
            
            btn.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.02)`;
        });
        
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0px, 0px) scale(1)';
        });
    });

    // Smooth Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.blog-card, .featured-post');
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

    // Load More Functionality
    const loadMoreBtn = document.getElementById('load-more-btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            const originalText = loadMoreBtn.innerHTML;
            loadMoreBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Loading...';
            loadMoreBtn.disabled = true;
            
            // Simulate loading more posts
            setTimeout(() => {
                loadMoreBtn.innerHTML = originalText;
                loadMoreBtn.disabled = false;
                showNotification('More stories loaded!', 'success');
            }, 1500);
        });
    }
});

// Social Sharing Function
function sharePost(platform, url) {
    const title = encodeURIComponent('Check out this inspiring story from Sauti ya Mtaa!');
    const text = encodeURIComponent('Read this amazing story from our community impact work');
    
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

// Bookmark Toggle Function
function toggleBookmark(postSlug) {
    const bookmarks = JSON.parse(localStorage.getItem('bookmarkedPosts') || '[]');
    const isBookmarked = bookmarks.includes(postSlug);
    
    if (isBookmarked) {
        const index = bookmarks.indexOf(postSlug);
        bookmarks.splice(index, 1);
        showNotification('Bookmark removed', 'info');
    } else {
        bookmarks.push(postSlug);
        showNotification('Post bookmarked!', 'success');
    }
    
    localStorage.setItem('bookmarkedPosts', JSON.stringify(bookmarks));
    
    // Update bookmark icon
    event.target.style.color = isBookmarked ? '#EF4444' : '#FFFFFF';
}

// Notification System
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 max-w-sm`;
    
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
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 300);
    }, 3000);
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