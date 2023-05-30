<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $categories = new Category;
        $categories->title = $request->title;
        $categories->slug = Str::slug($request->title);
        $categories->user_id = auth()->user()->id;
        $categories->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect()->back();
    }

    
}