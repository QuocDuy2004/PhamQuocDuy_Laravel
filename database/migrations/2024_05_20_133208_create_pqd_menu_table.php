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
        Schema::create('pqd_menu', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1000)->notNullable(); 
            $table->string('link', 1000)->notNullable(); 
            $table->unsignedInteger('table_id')->nullable(); 
            $table->string('type', 255)->notNullable(); 
            $table->timestamp('created_at')->useCurrent(); 
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
        Schema::dropIfExists('pqd_menu');
    }
};
