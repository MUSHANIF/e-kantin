<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbstoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbstores', function (Blueprint $table) {
            $table->id();
            
            $table->integer('StoreID');
            $table->string('StoreName')->nullable();
            $table->integer('Location');
            $table->string('Image')->nullable();
            $table->string('Api_Key')->nullable();
            $table->string('QrCode')->nullable();
            $table->string('Url')->nullable();
            $table->integer('active')->nullable();
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
        Schema::dropIfExists('tbstores');
    }
}
