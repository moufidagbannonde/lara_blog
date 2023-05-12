<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'public')
            ->orderBy('id', 'desc')
            ->simplePaginate(4);

        return view('posts.index')->with('posts', $posts);
    }

    public function show(Post $post)
    {
        if (auth()->id() != $post->user_id and $post->status === 'private') {
            abort(404);
        }

        $comments = Comment::all();

        return view('posts.show')
            ->with('post', $post)
            ->with('comments', $comments);
    }
}
