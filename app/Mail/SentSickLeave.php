<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\NotificationController;

class SentSickLeave extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail;
    public function __construct($mail)
    {
        $this->mail = $mail;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //wysyłanie sms (new NotificationController)->sendSmsNotificaition($this->mail);

        return $this->subject('MedBase - Zwolnienie')
        ->with([
            'mail' =>  $this->mail,
        ])
        ->markdown('emails.sickLeave');
    }
}
