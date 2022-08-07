<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbprices', function (Blueprint $table) {
            $table->id();
            $table->integer('StoreID');
            $table->integer('LocID')->nullable();
            $table->integer('PriceID')->nullable();
            $table->string('ProdID')->nullable();
            $table->decimal('price')->nullable();
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
        Schema::dropIfExists('tbprices');
    }
}
