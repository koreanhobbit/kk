<?php

namespace App\Listeners;

use App\Events\NewContactMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotification implements ShouldQueue
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
     * @param  NewContactMessage  $event
     * @return void
     */
    public function handle(NewContactMessage $event)
    {
        \Mail::to('ferry.ferryferdinalramli@gmail.com')->send(new \App\Mail\NewContactMessage($event->contact));
    }
}
