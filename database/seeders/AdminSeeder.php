<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>"Tulsi patel",
            'role'=>"admin",
            'email'=>"tulc1104@gmail.com",
            'password' => bcrypt("_im.unique11")
        ]);
    }
}
