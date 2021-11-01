<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_purchase')
                  ->nullable()
                  ->constrained('purchases')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_product')
                  ->nullable()
                  ->constrained('products')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->integer('cantidad');
            $table->decimal('precio',12,2);
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
        Schema::dropIfExists('purchase_details');
    }
}
