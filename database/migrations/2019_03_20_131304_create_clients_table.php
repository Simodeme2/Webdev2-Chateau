<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('title_id')->unsigned();
            $table->foreign('title_id')->references('id')->on('titles');

            $table->string('firstname');
            $table->string('lastname');
            
            $table->string('email')->unique();
            
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->string('province');


            $table->timestamps();
            $table->softDeletes();	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
