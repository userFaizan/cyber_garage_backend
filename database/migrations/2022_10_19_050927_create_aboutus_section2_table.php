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
        Schema::create('aboutus_section2', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title_1');
            $table->mediumText('para_1');
            $table->mediumText('title_2');
            $table->mediumText('para_2');
            $table->mediumText('title_3');
            $table->mediumText('para_3');
            $table->string('file_image');

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
        Schema::dropIfExists('aboutus_section2');
    }
};
