<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBody2ToSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selections', function (Blueprint $table) {
            $table->string('body2')->nullable();;
            $table->string('body3')->nullable();;
            $table->string('body4')->nullable();;
            $table->string('body5')->nullable();;
            $table->string('body6')->nullable();;
            $table->string('body7')->nullable();;
            $table->string('body8')->nullable();;
            $table->string('body9')->nullable();;
            $table->string('body10')->nullable();;
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
