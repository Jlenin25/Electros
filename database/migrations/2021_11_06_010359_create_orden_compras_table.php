<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->foreignId('id_client')
                  ->nullable()
                  ->constrained('clients')
                  ->cascadeOnUpdate()
                  ->nullable();
            $table->text('descripcion');
            $table->string('archivo');
            $table->foreignId('id_purchase')
                  ->nullable()
                  ->constrained('purchases')
                  ->cascadeOnUpdate()
                  ->nullable();
            $table->foreignId('id_deliverie')
                  ->nullable()
                  ->constrained('deliveries')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
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
        Schema::dropIfExists('orden_compras');
    }
}
