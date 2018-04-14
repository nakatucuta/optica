<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->increments('id');
            
             $table->integer('patient_income_id')->unsigned()->unique();
            $table->foreign('patient_income_id')->references('id')->on('patient_incomes')->onDelete('cascade')->onUpdate('cascade');

             $table->integer('left_eye_id')->unsigned();
            $table->foreign('left_eye_id')->references('id')->on('left_eyes')->onDelete('cascade')->onUpdate('cascade');

             $table->integer('right_eye_id')->unsigned();
            $table->foreign('right_eye_id')->references('id')->on('right_eyes')->onDelete('cascade')->onUpdate('cascade');

           

            $table->integer('Rear_segment_id')->unsigned();
            $table->foreign('Rear_segment_id')->references('id')->on('rear_segments')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('Observation_id')->unsigned();
            $table->foreign('Observation_id')->references('id')->on('observations')->onDelete('cascade')->onUpdate('cascade');


            $table->integer('formula_id')->unsigned();
            $table->foreign('formula_id')->references('id')->on('formulas')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('diagnostics');
    }
}
