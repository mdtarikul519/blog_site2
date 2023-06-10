<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Phone::truncate();
      Phone::create([
             'name' =>'redme Not10 pro',
             'user_id'=>'1',
      ]);

      Phone::create([
        'name' =>'vivo Y20',
        'user_id'=>'2',
      ]);

      Phone::factory(5)->create();
    }
}
