<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Blog Post</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-white shadow-sm py-4">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">My Blog</h1>
      <nav class="space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
        <a href="#" class="text-gray-600 hover:text-gray-900">About</a>
        <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-4xl mx-auto px-4 py-8">
    <!-- Featured Image -->
    <img src="https://via.placeholder.com/900x300" alt="Featured" class="rounded-lg shadow mb-6 w-full object-cover">

    <!-- Post Meta -->
    <div class="mb-4 text-sm text-gray-500">
      <span>By Jane Doe</span> • 
      <span>April 28, 2025</span> • 
      <span class="uppercase text-blue-600 font-semibold">Tech</span>
    </div>

    <!-- Title -->
    <h2 class="text-4xl font-extrabold mb-4">How Tailwind CSS Simplifies Web Design</h2>

    <!-- Blog Body -->
    <article class="space-y-4 text-lg leading-relaxed">
      <p>Tailwind CSS provides utility-first classes that allow developers to build responsive, customizable designs quickly.</p>
      <p>This approach reduces the need for writing custom CSS and helps maintain a consistent design system across a site.</p>
      <blockquote class="border-l-4 pl-4 italic text-gray-600">"Tailwind gives me full control without writing a single line of custom CSS."</blockquote>
      <p>Let’s explore how you can structure your components using Tailwind effectively.</p>
    </article>

    <!-- Tags -->
    <div class="mt-6">
      <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">#Tailwind</span>
      <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">#WebDev</span>
      <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">#CSS</span>
    </div>

    <!-- Social Sharing -->
    <div class="mt-8 flex space-x-4">
      <a href="#" class="text-blue-600 hover:underline">Share on Twitter</a>
      <a href="#" class="text-blue-700 hover:underline">Share on Facebook</a>
    </div>

    <!-- Comments Section -->
    <section class="mt-12">
      <h3 class="text-2xl font-semibold mb-4">Comments</h3>
      <div class="bg-white p-4 rounded shadow">
        <p class="text-gray-700">No comments yet. Be the first to comment!</p>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t mt-12 py-4">
    <div class="max-w-6xl mx-auto px-4 text-center text-sm text-gray-500">
      © 2025 My Blog. All rights reserved.
    </div>
  </footer>

</body>
</html>

