<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\TestObserver;
use App\Models\Contact;

class EventServiceProvider extends ServiceProvider
{


    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    // protected $observers =[
    //     Contact::class=>[TestObserver::class],
    // ]


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Contact::observe(TestObserver::class);
    }
}
