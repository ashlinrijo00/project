<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class SendTestEmail extends Command
{
    protected $signature = 'email:test'; 

    protected $description = 'Send test email to user';

    public function handle()
    {
        Mail::to('example@example.com')->send(new TestMail());
        $this->info('Test email sent!');
    }
}
