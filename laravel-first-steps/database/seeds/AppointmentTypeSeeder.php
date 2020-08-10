<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointment_types')->insert([
            [
                'name'=>'Ortodoncia'
            ],
            [
                'name'=>'Limpieza'
            ]
        ]);
    }
}
