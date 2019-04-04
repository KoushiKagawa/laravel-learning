<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostSent extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $post)
    {
        $this->title = "送信されました！";
        $this->data['user'] = $user;
        $this->data['post'] = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.posts.sents')
        ->subject($this->title)
        ->with($this->data);
    }
}
