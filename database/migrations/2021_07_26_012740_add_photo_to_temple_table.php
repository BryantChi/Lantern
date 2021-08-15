<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotoToTempleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temple_infos', function (Blueprint $table) {
            //
            $table->text('temple_cover_photo')->after('templeName')->nullable()->comment('封面');
            $table->text('temple_other_photo')->nullable()->comment('其他圖片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temple_infos', function (Blueprint $table) {
            //
        });
    }
}
