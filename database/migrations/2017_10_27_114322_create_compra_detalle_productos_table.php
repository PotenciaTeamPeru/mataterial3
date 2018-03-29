<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_detalle_productos', function (Blueprint $table) {
          
            $table->increments('id');
            $table->integer('registro_informacion_envio_id')->unsigned();
            $table->foreign('registro_informacion_envio_id')->references('id')->on('registro_informacion_envios');
            $table->integer('producto_tipo_unidad');
            $table->integer('producto_cantidad');
            $table->integer('producto_precio_id')->unsigned();
            $table->foreign('producto_precio_id')->references('id')->on('producto_precios');
            $table->decimal('producto_precio_compra', 10 ,2);
            $table->decimal('producto_precio_compra_total', 10 ,2);
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
        Schema::dropIfExists('compra_detalle_productos');
    }
}
