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
        Schema::create('pqd_order', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedInteger('user_id')->notNullable(); 
            $table->string('name', 255)->notNullable();
            $table->string('phone', 255)->notNullable(); 
            $table->string('email', 255)->notNullable(); 
            $table->string('address', 255)->notNullable(); 
            $table->string('note', 255)->nullable(); 
            $table->timestamp('created_at')->notNullable(); 
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
        Schema::dropIfExists('pqd_order');
    }
};
