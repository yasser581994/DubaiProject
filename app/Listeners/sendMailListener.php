<?php

namespace App\Listeners;

use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendMailListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $mails = $event->mail ;
        $mails = explode(',',$mails);
        foreach ($mails as $mail)
        mail::to($mail)->send(new ContactMail($event->message));
    }
}
