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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable(); // Nullable in case it's optional
            $table->string('email')->unique(); // Unique to prevent duplicate emails
            $table->text('address')->nullable(); // 'text' for longer addresses, nullable
            $table->string('position')->nullable();

            // For salary, 'decimal' is best for monetary values
            // 10 total digits, 2 after the decimal point (e.g., 12345678.99)
            $table->decimal('salary', 10, 2)->nullable();

            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
