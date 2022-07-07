<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntrosectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introsections', function (Blueprint $table) {
            $table->id();
            $table->string('IntroImage');
            $table->string('FirstTitle');
            $table->text('FirstText');
            $table->string('SecondTitle');
            $table->text('SecondText');
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
        Schema::dropIfExists('introsections');
    }
}
