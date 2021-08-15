<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdherentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adherentName')->default('')->comment('姓名');
            $table->string('idnumber')->unique()->nullable()->comment('身分證字號');
            $table->string('phone')->default('')->comment('電話');
            $table->string('address')->nullable()->comment('地址');
            $table->string('email')->nullable()->comment('信箱');
            $table->string('line')->nullable()->comment('Line');
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
        Schema::dropIfExists('adherent_infos');
    }
}
