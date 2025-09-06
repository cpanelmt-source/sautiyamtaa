@extends('layouts.app')

@section('title', $post['title'] . ' - Sauti ya Mtaa')

@section('content')

<div class="bg-gradient-to-br from-white via-gray-50 to-white py-20 md:py-28">
    <div class="container mx-auto px-6">
        <article class="max-w-4xl mx-auto">
            <!-- Post Header -->
            <header class="mb-12 text-center">
                <div class="mb-6">
                    <span class="inline-block px-4 py-2 bg-gradient-to-r from-brand-red to-red-400 text-white text-sm font-bold rounded-full shadow-lg">
                        Blog Post
                    </span>
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-brand-dark tracking-tight mb-6 leading-tight">
                    {!! $post['title'] !!}
                </h1>
                <div class="flex items-center justify-center space-x-4 text-gray-500">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-medium">Published on {{ $post['date'] }}</span>
                    </div>
                </div>
                <div class="mt-6 h-1 w-24 bg-gradient-to-r from-brand-red to-red-400 mx-auto rounded-full"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-12 group">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ $post['featured_image_url'] }}" 
                         alt="Featured image for {{ $post['title'] }}" 
                         class="w-full transition-all duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>

            <!-- Post Content -->
            <div class="prose prose-lg lg:prose-xl max-w-none text-gray-700 leading-relaxed mb-16">
                <div class="first-letter:text-6xl first-letter:font-black first-letter:text-brand-red first-letter:float-left first-letter:mr-4 first-letter:mt-2 first-letter:leading-none">
                    {!! $post['content'] !!}
                </div>
            </div>

            <!-- Interaction Bar (Likes & Sharing) -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 mb-16">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <!-- Like Button -->
                    <button id="like-button" class="group flex items-center space-x-3 text-lg font-bold text-gray-600 hover:text-brand-red transition-all duration-300 mb-4 sm:mb-0 px-4 py-2 rounded-full hover:bg-red-50">
                        <div class="relative">
                            <i class="far fa-heart text-xl group-hover:scale-110 transition-transform duration-200"></i>
                        </div>
                        <span>Like</span>
                        <span id="likes-count" class="bg-gradient-to-r from-gray-100 to-gray-200 text-brand-dark rounded-full px-4 py-2 text-sm font-bold shadow-inner">{{ $interactions->likes_count }}</span>
                    </button>
                    
                    <!-- Share Links -->
                    <div class="flex items-center space-x-6">
                        <span class="font-bold text-gray-700">Share:</span>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                               target="_blank" 
                               class="w-12 h-12 bg-blue-50 text-blue-600 hover:bg-blue-100 hover:text-blue-700 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-md hover:shadow-lg">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post['title']) }}" 
                               target="_blank" 
                               class="w-12 h-12 bg-sky-50 text-sky-600 hover:bg-sky-100 hover:text-sky-700 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-md hover:shadow-lg">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($post['title'] . ' ' . url()->current()) }}" 
                               target="_blank" 
                               class="w-12 h-12 bg-green-50 text-green-600 hover:bg-green-100 hover:text-green-700 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-md hover:shadow-lg">
                                <i class="fab fa-whatsapp text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div id="comments" class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
                <div class="mb-8">
                    <h2 class="text-3xl md:text-4xl font-black text-brand-dark mb-2">{{ $comments->count() }} Comments</h2>
                    <div class="h-1 w-16 bg-gradient-to-r from-brand-red to-red-400 rounded-full"></div>
                </div>

                <!-- Display Existing Comments -->
                <div class="space-y-8 mb-12">
                    @forelse ($comments as $comment)
                        <div class="flex space-x-4 p-6 bg-gray-50 rounded-xl border border-gray-100 hover:shadow-md transition-shadow duration-200">
                            <div class="flex-shrink-0">
                                <div class="relative">
                                    <img class="w-14 h-14 rounded-full ring-3 ring-white shadow-lg" 
                                         src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($comment->author_email))) }}?d=mp" 
                                         alt="{{ $comment->author_name }}">
                                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full border-2 border-white"></div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-3 mb-2">
                                    <p class="font-black text-brand-dark">{{ $comment->author_name }}</p>
                                    <div class="flex items-center space-x-1 text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm font-medium">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed">{{ $comment->content }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12">
                            <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-500 font-medium text-lg">Be the first to share your thoughts!</p>
                        </div>
                    @endforelse
                </div>

                <!-- Comment Form -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl border border-gray-100 shadow-inner">
                    <div class="mb-6">
                        <h3 class="text-2xl md:text-3xl font-black text-brand-dark mb-2">Leave a Reply</h3>
                        <div class="h-1 w-12 bg-gradient-to-r from-brand-red to-red-400 rounded-full"></div>
                    </div>
                    
                    @if (session('success'))
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-400 text-green-700 px-6 py-4 rounded-lg relative mb-6 shadow-md" role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-medium">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif
                    
                    <form action="{{ route('comments.store', Route::current()->parameter('slug')) }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="content" class="block text-gray-700 font-bold mb-3 text-lg">Your Comment</label>
                            <textarea id="content" name="content" rows="5" 
                                      class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent transition-all duration-200 resize-none" 
                                      placeholder="Share your thoughts..." required></textarea>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="author_name" class="block text-gray-700 font-bold mb-3 text-lg">Name</label>
                                <input type="text" id="author_name" name="author_name" 
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent transition-all duration-200" 
                                       placeholder="Your name" required>
                            </div>
                            <div>
                                <label for="author_email" class="block text-gray-700 font-bold mb-3 text-lg">Email</label>
                                <input type="email" id="author_email" name="author_email" 
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent transition-all duration-200" 
                                       placeholder="your@email.com (will not be published)" required>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-brand-red to-red-400 text-white font-black py-4 px-8 rounded-xl hover:from-red-500 hover:to-red-500 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span>Post Comment</span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>

        </article>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const likeButton = document.getElementById('like-button');
    if (likeButton) {
        likeButton.addEventListener('click', function() {
            const slug = '{{ Route::current()->parameter('slug') }}';
            const url = `/blog/${slug}/like`;
            
            // Add loading state
            const icon = likeButton.querySelector('i');
            icon.classList.add('animate-pulse');
            
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data.likes_count) {
                    document.getElementById('likes-count').textContent = data.likes_count;
                    likeButton.classList.add('text-brand-red');
                    icon.classList.replace('far', 'fas');
                    icon.classList.remove('animate-pulse');
                    
                    // Add success animation
                    icon.classList.add('animate-bounce');
                    setTimeout(() => icon.classList.remove('animate-bounce'), 1000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                icon.classList.remove('animate-pulse');
            });
        });
    }
});
</script>

@endsection