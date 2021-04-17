<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours_eleves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idU');
            $table->unsignedBigInteger('idCo');
            $table->timestamps();

            $table->foreign('idU')->references('id')->on('users');
            $table->foreign('idCo')->references('id')->on('cours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours_eleves');
    }
}
