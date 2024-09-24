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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the subject
            $table->string('code')->unique(); // Unique subject code
            $table->text('description')->nullable(); // Optional description
            $table->integer('credits')->nullable(); // Optional credits
            $table->unsignedBigInteger('lecturer_id'); // Foreign key to lecturers
            $table->timestamps(); // Automatically adds 'created_at' and 'updated_at'

            // Set foreign key constraint
            $table->foreign('lecturer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
