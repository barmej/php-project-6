<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image',200);
            $table->string('name',200);
            $table->string('color',200);
            $table->string('model',200);
            $table->integer('brand_id')->unsigned();
           
            
            $table->timestamps();
        });
         Schema::table('cars', function($table) {
       $table->foreign('brand_id')->references('id')->on('cars');
   });
    }
    



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
