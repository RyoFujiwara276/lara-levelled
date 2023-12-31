<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
      return view('post.create');
    }

    public function store(Request $request) {

      $post = Post::create([
        'title' => $request->title,
        'body' => $request->body
      ]);
      $request->session()->flash('message', 'Post Saved');

      $validated = $request->validate([
        'title' => 'required|max:20',
        'body' => 'required|max:400',
      ]);
      $post = Post::create($validated);
      return back();
    }

    public function index() {
      $posts=Post::all();
      return view('post.index', compact('posts'));
    }
}
