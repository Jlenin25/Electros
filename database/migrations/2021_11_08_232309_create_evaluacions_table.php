<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
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
            $table->enum('estado',['aprobado','desaprobado'])->default('aprobado');
            $table->foreignId('id_deliverie')
                  ->nullable()
                  ->constrained('deliveries')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->dateTime('creado');
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
        Schema::dropIfExists('evaluacions');
    }
}
