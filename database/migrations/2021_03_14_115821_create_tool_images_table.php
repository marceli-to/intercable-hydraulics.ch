<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tool_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('caption', 255)->nullable();
            $table->double('coords_w', 16, 12)->nullable();
            $table->double('coords_h', 16, 12)->nullable();
            $table->double('coords_x', 16, 12)->nullable();
            $table->double('coords_y', 16, 12)->nullable();
            $table->tinyInteger('order')->default(-1);
            $table->string('orientation', 10)->nullable();
            $table->tinyInteger('publish')->default(0);
            $table->tinyInteger('preview')->default(0);
            $table->unsignedBigInteger('tool_id');
            $table->foreign('tool_id')->references('id')->on('accessories')->onDelete('cascade');
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
        Schema::dropIfExists('tool_images');
    }
}
