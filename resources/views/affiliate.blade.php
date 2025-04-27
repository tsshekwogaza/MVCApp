<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creative Blog</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans">
  <header class="bg-white shadow-md sticky top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center relative">
        <img src="{{ asset('images/blog.png') }}" class="w-20 h-10">
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

  <section class="relative h-96 bg-cover bg-center" style="background-image: url('images/blog.png');">
      <h2 class="text-4xl font-semibold leading-tight">Inspire Your Creativity with Fresh Ideas</h2>
      <p class="mt-4 text-xl">Explore the latest trends, tips, and stories in the world of design, development, and more.</p>
      <a href="#featured" class="mt-8 inline-block bg-purple-700 text-white text-lg py-2 px-6 rounded-lg hover:bg-purple-800">Explore Now</a>
  </section>

  <section id="featured" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-extrabold text-center mb-12">Featured Post</h2>
      <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 lg:space-x-8">
        <div class="lg:w-1/2 relative">
          <img src="{{ asset('images/blog.png') }}" alt="Featured Post" class="w-full rounded-lg shadow-lg">
          <div class="absolute top-0 left-0 bg-blue-300 text-white py-2 px-4 text-sm uppercase font-semibold">Trending</div>
        </div>
        <div class="lg:w-1/2">
          <h3 class="text-2xl font-semibold">The Future of Web Design: What's Next?</h3>
          <p class="text-lg mt-4 text-gray-600">The world of web design is always evolving. In this post, we explore the upcoming trends, technologies, and design philosophies that will shape the digital landscape in the coming years.</p>
          <a href="#" class="mt-4 text-blue-300 font-semibold hover:underline">Read More →</a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-extrabold text-center mb-12">Explore our Category</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="category-card bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-semibold text-gray-700">Web Design</h3>
          <p class="text-gray-500 mt-2">Discover the latest in website design, UI/UX, and more.</p>
        </div>
        <div class="category-card bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-semibold text-gray-700">Development</h3>
          <p class="text-gray-500 mt-2">Stay updated on web development, coding tips, and tools.</p>
        </div>
        <div class="category-card bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-semibold text-gray-700">Marketing</h3>
          <p class="text-gray-500 mt-2">Learn strategies and tactics for effective digital marketing.</p>
        </div>
        <div class="category-card bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-semibold text-gray-700">Creativity</h3>
          <p class="text-gray-500 mt-2">Unleash your creativity with inspiring stories and tips.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-6">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-semibold leading-tight mb-6 mt-6">Join our newsletter to read post directly in your inbox.</h2>
      <form action="#" method="POST" class="flex justify-center">
        <input type="email" name="email" placeholder="Enter your email" class="bg-gray-300 px-6 py-3 w-1/2 rounded-l-lg text-gray-900" required>
        <button type="submit" class="bg-gray-700 text-white px-2 py-3 rounded-r-lg font-semibold hover:bg-black hover:text-white">Subscribe</button>
      </form>
    </div>
  </section>

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

</body>
</html>
