<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmas', function (Blueprint $table) {
            $table->id();
            $table->string('adi');
            $table->string('slogani');
            $table->string('konumu');
            $table->string('saatleri');
            $table->string('maili');
            $table->integer('telefonu');
            $table->string('key');
            $table->string('restorant_image')->nullable();
            $table->string('kapak_image');
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
        Schema::dropIfExists('firmas');
    }
}
