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
        Schema::create('pqd_user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNullable();
            $table->string('email', 255)->notNullable();
            $table->string('phone', 255)->notNullable();
            $table->string('username', 255)->notNullable();
            $table->string('password', 255)->notNullable();
            $table->string('address', 255)->notNullable();
            $table->string('image', 255)->notNullable();
            $table->string('roles', 50)->default('customer');
            $table->timestamps();
            $table->unsignedInteger('created_by')->notNullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqd_user');
    }
};
