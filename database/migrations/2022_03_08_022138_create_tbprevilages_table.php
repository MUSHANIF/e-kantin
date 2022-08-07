<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbprevilagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbprevilages', function (Blueprint $table) {
            $table->id();
            
            $table->string('UserID')->nullable();
            $table->integer('Level')->nullable();
            $table->string('ModulID')->nullable();
            $table->string('Previllage')->nullable();
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
        Schema::dropIfExists('tbprevilages');
    }
}
