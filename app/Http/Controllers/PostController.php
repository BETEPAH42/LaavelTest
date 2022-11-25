<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('category')->orderBy('id','desc')->paginate(6);
        return view('posts.index', compact('posts'));
    }

    public function showPosts() {
        $posts = Post::with('category')->orderBy('id','desc')->paginate(5);
        return view('posts.showAll',compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug',$slug)->firstOrFail();
        $comments = Comment::arrComment($post->comments->toArray());
        $post->views ++;
        $post->update();
        return view('posts.show',compact('post','comments'));
    }
}
