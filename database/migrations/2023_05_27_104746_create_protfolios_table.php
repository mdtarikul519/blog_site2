<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protfolios', function (Blueprint $table) {
            $table->id();
            $table->string('colam1_top')->nullable();
            $table->string('colam1_bottom')->nullable();
            $table->string('colam2_top')->nullable();
            $table->string('colam2_bottom')->nullable();
            $table->string('colam3_top')->nullable();
            $table->string('colam3_bottom')->nullable();
            $table->string('colam4_top')->nullable();
            $table->string('colam4_bottom')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protfolios');
    }
}
