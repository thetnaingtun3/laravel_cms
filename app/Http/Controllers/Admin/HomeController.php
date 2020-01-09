<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $postCount = Post::get()->count();
        $categoryCount = Category::get()->count();
        $tagCount = Tag::get()->count();
        $userCount = User::get()->count();
        $post = Post::take(5)->get();
        $category = Category::take(5)->get();
        $tags = Tag::take(5)->get();
        $users = User::take(5)->get();
        return view('admin.home', compact('postCount', 'categoryCount', 'tagCount', 'userCount', 'post', 'category', 'tags', 'users'));
    }
}
