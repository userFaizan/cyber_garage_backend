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
        Schema::create('userdetail', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->string('c_address');
            $table->string('city');
            $table->string('state');
            $table->string('code');
            $table->string('c_phone');
            $table->string('c_email');
            $table->string('number');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone');
            $table->string('email');
            $table->string('username');
            $table->string('password');

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
        Schema::dropIfExists('userdetail');
    }
};
