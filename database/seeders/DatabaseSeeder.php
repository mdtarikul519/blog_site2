<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call(AboutSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(UserSeeder::class);
        
    }
}
