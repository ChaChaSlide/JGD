<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('items', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('jewelry_type_id')->unsigned();
            $table->foreign('jewelry_type_id')->references('id')->on('types');
            $table->integer('price');
            $table->text('description');
            $table->string('img_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
