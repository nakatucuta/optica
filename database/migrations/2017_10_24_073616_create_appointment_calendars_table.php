<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->integer('state_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('affiliation_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('affiliation_id')->references('id')->on('affiliations')->onDelete('cascade')->onUpdate('cascade');
 
             $table->integer('user_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('appointment_calendars');
    }
}
