<?php

namespace App\Listeners;

use App\Events\ContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NotifyAdmin;
use Illuminate\Queue\InteractsWithQueue;

class ContactFormSubmitted
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactForm $event): void
    {
        \Notification::route('mail','demo123@gmail.com')->notify(new NotifyAdmin($event->data));
    }
}
