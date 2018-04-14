<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRearSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rear_segments', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('conducta')->nullable();
            
            $table->integer('principal_diagnostic_id')->unsigned();
            $table->foreign('principal_diagnostic_id')->references('id')->on('principal_diagnostics')->onDelete('cascade')->onUpdate('cascade');
            $table->text('diagnóstico_rela')->nullable();
           
            $table->date('ultimo_ontrol')->nullable();
            $table->date('próximo_control')->nullable();
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
        Schema::dropIfExists('rear_segments');
    }
}
