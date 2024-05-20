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
        Schema::create('pqd_brand', function (Blueprint $table) {
            $table->id(); 
            $table->string('name', 1000)->notNullable(); 
            $table->string('slug', 1000)->notNullable();
            $table->string('image', 1000)->nullable(); 
            $table->unsignedInteger('sort_order')->default(0); 
            $table->string('description', 255)->nullable(); 
            $table->timestamp('created_at')->notNullable(); 
            $table->unsignedInteger('created_by')->notNullable(); 
            $table->timestamp('updated_at')->nullable(); 
            $table->unsignedInteger('updated_by')->nullable(); 
            $table->unsignedTinyInteger('status')->default(2); 
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqd_brand');
    }
};
