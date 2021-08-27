<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SpecializationSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(VisitTypeSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(DiseaseSeeder::class);
        $this->call(ScheduleSeeder::class);
        
        // \App\Models\User::factory(10)->create();
    }
}
