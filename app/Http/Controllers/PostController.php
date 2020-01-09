<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detail($slug)
    {
        $tags = Tag::all();
        $post = Post::where('slug', $slug)->first();
        $category = Category::find($post->category_id);
        $relatedPosts = $category->posts()->take(5)->get();
        return view('postall', compact('post', 'relatedPosts'));
    }

    public function postByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $post = $category->posts()->get();
        return view('index', compact('post'));
    }

    public function postByTag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $post = $tag->posts()->get();
        return view('index', compact('post'));

    }

}
