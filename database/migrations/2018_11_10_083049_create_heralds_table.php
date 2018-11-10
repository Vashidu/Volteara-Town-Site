<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeraldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heralds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('created_at');
            $table->tinytext('title');
            $table->tinytext('descr');
            $table->timestamps('updated_at');
            $table->tinytext('author');
            $table->text('herald');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heralds');
    }
}
