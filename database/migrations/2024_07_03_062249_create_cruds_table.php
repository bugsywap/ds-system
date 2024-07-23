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
        Schema::create('all_patient', function (Blueprint $table) {
            $table->string('patient_name');
            $table->string('age');
            $table->text('phone');
            $table->string('doctor');
            $table->json('service');
            $table->timestamps();
        });
        Schema::create('new_patient', function (Blueprint $table) {
            $table->string('patient_name');
            $table->string('age');
            $table->text('phone');
            $table->string('doctor');
            $table->json('service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruds');
    }
};
