<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\NotificationController;
class SentReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        //(new NotificationController)->sendSmsNotificaition($this->mail);//wysyłanie sms
        return $this->subject('MedBase - Przypomnienie o nadchodzącej wizycie')
        ->with([
            'mail' =>  $this->mail,
        ])
        ->markdown('emails.reminder');
    }
}
