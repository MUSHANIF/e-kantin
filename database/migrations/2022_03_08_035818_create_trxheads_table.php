<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trxheads', function (Blueprint $table) {
            $table->id();
            $table->integer('StoreID')->nullable();
            $table->date('tgl')->nullable();
            $table->integer('trxNo')->nullable();
            $table->integer('tblNo')->nullable();
            $table->string('jnstrx')->nullable();
            $table->string('custname')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('address')->nullable();
            $table->decimal('totaltag')->nullable();
            $table->decimal('tax')->nullable();
            $table->string('serv')->nullable();
            $table->decimal('disc')->nullable();
            $table->decimal('grandTotal')->nullable();
            $table->string('payType')->nullable();
            $table->decimal('pay')->nullable();
            $table->decimal('change')->nullable();
            $table->binary('status')->nullable();
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
        Schema::dropIfExists('trxheads');
    }
};
