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
        Schema::create('managements_section3', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title_1');
            $table->mediumText('para_1');
            $table->mediumText('title_2');
            $table->mediumText('para_2');
            $table->mediumText('file_image_2');
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
        Schema::dropIfExists('managements_section3');
    }
};
