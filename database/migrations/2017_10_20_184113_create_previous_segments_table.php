<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_segments', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('previous_segments')->nullable();
            $table->string('parpado')->nullable();
            $table->string('vías_lagrimales')->nullable();
            $table->string('sensib_contraste')->nullable();
            $table->string('pupila')->nullable();
            $table->string('tipo_sch')->nullable();
            $table->string('apl')->nullable();
            $table->string('tonometría')->nullable();
            $table->string('l_intraoculares')->nullable();
            $table->string('biomicroscopía')->nullable();
            $table->string('test_color')->nullable();
            $table->string('t_estereopsis')->nullable();
            $table->string('resultado')->nullable();
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
        Schema::dropIfExists('previous_segments');
    }
}
