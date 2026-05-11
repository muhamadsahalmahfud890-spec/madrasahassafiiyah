<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pmbm_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->string('full_name');
            $table->string('nik', 16)->unique();
            $table->date('birth_date');
            $table->string('birth_place');
            $table->enum('gender', ['L', 'P']);
            $table->string('parent_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('previous_school');
            $table->enum('status', ['pending', 'lolos', 'tidak_lolos'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pmbm_registrations');
    }
};
