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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title1');
            $table->mediumText('sub_title1');
            $table->mediumText('title2');
            $table->mediumText('sub_title2');
            $table->mediumText('title3');
            $table->mediumText('sub_title3');
            $table->mediumText('title4');
            $table->mediumText('sub_title4');
            $table->mediumText('title5');
            $table->mediumText('sub_title5');
            $table->mediumText('title6');
            $table->mediumText('sub_title6');
            $table->mediumText('title7');
            $table->mediumText('sub_title7');
            $table->mediumText('title8');
            $table->mediumText('sub_title8');
            $table->mediumText('title9');
            $table->mediumText('sub_title9');
            $table->mediumText('title10');
            $table->mediumText('sub_title10');
            $table->mediumText('title11');
            $table->mediumText('sub_title11');
            $table->mediumText('title12');
            $table->mediumText('sub_title12');
            $table->mediumText('title13');
            $table->mediumText('sub_title13');
            $table->mediumText('title14');
            $table->mediumText('sub_title14');
            $table->mediumText('title15');
            $table->mediumText('sub_title15');
            $table->mediumText('title16');
            $table->mediumText('sub_title16');
            $table->mediumText('title17');
            $table->mediumText('sub_title17');
            $table->mediumText('title18');
            $table->mediumText('sub_title18');
            $table->mediumText('title19');
            $table->mediumText('sub_title19');
            $table->mediumText('title20');
            $table->mediumText('sub_title20');
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
        Schema::dropIfExists('terms');
    }
};
