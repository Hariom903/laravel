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
        Schema::create('salaries', function (Blueprint $table) {
             $table->id();
             $table->decimal('salary'); // Column for salary amount (changed to 'salary')
             $table->unsignedBigInteger('user_id'); // Foreign key column for user_id
             $table->timestamps();
                 $table->foreign('user_id')
                  ->references('id') // Reference to the 'id' column in the users table
                  ->on('users') // The table name
                  ->onDelete('cascade'); // Optional: Delete salaries if the associated user is deleted
        });
   

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
