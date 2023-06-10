<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::truncate();
        Banner::create([
                'p_header' => 'jafqewrigfnerusdirtgf',
                'header' => 'jafqewrigfnerusdirtgf',
                'description' =>'hi there isa averry goot accessor',
                'image' =>'banner_upload/jcLcPxfk5I5EOnkUQTbSNKtERDPtRVmAGn3OU0YJ.png'
        ]);

        
    }
}
