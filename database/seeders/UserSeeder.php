<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run(){
        $user = User::create([
            'name' => 'Toyi',
            'email' => 'fabricetoyi87@gmail.com',
            'password' =>bcrypt('123456'),
        ]);

        $user->assignRole('admin');
    }
}