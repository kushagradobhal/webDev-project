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
        Schema::create('student_data', function (Blueprint $table) {
            $table ->integer('S_no');
            $table->id('student_id')->primary();
            $table->string('name');
            $table->string('Father_name')->nullable();
            $table->decimal('CGPA');
            $table->float('marks_of_10');
            $table->float('marks_of_12');
            $table->integer('Contact');
            $table->string('DOB')->nullable();
            $table->text('Course');
            $table->text('Branch')->nullable();
            $table->text('Batch');
            $table->text('Address');
            $table->string('Email')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_data');
    }
};
