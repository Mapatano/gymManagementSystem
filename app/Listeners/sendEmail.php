<?php

namespace App\Listeners;

use App\Events\clientCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendEmail
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
     * @param  \App\Events\clientCreated  $event
     * @return void
     */
    public function handle(sendEmail $event)
    {
        $Client = $event->Client;
        Mail::to($Client->Email)->send(new WelcomeEmail($Client));
    }
}
