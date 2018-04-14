<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousSegmentsleftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_segmentslefts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motilidad_ocularl')->nullable();
            $table->string('previous_segmentsl')->nullable();
            $table->string('parpadol')->nullable();
            $table->string('vías_lagrimalesl')->nullable();
            $table->string('sensib_contrastel')->nullable();
            $table->string('pupilal')->nullable();
            $table->string('tipo_schl')->nullable();
            $table->string('apll')->nullable();
            $table->string('tonometríal')->nullable();
            $table->string('l_intraocularesl')->nullable();
            $table->string('biomicroscopíal')->nullable();
            $table->string('test_colorl')->nullable();
            $table->string('t_estereopsisl')->nullable();
            $table->string('resultadol')->nullable();
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
        Schema::dropIfExists('previous_segmentslefts');
    }
}
