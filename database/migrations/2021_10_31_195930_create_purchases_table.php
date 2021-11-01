<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')
                  ->nullable()
                  ->constrained('clients')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_user')
                  ->nullable()
                  ->constrained('users')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_expire')
                  ->nullable()
                  ->constrained('expires')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_money')
                  ->nullable()
                  ->constrained('moneys')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_delivery')
                  ->nullable()
                  ->constrained('deliverys')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_waytopay')
                  ->nullable()
                  ->constrained('waytopays')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_statepurchase')
                  ->nullable()
                  ->constrained('statepurchases')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_footer')
                  ->nullable()
                  ->constrained('footers')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_condition')
                  ->nullable()
                  ->constrained('conditions')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->timestamps();
            $table->dateTime('venta_fecha');
            $table->enum('estado',['valido','cancelado'])->default('valido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
