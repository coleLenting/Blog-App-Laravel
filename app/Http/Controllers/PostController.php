<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Create a new post associated with the authenticated user
    $user->posts()->create([
        'title' => $request->title,
        'body' => $request->body,
    ]);

    return redirect()->route('dashboard');
}


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('dashboard');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('dashboard');
    }
}
