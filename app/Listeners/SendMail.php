<?php

namespace App\Listeners;

use App\Events\CreateAccount;
use App\Mail\SendEmailCreateAccount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
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
     * @param  \App\Events\CreateAccount  $event
     * @return void
     */
    public function handle(CreateAccount $event)
    {
        Mail::to($event->user['email'])->send(new SendEmailCreateAccount([
            'email' => $event->user['email'],
            'password' => $event->user['password'],
        ]));
    }
}
