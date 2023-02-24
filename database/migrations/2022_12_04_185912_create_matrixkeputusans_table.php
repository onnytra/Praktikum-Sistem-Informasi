<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrixkeputusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrixkeputusan', function (Blueprint $table) {
            $table->increments('id_matrix', 11);
            $table->unsignedInteger('id_alternatif');
            $table->foreign('id_alternatif')->references('id_alternatif')->on('alternatifs')->onDelete('cascade');
            $table->unsignedInteger('id_bobot');
            $table->foreign('id_bobot')->references('id_bobot')->on('bobots')->onDelete('cascade');
            $table->integer('value');
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
        Schema::dropIfExists('matrixkeputusan');
    }
}
