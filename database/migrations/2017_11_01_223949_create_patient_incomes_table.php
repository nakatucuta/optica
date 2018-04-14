<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description_income');
            $table->string('companion');
            $table->bigInteger('companion_phone_number');
            $table->string('kinship');
            $table->string('responsible');
            $table->bigInteger('phone_responsible');
            $table->string('relationship_resposible');


             $table->integer('appointment_calendar_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('appointment_calendar_id')->references('id')->on('appointment_calendars')->onDelete('cascade')->onUpdate('cascade');

                $table->integer('service_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');

                $table->integer('service_order_id')->unsigned();//3.)asi indicas la relacion parecida a sql esta es de uno a uno
            $table->foreign('service_order_id')->references('id')->on('service_orders')->onDelete('cascade')->onUpdate('cascade');



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
        Schema::dropIfExists('patient_incomes');
    }
}
