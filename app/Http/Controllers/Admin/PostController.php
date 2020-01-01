<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'image' => 'required|mimes:png,jpeg,jpg'

        ]);
        if (request()->has('image')) {
            $image = request()->file('image');
            $image_name = uniqid() . $image->getClientOriginalName();
        } else {
            $image_name = "default.png";
        }
        $post = new Post();
        $post->title = request()->title;
        $post->slug = str_slug(request()->title);
        $post->content = request()->description;
        $post->category_id = request()->category_id;
        $post->featured = $image_name;
        if ($post->save()) {
            $post->tags()->attach($request->tags);
            $image->move(public_path('images'), $image_name);
            return redirect(route('post.index'))->with('success', $request->post . 'Post Create Success');
        }
        return redirect()->back()->with('danger', 'Post Create Fail!!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.update', compact('post', 'categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imag_name = uniqid() . $image->getClientOriginalName();
            $image->move(public_path('images'), $imag_name);
        } else {
            $imag_name = $post->featured;
        }
        $post->title = $request->title;
        $post->content = $request->description;
        $post->category_id = $request->category_id;
        $post->featured = $imag_name;
        if ($post->save()) {
            $post->tags()->sync($request->tags);
            return redirect(route('post.index'))->with('success', 'Post Updated Success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Post::find($id)->delete()) {
            return redirect()->back()->with('success', 'Post Delete Success');
        }
    }
}
