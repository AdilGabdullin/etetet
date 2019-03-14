<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Forum extends Controller
{
    public function post($id)
    {
        $post = Post::with('user')->findOrFail($id);
        $recentPosts = $this->getRecentPosts();
        return view('forum.post', ['post' => $post, 'recentPosts' => $recentPosts]);
    }

    protected function getRecentPosts()
    {
        return Post
            ::select('id', 'header', 'description', 'thumbnail')
            ->orderBy('id', 'DESC')
            ->take(4)
            ->get();
    }
}
