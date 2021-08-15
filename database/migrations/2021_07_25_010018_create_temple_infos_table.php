<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temple_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('templeName')->default('')->comment('名稱');
            $table->string('adddress')->default('')->comment('地址');
            $table->string('city')->default('')->comment('縣市');
            $table->string('district')->nullable()->comment('區');
            $table->string('trownship')->default('')->comment('鄉鎮');
            $table->string('phone')->default('')->comment('電話');
            $table->string('contact_person')->default('')->comment('聯絡人');
            $table->string('introduce')->default('')->comment('介紹');
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
        Schema::dropIfExists('temple_infos');
    }
}
