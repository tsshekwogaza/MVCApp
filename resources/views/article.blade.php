@extends('layouts.blog')

@section('main')
    <main class="container mx-auto mt-6 flex justify-center">
        <section class="w-3/4 bg-white p-6 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
            <img src="../images/{{ $post->image }}" alt="Blog Image" class="w-full rounded mb-4">
            {{-- <img src="{{ asset('images/masterpiece_logo.png') }}" alt="Blog Image" class="w-full rounded mb-4"> --}}
            <p class="text-gray-600 mt-4">Published on <span class="font-semibold">March 26, 2025.</span></p>
            <div class="text-gray-800 space-y-4 mt-4">
                <p>{{ $post->content }}</p>
            </div>

            <button id="ClapBtn" class="py-2 mt-6">
                👏 Claps (<span id="ClapCount">0</span>)
            </button>

            <div class="mt-2">
                <h3 class="text-xl font-semibold mt-4">Comments</h3>
                <ul id="commentsList" class="bg-gray-200 p-2 rounded"></ul>
                <textarea id="commentInput" class="w-full p-2 mt-2 rounded" placeholder="Write a comment..."></textarea>
                <button onclick="addComment()" class="bg-blue-600 text-white px-4 py-2 rounded mt-2">Comment</button>
            </div>
        </section>

    <script>
        // // Sample posts
        const posts = {
            "1": {
                title: "Blog Post 1",
                content: "This is the full content of Blog Post 1.",
                image: "https://source.unsplash.com/800x400/?nature"
            },
            "2": {
                title: "Blog Post 2",
                content: "This is the full content of Blog Post 2.",
                image: "https://source.unsplash.com/800x400/?tech"
            }
        };

        // Get post ID from URL
        const params = new URLSearchParams(window.location.search);
        const postId = params.get("id");

        if (posts[postId]) {
            document.getElementById("postTitle").innerText = posts[postId].title;
            document.getElementById("postContent").innerText = posts[postId].content;
            document.getElementById("postImage").src = posts[postId].image;
        }

        // Clap Functionality
        const ClapCount = document.getElementById("ClapCount");
        const ClapBtn = document.getElementById("ClapBtn");

        let Claps = localStorage.getItem(`Claps-${postId}`) || 0;
        ClapCount.innerText = Claps;

        ClapBtn.addEventListener("click", () => {
            Claps++;
            localStorage.setItem(`Claps-${postId}`, Claps);
            ClapCount.innerText = Claps;
        });

        // Comment Functionality
        const commentsList = document.getElementById("commentsList");
        const commentInput = document.getElementById("commentInput");

        function addComment() {
            const comment = commentInput.value.trim();
            if (comment) {
                const li = document.createElement("li");
                li.innerText = comment;
                commentsList.appendChild(li);
                commentInput.value = "";
            }
        }
    </script>
@endsection
