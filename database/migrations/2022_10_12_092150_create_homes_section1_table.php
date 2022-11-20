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
        Schema::create('homes_section1', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('section_1');
            $table->string('title_2');
            $table->string('section_2');
            $table->string('title_3');
            $table->string('section_1_image');
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
        Schema::dropIfExists('homes_section1');
    }
};
