<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbtrxdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtrxdetails', function (Blueprint $table) {
            $table->integer('StoreID');
            $table->string('ProdID');
            $table->increments('trxNo');
            $table->string('SKU')->nullable();
            $table->string('barcode')->nullable();
            $table->string('name')->nullable();
            $table->string('nameDisp')->nullable();
            $table->string('namePrint')->nullable();
            $table->string('unit')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('service')->nullable();
            $table->decimal('tax')->nullable();
            $table->string('images')->nullable();
            $table->string('desc')->nullable();
            $table->integer('active')->nullable();
            $table->dateTime('last');
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
        Schema::dropIfExists('tbtrxdetails');
    }
}
