<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;

class VisitReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visit:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command sends emails and sms messages that reminds about incoming visit';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $messeges = DB::table('users')
            ->join('visits', 'visits.user_id', 'users.id')
            ->where(function ($query) {
                $query->where('visits.day', '>=', Carbon::now("Europe/Warsaw")->toDateString())
                    ->where('visits.time', '>', Carbon::now("Europe/Warsaw")->toTimeString());
            })
            ->where('visits.day', '<=', Carbon::now("Europe/Warsaw")->addDay(1)->toDateString())
            ->select('users.email', 'visits.day', 'visits.time', 'visits.doctor_id')
            ->get();
        foreach ($messeges as $messege) {
            $doctor = DB::table('users')
            ->join('doctors', 'doctors.user_id', 'users.id')
            ->where('doctors.id', $messege->doctor_id)
            ->select('users.name', 'users.surname')
            ->first();

            $text = [
                "email" => $messege->email,
                0=>"Zbliża się termin twojej wizyty u lekarza: ".$doctor->name." ".$doctor->surname,
                1=>"Wizyta odbędzie się ". $messege->day." o godzinie ". $messege->time,
                2=>"Pamiętaj by użyć wybranego sposobu komunikacji"
            ];
            $mailController = (new MailController)->sendReminder($text);
        }
        $this->info('Successfully sent reminders to everyone.');
    }
}
