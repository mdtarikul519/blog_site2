<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::truncate();
        About::truncate();
        About::create([
             'title'=>"tarek mollah",
             'description'=>"tarek is a good boy. she is a php devloper",
             'image'=> 'about_upload/download.jfif',
        ]);

        About::create([
            'title'=>"sharif mollah",
            'description'=>"tarek is a good boy. she is a php devloper",
            'image'=> 'about_upload/download.jfif',
       ]);

       

        for ($i=0; $i < 7; $i++) { 
            $test = new Test();
            $test->user_id = $i;
            $test->subject = "Subject" . $i;
            $test->date = Carbon::now()->subMonth(1)->subDays($i)->toDateString();
            $test->number = 50;
            $test->save();
            
        }

    //    About::factory(10)->create();
    }

}
