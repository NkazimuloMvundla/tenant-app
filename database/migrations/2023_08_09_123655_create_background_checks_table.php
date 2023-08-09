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
        Schema::create('background_checks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('credit_result')->nullable();
            $table->string('criminal_result')->nullable();
            // $table->string('employment_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('background_checks');
    }
};
