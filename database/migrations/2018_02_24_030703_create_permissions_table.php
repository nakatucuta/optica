<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insert_n');
            $table->integer('editar_natural');
            $table->integer('eliminar_natural');

            $table->integer('insertar_afiliacion');
            $table->integer('editar_afiliacion');
            $table->integer('eliminar_afiliacion');

            $table->integer('insertar_citas');
            $table->integer('editar_citas');
            $table->integer('eliminar_citas');

            $table->integer('insertar_ingreso');
            $table->integer('editar_ingreso');
            $table->integer('eliminar_ingreso');

            $table->integer('insertar_autorizacion');
            $table->integer('editar_autorizacion');
            $table->integer('eliminar_autorizacion');


            $table->integer('insertar_historialc');
            $table->integer('editar_historialc');
            $table->integer('eliminar_historialc');
           
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


            /*$table->integer('permission_serventity')->unsigned()->unique();
            $table->foreign('permission_serventity')->references('id')->on('permission_serventities')->onDelete('cascade')->onUpdate('cascade');*/
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
        Schema::dropIfExists('permissions');
    }
}
