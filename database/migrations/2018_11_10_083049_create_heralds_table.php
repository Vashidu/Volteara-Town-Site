<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
