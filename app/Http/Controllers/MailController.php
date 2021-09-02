<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Mail\MailSent;
use App\Mail\SentPres;
use App\Mail\SentSickLeave;
use App\Mail\SentReminder;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
   public function sendPres($mail)
   {    
        Mail::to($mail['email'])->send(new SentPres($mail));
   }

   public function SickLeave($mail)
   {    
        Mail::to($mail['email'])->send(new SentSickLeave($mail));
   }

   public function sendReminder($mail)
   {    
        Mail::to($mail['email'])->send(new SentReminder($mail));
   }
}
