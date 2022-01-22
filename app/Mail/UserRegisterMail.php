<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $account;
    public $one;

    /**
     * Create a new message instance.
     *  
     * @return void
     */
    public function __construct(User $user,$anyone)
    {
        $this->account = $user;
        $this->one = $anyone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // $tt = $this->test();
        return $this
            // ->subject(config('app.name'))
            ->subject(env('APP_NAME'))
            ->view('email.register-email_b');
    }

    public function test()
    {
        return 7;
    }
}
