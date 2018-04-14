<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('natural_people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identification_description_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('identification_description_id')->references('id')->on('identification_descriptions')->onDelete('cascade')->onUpdate('cascade');
 
            $table->bigInteger('identification');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('surname');
            $table->string('second_surname');
            $table->date('date_of_birth');
            $table->bigInteger('phone_number');
            $table->string('occupation');
             $table->integer('genders_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('genders_id')->references('id')->on('genders')->onDelete('cascade')->onUpdate('cascade');

            $table->string('email');
            $table->string('address');
            $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('natural_people');
    }
}
