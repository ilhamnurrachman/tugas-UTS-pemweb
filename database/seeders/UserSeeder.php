<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Ilham Nur Rachman',
            'email' => 'nurrachman@gmail.com',
            'password' => Hash::make('18april2004'),
        ]);
    }
}
