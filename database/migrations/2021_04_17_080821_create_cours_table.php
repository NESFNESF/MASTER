<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idU');
            $table->unsignedBigInteger('idC');
            $table->string('titre');
            $table->string('indicateur');
            $table->string('situation');
            $table->string('contenu');
            $table->string('unite');
            $table->string('fichier');
            $table->timestamps();

            $table->foreign('idU')->references('id')->on('users');
            $table->foreign('idC')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
