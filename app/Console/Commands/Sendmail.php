<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class Sendmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = ['message' => 'This is a test email!'];

        Mail::to($this->argument('email'))->send(new WelcomeEmail($data));

        $this->info('Test email sent successfully!');
    }
}
