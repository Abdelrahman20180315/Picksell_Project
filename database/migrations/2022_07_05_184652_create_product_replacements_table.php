<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReplacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_replacements', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('count');
            $table->string('replacement_reason');
            $table->string('replacement_video');
            $table->string('replacement_image');
            $table->string('replacement_notes');
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
        Schema::dropIfExists('product_replacements');
    }
}
