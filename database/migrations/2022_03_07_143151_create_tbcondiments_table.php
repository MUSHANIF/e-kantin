<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbcondimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcondiments', function (Blueprint $table) {
            $table->id();
            $table->integer('StoreID')->nullable();
            $table->integer('ProdID')->nullable();
            $table->string('CondID')->nullable();
            $table->string('SKU')->nullable();
            $table->string('barcode')->nullable();
            $table->string('name')->nullable();
            $table->string('nameDisp')->nullable();
            $table->string('namePrint')->nullable();
            $table->string('unit')->nullable();
            $table->integer('group')->nullable();
            $table->integer('category')->nullable();
            $table->integer('class')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('service')->nullable();
            $table->decimal('tax')->nullable();
            $table->string('images')->nullable();;
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('tbcondiments');
    }
}
