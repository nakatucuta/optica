<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_entities', function (Blueprint $table) {
            $table->increments('id');
            $table->char('business_name',45);
            $table->char('nit',45);
            $table->char('adress',45);
            $table->char('social_object',45);
             $table->integer('Postal_Code');
             $table->string('email');
            $table->char('phone_number',45);
            $table->integer('entity_types_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('entity_types_id')->references('id')->on('entity_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('legal_entities');
    }
}
