<?php

namespace App\Observers;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class TestObserver
{
    /**
     * Handle the Contact "created" event.
     */
    public function created(Contact $contact): void
    {
         Log::info('Contact created: ' . $contact->name);
    }

    /**
     * Handle the Contact "updated" event.
     */
    public function updated(Contact $contact): void
    {
        Log::info('Contact updated: ' . $contact->name);
    }

    /**
     * Handle the Contact "deleted" event.
     */
    public function deleted(Contact $contact): void
    {
        Log::info('Contact deleted: ' . $contact->name);
    }

    /**
     * Handle the Contact "restored" event.
     */
    public function restored(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "force deleted" event.
     */
    public function forceDeleted(Contact $contact): void
    {
        //
    }
}
