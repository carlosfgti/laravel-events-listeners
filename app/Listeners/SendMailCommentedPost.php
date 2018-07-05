<?php

namespace App\Listeners;

use App\Mail\PostCommentedMail;
use Mail;
use Log;
use App\Events\CommentedPost;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailCommentedPost
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CommentedPost  $event
     * @return void
     */
    public function handle(CommentedPost $event)
    {
        // Registring log commented post
        // Log::info($event->comment());
        $comment = $event->comment();
dd($comment);
        Mail::to($comment->user->mail)
                    ->send(new PostCommentedMail($comment));
    }
}
