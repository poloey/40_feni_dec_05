<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index () {
    $posts = Post::all();
    return view('blog.index', compact('posts'));
  }
  public function create()
  {
    return view('blog.create');
  }
  public function store() {
    $title = request('title');
    $content = request('content');
    Post::create([
      'title' => $title,
      'content' => $content,
      'user_id' => auth()->id()
    ]);
    return redirect('/');
  }
}
