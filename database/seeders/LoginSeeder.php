<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Alo",
            'email'=>"alo@gmail.com",
            'password'=>bcrypt('12345'),
            'photo'=>'upload/alo.jpg',
            'address'=>'Dhaka',
            'gender'=>'Female',
            'number'=>'0148932512',
        ]);

        User::create([
            'name'=>"rakib",
            'email'=>"rakib@gmail.com",
            'password'=>bcrypt('12345'),
            'photo'=>'upload/rakib.jpg',
            'address'=>'Dhaka',
            'gender'=>'male',
            'number'=>'0148932512',
        ]);

        User::create([
            'name'=>"nehal",
            'email'=>"nehal@gmail.com",
            'password'=>bcrypt('12345'),
            'photo'=>'upload/rakib.jpg',
            'address'=>'Dhaka',
            'gender'=>'male',
            'number'=>'0148932512',
        ]);
    }
}
