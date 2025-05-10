@extends('layouts.app')

@section('main')
    <section class="max-w-6xl mx-auto mb-4 mt-4 bg-white p-6 shadow-md rounded-lg">
        <main class="max-w-5xl mx-auto px-4 py-4">
            <h2 class="text-4xl font-extrabold mb-4">{{ $post->title }}</h2>
            <div class="space-y-4 text-lg leading-relaxed"><p>{{ $post->content }}</p></div><br>
            <blockquote class="border-l-4 pl-4 italic text-gray-600 text-lg">"Tailwind gives me full control without writing a single line of custom CSS."</blockquote><br>                
            <img src="../images/{{ $post->image }}" alt="Blog Image" class="w-full rounded mb-4">
            <p class="inline-block text-gray-600">Published on <span class="font-semibold">{{ $post->created_at}}</span></p>
            
            <div class="mt-6">
                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">{{ $post->hashtag}}</span>
                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">#Inform</span>
            </div>

            <button id="ClapBtn" class="py-2 mt-8">👏 Claps <span id="ClapCount">0</span></button>
            <div class="mt-4">
                <h3 class="text-2xl font-semibold mb-4">Comments</h3>
                <ul id="commentsList" class="bg-white p-4 rounded shadow"></ul>
                <textarea id="commentInput" class="w-full p-2 mt-2 rounded" placeholder="Write a comment..."></textarea>
                <button onclick="addComment()" class="bg-blue-600 text-white px-4 py-2 rounded mt-2">Comment</button>
            </div>
        </main>
    </section>
@endsection
