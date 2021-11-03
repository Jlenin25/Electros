<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration {
      public function up() {
            Schema::create('purchases', function (Blueprint $table) {
                  $table->id();
                  $table->string('codigo')->unique();
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
                  $table->foreignId('id_coin')
                        ->nullable()
                        ->constrained('coins')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
                  $table->foreignId('id_deliverie')
                        ->nullable()
                        ->constrained('deliveries')
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
                  $table->foreignId('id_product')
                        ->nullable()
                        ->constrained('products')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
                  $table->decimal('impuesto');
                  $table->decimal('total');
                  $table->timestamps();
            });
      }

      public function down() {
            Schema::dropIfExists('purchases');
      }
}
