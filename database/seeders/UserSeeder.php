<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "al123";
        $user->email = "al@gmail.com";
        $user->password = Hash::make('al123');
        $user->telp = "07890";
        $user->role = "user";
        $user->save();
    }
}
