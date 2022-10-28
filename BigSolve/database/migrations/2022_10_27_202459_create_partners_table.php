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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('usertype')->default(0);
            $table->string('location');
            $table->string('organization');
            $table->string('sdg');
            $table->string('email')->unique();
            $table->string('description');
            $table->string('principles');
            $table->string('strategy');
            $table->string('experience');
            $table->string('projects'); 
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
        Schema::dropIfExists('partners');
    }
};
