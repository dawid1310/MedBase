<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Dawid',
                'surname' => 'Kosmala',
                'email' => 'dawidkosmala1310@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Admin',
                'phone' => 516851833,
                'pesel' => 96101303870,
            ],
            [
                'name' => 'Agnieszka',
                'surname' => 'Rogowska',
                'email' => 'agnieszka8rogowska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 96062669464,
            ],
            [
                'name' => 'Jan',
                'surname' => 'Kowalski',
                'email' => 'JanKowalski@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 87020776412,
            ],
            [
                'name' => 'Eugeniusz',
                'surname' => 'Marciniak',
                'email' => 'EugeniuszMarciniak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Admin',
                'phone' => 516851833,
                'pesel' => 89010296973,
            ],
            [
                'name' => 'Aleksy',
                'surname' => 'Pietrzak',
                'email' => 'AleksyPietrzakk@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 85031425473,
            ],
            [
                'name' => 'Krzysztof',
                'surname' => 'Krawczyk',
                'email' => 'KrzysztofKrawczyk@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 85011467574,
            ],
            [
                'name' => 'Dariusz',
                'surname' => 'Czerwiński',
                'email' => 'DariuszCzerwiński@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 80092816837,
            ],
            [
                'name' => 'Józef',
                'surname' => 'Baran',
                'email' => 'JózefBaran@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 95082621711,
            ],
            [
                'name' => 'Leonardo',
                'surname' => 'Brzeziński',
                'email' => 'LeonardoBrzeziński@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 84081029811,
            ],
            [
                'name' => 'Maurycy',
                'surname' => 'Baranowski',
                'email' => 'MaurycyBaranowski@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 95011922236,
            ],
            [
                'name' => 'Gniewomir',
                'surname' => 'Baran',
                'email' => 'GniewomirBaran@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 80021158997,
            ],
            [
                'name' => 'Kordian',
                'surname' => 'Zieliński',
                'email' => 'KordianZieliński@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 83072688453,
            ],
            [
                'name' => 'Diego',
                'surname' => 'Jakubowski',
                'email' => 'DiegoJakubowski@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 81110667796,
            ],
            [
                'name' => 'Norbert',
                'surname' => 'Jakubowski',
                'email' => 'NorbertJakubowski@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 86020523819,
            ],
            [
                'name' => 'Gabriel',
                'surname' => 'Kalinowski',
                'email' => 'GabrielKalinowski@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 89010135632,
            ],
            [
                'name' => 'Krzysztof',
                'surname' => 'Maciejewski',
                'email' => 'KrzysztofMaciejewski@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 89010135632,
            ],
            [
                'name' => 'Alojzy',
                'surname' => 'Marciniak',
                'email' => 'AlojzyWalczak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 82011276793,
            ],
            [
                'name' => 'Bruno',
                'surname' => 'Zieliński',
                'email' => 'BrunoZieliński@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 90120947619,
            ],
            [
                'name' => 'Pamela',
                'surname' => 'Mróz',
                'email' => 'PamelaMróz@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 81110157965,
            ],
            [
                'name' => 'Aniela',
                'surname' => 'Gajewska',
                'email' => 'AnielaGajewska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 93022558581,
            ],
            [
                'name' => 'Lila',
                'surname' => 'Wojciechowska',
                'email' => 'LilaWojciechowska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 94122875226,
            ],
            [
                'name' => 'Malwina',
                'surname' => 'Pawlak',
                'email' => 'MalwinaPawlak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 96081722328,
            ],
            [
                'name' => 'Krystyna',
                'surname' => 'Gajewska',
                'email' => 'KrystynaGajewska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 80041474527,
            ],
            [
                'name' => 'Katarzyna',
                'surname' => 'Stępień',
                'email' => 'KatarzynaStępień@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 85032814582,
            ],
            [
                'name' => 'Daniela',
                'surname' => 'Baranowska',
                'email' => 'DanielaBaranowska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 96031947649,
            ],
            [
                'name' => 'Izabela',
                'surname' => 'Pawlak',
                'email' => 'IzabelaPawlak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 88062925181,
            ],
            [
                'name' => 'Florentyna',
                'surname' => 'Nowak',
                'email' => 'FlorentynaNowak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 85122555883,
            ],
            [
                'name' => 'Lila',
                'surname' => 'Szymczak',
                'email' => 'LilaSzymczak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'User',
                'phone' => 516851833,
                'pesel' => 92050424961,
            ],
            [
                'name' => 'Otylia',
                'surname' => 'Głowacka',
                'email' => 'OtyliaGłowacka@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Admin',
                'phone' => 516851833,
                'pesel' => 96050261223,
            ],
            [
                'name' => 'Natalia',
                'surname' => 'Kubiak',
                'email' => 'NataliaKubiak@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 83050738684,
            ],
            [
                'name' => 'Ilona',
                'surname' => 'Sokołowska',
                'email' => 'IlonaSokołowska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 92030979568,
            ],
            [
                'name' => 'Nikola',
                'surname' => 'Adamska',
                'email' => 'NikolaAdamska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 80032496462,
            ],
            [
                'name' => 'Konstancja',
                'surname' => 'Borkowska',
                'email' => 'KonstancjaBorkowska@gmail.com',
                'password' => Hash::make('Dawid1310516'),
                'account_type' => 'Doctor',
                'phone' => 516851833,
                'pesel' => 84010757644,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}