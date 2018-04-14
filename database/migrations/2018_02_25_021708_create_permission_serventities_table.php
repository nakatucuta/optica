<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionServentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_serventities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insertar_entidades');
            $table->integer('editar_entidades');
            $table->integer('eliminar_entidades');


            $table->integer('insertar_servicios');
            $table->integer('editar_servicios');
            $table->integer('eliminar_servicios');
            $table->integer('tipo_producto');

            
            $table->integer('insertar_producto');
            $table->integer('editar_producto');
            $table->integer('eliminar_producto'); 


            $table->integer('insertar_devolucion');
            $table->integer('eliminar_devolucion');

            $table->integer('vender');
                

            $table->integer('insertar_factura');
            
            $table->integer('eliminar_factura');

            $table->integer('insertar_abonos');
            $table->integer('editar_abonos');
            $table->integer('eliminar_abonos');        

            $table->integer('permission_id')->unsigned()->unique();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('permission_serventities');
    }
}
