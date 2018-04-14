<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRightEyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('right_eyes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('external_examination')->nullable();
            $table->string('rx_en_uso_m')->nullable();
            $table->string('rx_en_uso_lc')->nullable();
            $table->string('av_sin_rx_lej')->nullable();
            $table->string('av_con_rx_m_lej')->nullable();
            $table->string('av_sin_rx_cerca')->nullable();
            $table->string('av_con_rx_m_cerca')->nullable();
            $table->string('queratometría')->nullable();
            $table->string('refracción')->nullable();
            $table->string('sub_s_ciclopejia')->nullable();
            $table->string('ref_c_ciclopejia')->nullable();
            $table->string('sub_c_ciclopejia')->nullable();
            $table->string('rx_final')->nullable();
            $table->string('avfl')->nullable();
            $table->string('add')->nullable();
            $table->string('avfp')->nullable();

            $table->string('esfera')->nullable();
            $table->string('cilindro')->nullable();
            $table->string('eje')->nullable();
            $table->string('adicion')->nullable();
            $table->string('prisma_base')->nullable();
            $table->string('grados')->nullable();
            
            $table->integer('refractive_id')->unsigned()->unique();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('refractive_id')->references('id')->on('refractives')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('previus_segment_id')->unsigned()->unique();
            $table->foreign('previus_segment_id')->references('id')->on('previous_segments')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('observation_id')->unsigned()->unique();
            $table->foreign('observation_id')->references('id')->on('observations')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('right_eyes');
    }
}
