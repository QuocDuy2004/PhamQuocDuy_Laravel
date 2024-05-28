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
        Schema::create('pqd_contact', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name', 255)->notNullable(); 
            $table->string('email', 255)->notNullable(); 
            $table->string('phone', 255)->notNullable(); 
            $table->string('title', 255)->notNullable(); 
            $table->mediumText('content')->notNullable(); 
            $table->mediumText('address')->notNullable(); 
            $table->unsignedInteger('reply_id')->default(0); 
            $table->timestamp('created_at')->notNullable(); 
            $table->timestamp('updated_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqd_contact');
    }
};
