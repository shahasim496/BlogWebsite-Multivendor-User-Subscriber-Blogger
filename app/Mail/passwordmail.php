<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\passwordmail;
class passwordmail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $hashpassword =  null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($hashpassword)
    {
        $this->hashpassword = $hashpassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $password = $this->hashpassword ;
        return $this->subject('Eamil from ZoysBlog')->view('emails.passwordmail',compact('password'));
    }
}
