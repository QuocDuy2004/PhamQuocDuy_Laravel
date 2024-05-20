<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pqd_orderdetails', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('order_id')->notNullable(); 
            $table->unsignedBigInteger('product_id')->notNullable();
            $table->float('price')->notNullable(); 
            $table->unsignedInteger('qty')->notNullable(); 
            $table->float('amount')->notNullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqd_orderdetails');
    }
};
