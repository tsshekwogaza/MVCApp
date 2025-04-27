<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Timothy Samuel">
    <meta name="description" content="My Blog - Your one stop shop for Daily articles">
    <meta name="keywords" content="news, issues, info, report ">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/blog.png') }}">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900">
    <header class="bg-white shadow-md sticky top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center relative">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('images/blog.png') }}" class="w-20 h-10">
            </a>
            <nav class="absolute left-1/2 transform -translate-x-1/2 space-x-6 hidden md:flex">
                <a href="/" class="text-gray-900 font-semibold">Home</a>
                <a href="about" class="text-gray-900 font-semibold">About</a>
                <a href="contact" class="text-gray-900 font-semibold">Contact</a>
                <a href="affiliate" class="text-gray-900 font-semibold">Affiliate</a>
            </nav>
            <div class="space-x-4">
                <a href="/login" class="text-gray-900 font-semibold">Login</a>
                <a href="/register" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-900">Register</a>
            </div>
        </div>
    </header>
    
    <div class="text-white">
        <marquee behavior="" direction="">We hope you enjoy our articles, updates, daily insights, stories, inspirations and articles. <<<<< Our latest issue: Persistence! Nothing in the world can take the place of persistence, Talent wont; nothing is more common than unsuccessful men with talent. <<<<< Education wont; the world is full of educated fools. Genius wont; unrewarded genius is practically a... Continued in the blog post. <<< Read more in the articles section.</marquee>
    </div>
    <div class="mx-8 p-6">
        <h2 class="text-white font-bold text-3xl">Latest Posts</h2>
    </div>

    <div class="flex container mx-auto p-4">
        @yield('main')
    </div>

    <footer class="bg-white mt-10">
        <div class="container mx-auto px-6 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="font-semibold text-lg mb-2">Quick Links</h3><br>
                <ul class="space-y-1">
                    <li><a href="/" class="text-gray-600 hover:text-blue-500">Home</a></li><br>
                    <li><a href="/categories" class="text-gray-600 hover:text-blue-500">Categories</a></li><br>
                    <li><a href="/privacy" class="text-gray-600 hover:text-blue-500">Privacy Policy</a></li><br>
                    <li><a href="/affiliates" class="text-gray-600 hover:text-blue-500">Affiliates</a></li><br>
                    <li><a href="/contact" class="text-gray-600 hover:text-blue-500">Contact</a></li><br>
                    <li><a href="/support" class="text-gray-600 hover:text-blue-500">Support</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-lg mb-2">Follow Us On</h3><br>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Facebook</a></li><br>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Twitter</a></li><br>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Instagram</a></li><br>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Snapchat</a></li><br>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Telegram</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-lg mb-2">Support</h3><br>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Help Center</a></li><br>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Contact</a></li><br>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Mail@blog.com</a></li><br>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-lg mb-2">About Us</h3>
                <p class="text-gray-600">We upload the latest trends, tips, stories in the world of design, development, and more. Sharing information and knowledge from around the world.</p>
            </div>
        </div>
        <div class="text-center text-gray-500 text-sm py-4 mt-8">
            &copy; {{ date('Y') }} Blog Inc. All rights reserved / Privacy / Terms / Cookie Policy / Site Map
        </div>
    </footer>

    <script>
        const likeCount = document.getElementById("likeCount");
        const likeBtn = document.getElementById("likeBtn");

        let likes = localStorage.getItem(`likes-${postId}`) || 0;
        likeCount.innerText = likes;

        likeBtn.addEventListener("click", () => {
            likes++;
            localStorage.setItem(`likes-${postId}`, likes);
            likeCount.innerText = likes;
        });

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
</body>
</html>
