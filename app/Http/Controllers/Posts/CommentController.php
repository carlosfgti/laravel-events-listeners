<?php

namespace App\Http\Controllers\Posts;

use App\Events\CommentedPost;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    
    
    public function store(Request $request, Post $post)
    {
        $post = $post->find($request->id);
 
        $data = $request->all();
        $data['user_id'] = 1; // auth()->user()->id;
        $comment = $post->comments()->create($data);

        // Dispatching Event
        event(new CommentedPost($comment));
 
        return redirect()
                    ->route('posts.show', $post->id)
                    ->withSuccess('Comentário realizado com sucesso!');
    }
}
