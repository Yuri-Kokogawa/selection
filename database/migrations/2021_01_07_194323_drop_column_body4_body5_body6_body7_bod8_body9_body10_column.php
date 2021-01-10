<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnBody4Body5Body6Body7Bod8Body9Body10Column extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selections', function (Blueprint $table) {
            $table->dropColumn('body4');
            $table->dropColumn('body5');
            $table->dropColumn('body6');
            $table->dropColumn('body7');
            $table->dropColumn('body8');
            $table->dropColumn('body9');
            $table->dropColumn('body10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selections', function (Blueprint $table) {
            //
        });
    }
}
