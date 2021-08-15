<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLighterInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lighter_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lighter')->default('')->comment('點燈人');
            $table->string('lighttemple')->default('')->comment('廟宇');
            $table->date('lightdate_start')->comment('起始日');
            $table->date('lightdate_end')->comment('截止日');
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
        Schema::dropIfExists('lighter_infos');
    }
}
