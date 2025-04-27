@extends('layouts.app')

@section('main')
<div class="flex container mx-auto p-4">

    <main class="flex-1">
        <div class="text-white relative mb-2 left-0 right-0 z-50">
            <marquee behavior="" direction="">Welcome to our blogpage, get updates, daily insights, stories, inspirations and articles. <<<<< Our latest issue: Persistence! Nothing in the world can take the place of persistence, Talent wont; nothing is more common than unsuccessful men with talent. <<<<< Education wont; the world is full of educated fools. Genius wont; unrewarded genius is practically a... Continued in the blog post. <<< Read more in the articles section.</marquee>
        </div>
        @foreach ($posts as $post)
            <article class="bg-white border-b p-6 rounded-lg shadow mb-6 relative">
                <div class="absolute top-2 left-0 bg-blue-300 text-white py-2 px-4 text-sm uppercase font-semibold">New</div>
                {{-- <img src="{{ asset('images/blog.png') }}" alt="Img" class="w-full h-48 object-cover rounded mb-4"> --}}
                <img src="images/{{ $post->image }}" alt="Img" class="w-full h-48 object-cover rounded mb-4">
                <div>  
                    <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ substr($post->content, 0, 238) }}...</p>
                    <a href="{{ route('article', $post) }}" class="text-blue-500 hover:underline">Read More →</a>
                </div>
            </article>
        @endforeach   
    </main>

    <aside class="w-1/4 ml-4">
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="font-semibold mb-2">Categories</h2>
            <ul>
                @foreach($categories as $category)
                    <li><a href="homepage?category_id={{ $category->id }}" class="text-blue-500 hover:underline">{{ $category->name }}</a></li>
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
        <div class="bg-gradient-to-r from-white to-blue-300 p-6 rounded-lg shadow mb-6 h-300">
            <h2 class="font-semibold mb-2">Advert placement</h2>
        </div>
    </aside>

</div>
@endsection
