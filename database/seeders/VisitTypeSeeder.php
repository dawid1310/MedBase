<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VisitType;

class VisitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitTypes = [
            [
                'name' => 'Recepta',
                'description' => 'Wizyta dotyczy wypisania nowej lub przedłużenia wcześnie wypisanej recepty',
            ],
            [
                'name' => 'Zwolnienie',
                'description' => 'Wizyta dotyczy wypisania zwolnienia lekarskiego.',
            ],
            [
                'name' => 'Konsultacja',
                'description' => 'Wizyta dotyczy konsultacji odnośnie przechodzonych chorób lub niepokojących objawów',
            ],
            [
                'name' => 'Terapia',
                'description' => 'Wizyta jest częścią prowadzonej terapii.',
            ]
        ];

        foreach ($visitTypes as $visitType) {
            VisitType::create($visitType);
        }
    }
}
