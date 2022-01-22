<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $account;
    public $pass;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$newpass)
    {

        $this->account = $user;
        $this->pass = $newpass;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.forgotpassword-email_b')
        
        ->subject(env('APP_NAME'));
    }
} 
