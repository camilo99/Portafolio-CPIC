<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoBienestarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          {
        Schema::create('bienestar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icono');
            $table->string('titulo');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bienestar');
    }
}
