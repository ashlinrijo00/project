<?php

namespace App\Jobs;

use App\Mail\WelcomeMail;
use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $member;

    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    public function handle()
    {
        Mail::to($this->member->email)->send(new WelcomeMail($this->member));
    }
}

