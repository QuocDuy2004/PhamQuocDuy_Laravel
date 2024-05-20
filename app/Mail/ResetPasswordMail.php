<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ResetPasswordMail extends Mailable
{
    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }
}
