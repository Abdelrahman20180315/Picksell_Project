<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRecoveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_recoveries', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('count');
            $table->string('recovery_reason');
            $table->string('recovery_video');
            $table->string('recovery_image');
            $table->string('recovery_notes');
            $table->string('recovery_phone');
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
        Schema::dropIfExists('product_recoveries');
    }
}
