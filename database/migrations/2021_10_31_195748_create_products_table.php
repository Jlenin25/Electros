<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre')->unique();
            $table->string('imagen')->nullable();
            $table->decimal('preciocosto',12,2);
            $table->integer('stock')->default(0);
            $table->text('descripcion');
            $table->foreignId('id_provider')
                  ->nullable()
                  ->constrained('providers')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('fabricante');
            $table->foreignId('id_categoria')
                  ->nullable()
                  ->constrained('categorias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->decimal('precioventa',12,2);
            $table->enum('estado',['activo', 'inactivo'])->default('activo');
            $table->enum('proserv',['producto', 'servicio'])->default('producto');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
}