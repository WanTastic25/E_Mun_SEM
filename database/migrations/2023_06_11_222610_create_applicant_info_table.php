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
        Schema::create('applicant_info', function (Blueprint $table) {
            $table->id('Applicant_ID');
            $table->foreignId('User_ID')->constrained('users')->onDelete('cascade'); // Ensure it references the 'users' table
            $table->date('Applicant_DOB');
            $table->string('Applicant_Race');
            $table->string('Applicant_Citizenship');
            $table->text('Applicant_Address');
            $table->string('Applicant_EduLevel');
            $table->string('Applicant_EmpInfo')->nullable(); // Employment info can be nullable
            $table->decimal('Applicant_Income', 10, 2)->nullable(); // Income as decimal
            $table->string('Applicant_Marital')->nullable();
            $table->boolean('Applicant_Mualaf')->default(false); // Boolean for "Mualaf" with default false
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_info');
    }
};
