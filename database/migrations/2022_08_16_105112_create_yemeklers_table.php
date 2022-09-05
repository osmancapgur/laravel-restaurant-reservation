<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYemeklersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yemeklers', function (Blueprint $table) {
            $table->id();
            $table->string('adi');
            $table->string('icerik');
            $table->string('turu');
            $table->integer('fiyati')->nullable();
            $table->string('yemek_image');
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
        Schema::dropIfExists('yemeklers');
    }
}
