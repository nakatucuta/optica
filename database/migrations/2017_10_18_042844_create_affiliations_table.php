<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('natural_person_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('natural_person_id')->references('id')->on('natural_people')->onDelete('cascade')->onUpdate('cascade');
 
             $table->integer('legal_entity_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('legal_entity_id')->references('id')->on('legal_entities')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('affiliations');
    }
}
