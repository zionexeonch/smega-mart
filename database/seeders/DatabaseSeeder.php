<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          "name" => "Admin",
          "email" => "smegamart@smega.sch.id",
          "password" => Hash::make("SMart@2022"),
          "level" => 2,
        ]);

        $this->call([
          ProductSeeder::class
        ]);
    }
}
