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
        Schema::create('commission', function (Blueprint $table) {
            $table->id();
              $table->unsignedBigInteger('salary_id');       // foreign key to salaries table
            $table->decimal('amount', 10, 2);              // commission amount
                    
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('salary_id')->references('id')->on('salaries')->onDelete('cascade');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commission');
    }
};
