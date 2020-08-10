<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ozu', 'surname' => 'na', 'username'=>'Ezu10', 'email' => 'jesus@yo.com', 'password'=> Hash::make('Jesus123456')
            ],
        ]);
    }
}
