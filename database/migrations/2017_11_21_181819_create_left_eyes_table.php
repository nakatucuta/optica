<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeftEyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('left_eyes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('external_examinationl')->nullable();
            $table->string('rx_en_uso_ml')->nullable();
            $table->string('rx_en_uso_lcl')->nullable();
            $table->string('av_sin_rx_lejl')->nullable();
            $table->string('av_con_rx_m_lejl')->nullable();
            $table->string('av_sin_rx_cercal')->nullable();
            $table->string('av_con_rx_m_cercal')->nullable();
            $table->string('queratometríal')->nullable();
            $table->string('refracciónl')->nullable();
            $table->string('sub_s_ciclopejial')->nullable();
            $table->string('ref_c_ciclopejial')->nullable();
            $table->string('sub_c_ciclopejial')->nullable();
            $table->string('rx_finall')->nullable();
            $table->string('avfll')->nullable();
            $table->string('addl')->nullable();
            $table->string('avfpl')->nullable();

             $table->string('esferal')->nullable();
            $table->string('cilindrol')->nullable();
            $table->string('ejel')->nullable();
            $table->string('adicionl')->nullable();
            $table->string('prisma_basel')->nullable();
            $table->string('gradosl')->nullable();


            $table->string('acal')->nullable();
            $table->string('cover_testl')->nullable();
            $table->string('ppcl')->nullable();
            $table->string('afcl')->nullable();
            $table->string('ojo_dtel')->nullable();
            $table->integer('refractive_id')->unsigned()->unique();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('refractive_id')->references('id')->on('refractive_lefteyes')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('previus_segmentleft_id')->unsigned()->unique();
            $table->foreign('previus_segmentleft_id')->references('id')->on('previous_segmentslefts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('left_eyes');
    }
}
