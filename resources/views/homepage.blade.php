@extends('layouts.blog')

@section('main')
    <main class="flex-1">
        @foreach ($posts as $post)
            <article class="bg-white border-b p-6 rounded-lg shadow mb-6 relative">
                <div class="absolute top-2 left-0 bg-blue-300 text-white py-2 px-4 text-sm uppercase font-semibold">Trending</div>
                <img src="images/{{ $post->image }}" alt="Blog Image" class="w-full h-48 object-cover rounded mb-4">
                {{-- <img src="{{ asset('images/masterpiece_logo.png') }}"> --}}
                <div>  
                    <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ substr($post->content, 0, 238) }}...</p>
                    <a href="{{ route('article', $post) }}" class="text-blue-500 hover:underline">Read More  →</a>
                </div>
            </article>
        @endforeach   
    </main>

    <aside class="w-1/4 ml-4">
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="font-bold mb-2">Categories</h2>
            <ul>
                @foreach($categories as $category)
                    <li><a href="/?category_id={{ $category->id }}" class="text-blue-500 hover:underline">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="font-semibold mb-2">Recent posts</h2>
            <ul>
                @foreach($recent_posts as $recent_post)
                    <li><a href="#" class="text-blue-500 hover:underline">{{ $recent_post->name }}</a></li>   
                @endforeach
            </ul>
        </div>
        <div class="bg-gradient-to-r from-white to-blue-300 p-6 rounded-lg shadow mb-6 h-309">
            <h2 class="font-semibold mb-2">Advert placement</h2>
        </div>
    </aside>
@endsection
