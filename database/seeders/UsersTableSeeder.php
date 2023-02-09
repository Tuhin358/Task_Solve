<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $users=[
                ['name'=>'Tuhin','email'=>'admin@gmail.com','password'=>'password'],

            ];
             User::insert($users);


    }
}
