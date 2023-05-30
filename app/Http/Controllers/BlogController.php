<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }
    public function store(Request $request)
    {

        $blogs = new Blog;
        $blogs->user_id = auth()->user()->id;
        $blogs->title = $request->title;
        $blogs->image = $request->image->store('image');
        $blogs->body = $request->body;
        $blogs->category_id = $request->category;
        $blogs->save();
        return redirect()->back();
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }
    public function delete($id)
    {

        $blog = Blog::where('id', $id)->first();
        $blog->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $blog = Blog::where('id', $id)->first();
        $categories = Category::all();
        return view('blog.edit', compact('blog', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->user_id = auth()->id();
        $blog->title = $request->title;

        $blog->image = $request->image->store('image');
        $blog->body = $request->body;
        $blog->category_id = $request->category;
        $blog->save();
        return redirect()->back();
    }

}