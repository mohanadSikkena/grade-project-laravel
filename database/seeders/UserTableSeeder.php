<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name ='abdalla';
        $user->email = 'abdalla@gmail.com';
        $user->password = '12345678';
        $user->role_id = '1' ;
        $user->save();

    }
}
