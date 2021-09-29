<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactToTempleTable extends Migration
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
            $table->dropColumn('district');
            $table->string('facebook')->nullable()->after('phone')->comment('fb');
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
