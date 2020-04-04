<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscription_token;
    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscription_token, $post)
    {
        $this->subscription_token = $subscription_token;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact.new-post');
    }
}
