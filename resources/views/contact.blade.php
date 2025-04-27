<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="Author" content="Timothy Samuel Shekwogaza">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Blog - Your one stop shop for Daily articles">
    <meta name="keywords" content="news, issues, info, reports, articles, dailies ">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
    <title>My Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white-100">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-800">My Blog</h1>
        <ul class="flex space-x-4">
            <li><a href="/" class="hover:underline text-blue-800">Back to home</a></li>
        </ul>
    </div>

    <div>
        <marquee behavior="" direction="">Welcome to our blogpage, get updates, daily insights, stories, inspirations and articles. <<<<< Our latest issue: Persistence! Nothing in the world can take the place of persistence, Talent wont; nothing is more common than unsuccessful men with talent. <<<<< Education wont; the world is full of educated fools. Genius wont; unrewarded genius is practically a... Continued in the blog post. <<< Read more in the articles section.</marquee>
    </div>

    <section class="bg-blue-600 dark:bg-blue-800 text-center text-white p-4 shadow py-40">
        <h1 class="text-4xl font-bold mb-2">Write | Read | Information</h1>
        <p class="text-lg mb-6">Join our team to explore latest issues.</p>
        <a href="/"  class="bg-white text-blue-600 font-semibold py-2 px-4 rounded shadow">Connect</a>
    </section>

  <!-- Footer -->
  <footer class="bg-white shadow mt-8">
        <div class="container mx-auto p-4 text-center">
        <p class="text-gray-600">&copy; My Blog <?php echo date('Y.'); echo" All rights reserved.";?></p>
        </div>
    </footer>
</body>
</html>
