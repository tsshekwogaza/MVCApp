@extends('layouts.blog')

@section('main')
        <section class="w-4/4 bg-white p-6 shadow-md rounded-lg">
            <main class="max-w-4xl mx-auto px-4 py-8">
                <h2 class="text-4xl font-extrabold mb-4">{{ $post->title }}</h2>
                <div class="space-y-4 text-lg leading-relaxed"><p>{{ $post->content }}</p></div><br>
                <blockquote class="border-l-4 pl-4 italic text-gray-600 text-lg">"Tailwind gives me full control without writing a single line of custom CSS."</blockquote><br>                
                <img src="../images/{{ $post->image }}" alt="Blog Image" class="w-full rounded mb-4">

                <div class="mt-6">
                    <p class="inline-block mr-100 text-gray-600">Published on <span class="font-semibold">March 26, 2025.</span></p>
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">#Inform</span>
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">#WebDev</span>
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">#Timothy</span>
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
