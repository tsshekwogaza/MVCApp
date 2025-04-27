@extends('layouts.blog')

@section('category')

  <section class="py-40">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-white text-3xl font-semibold leading-tight mb-6 mt-6">Join our newsletter to read post directly in your inbox.</h2>
      <form action="#" method="POST" class="flex justify-center">
        <input type="email" name="email" placeholder="Enter your email" class="bg-gray-300 px-6 py-3 w-1/2 rounded-l-lg text-gray-900" required>
        <button type="submit" class="bg-gray-700 text-white px-2 py-3 rounded-r-lg font-semibold hover:bg-black hover:text-white">Subscribe</button>
      </form>
    </div>
  </section>

  @endsection
