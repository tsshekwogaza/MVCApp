<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\recentPost;

// USING ELOQUENT TO CONNECT TO DB
class HomeController extends Controller
{
    public function index() {
        $posts = Post::when(request('category_id'), function($query) {
            $query->where('category_id', request('category_id'));
        })->get();
        $categories = Category::all();
        $recent_posts = recentPost::orderBy('name', 'asc')->get();

        return view('homepage', compact( 'posts', 'categories', 'recent_posts')); 
        // ['categories' => $categories, 'posts' => $posts, 'recent_posts' => $recent_posts]);
    }
}
