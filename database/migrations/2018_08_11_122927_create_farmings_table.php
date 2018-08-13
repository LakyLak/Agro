<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tractor_id')->unsigned();
            $table->foreign('tractor_id')->references('id')->on('tractors')->onDelete('cascade');;
            $table->integer('field_id')->unsigned();
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');;
            $table->integer('farming_area');
            $table->date('date');
            $table->rememberToken();
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
        Schema::dropIfExists('farmings');
    }
}
    