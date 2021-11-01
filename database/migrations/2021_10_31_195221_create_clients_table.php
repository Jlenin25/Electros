<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('ruc')->unique();
            $table->string('direccion')->nullable();
            $table->string('celular1')->unique();
            $table->string('email1')->unique()->nullable();
            $table->string('paginaweb')->unique();
            $table->foreignId('id_stateclient')
                  ->nullable()
                  ->constrained('stateclients')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('razonsocial')->nullable();
            $table->string('contacto')->unique();
            $table->integer('celular2')->nullable()->unique();
            $table->string('email2')->nullable()->unique();
            $table->foreignId('id_area')
                  ->nullable()
                  ->constrained('areas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_user')
                  ->nullable()
                  ->constrained('users')
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
        Schema::dropIfExists('clients');
    }
}
