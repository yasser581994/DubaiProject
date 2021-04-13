<?php

namespace App\Jobs;

use App\Events\SendMail;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $message ;

    public function __construct($message)
    {
        $this->message = $message ;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $notifyEmail = User::first()->notifyMail;

        Event(new sendMail($notifyEmail,$this->message) );
    }
}
