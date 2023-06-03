<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function profile()
    {
        $user = auth()->user();
        // dd($user);
        return view('auth.profile', compact('user'));
    }
    public function update(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        if ($request->has('image')) {
            $user->image = $request->image->store('image');
        }
        $user->bio = $request->bio;
        $user->number = $request->number;
        $user->save();
        return redirect()->back();
    }
}