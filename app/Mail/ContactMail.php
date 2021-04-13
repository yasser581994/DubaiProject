<?php

namespace App\Mail;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message  ;
    public function __construct($message)
    {
        $this->message = $message ;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_email =User::first()->from_email ;
        return $this->from($from_email)->subject('Dubai Property Show')->view('backend.messages.sendMail',['lastMessage'=>$this->message]) ;
    }
}
