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
        Schema::create('pqd_banner', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1000)->notNullable();
            $table->string('link', 1000)->notNullable();
            $table->unsignedInteger('sort_order')->default(1);
            $table->string('position', 50)->notNullable();
            $table->string('description', 255)->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqd_banner');
    }
};
