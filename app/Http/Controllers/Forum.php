<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forum extends Controller
{
    public function post($id)
    {
        return view('forum.post', [
            'post'        => Post::with('user', 'comments.user')->findOrFail($id),
            'recentPosts' => $this->getRecentPosts(),
        ]);
    }

    public function comment(Request $request)
    {
        $postId = $request->request->get('post_id');
        $content = $request->request->get('content');
        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $postId,
            'content' => $content,
        ]);
        return redirect(route('post', ['post_id' => $postId]));
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
