<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait LogActivity
{
    public function logSomething($message)
    {
        Log::info("From Trait: " . $message);
    }
}
