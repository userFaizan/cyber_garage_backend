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
        Schema::create('homes_section5', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('section');
            // $table->string('list_1');
            // $table->string('list_2');
            // $table->string('list_3');
            // $table->string('list_4');
            // $table->string('list_5');
            // $table->string('list_6');
            // $table->string('list_7');
            $table->string('section_5_image');
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
        Schema::dropIfExists('homes_section5');
    }
};
