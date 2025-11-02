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
        Schema::create('patients', function (Blueprint $table) {
            $table->id()->primary;
            $table->string('name');
            $table->string('lname');
            $table->string('sex');
            $table->integer('age');
            $table->string('category')->default('general');
            $table->integer('phone');
            $table->string('address');
            $table->timestamp('registeres_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
