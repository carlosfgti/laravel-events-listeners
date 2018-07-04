<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    
    
    public function store(Request $request, Post $post)
    {
        $post = $post->find($request->id);
 
        $comment = $post->comments()->create($request->all());
 
        return redirect()
                    ->route('posts.show', $post->id)
                    ->withSuccess('Comentário realizado com sucesso!');
    }
}
