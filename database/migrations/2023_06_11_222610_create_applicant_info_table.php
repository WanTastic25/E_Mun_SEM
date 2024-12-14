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
			$table->foreignId('User_ID')->references('id')->on('users');
			$table->string('Applicant_DOB');
			$table->string('Applicant_Race');
			$table->string('Applicant_Citizenship');
			$table->string('Applicant_Address');
			$table->string('Applican_EduLevel');
			$table->string('Applicant_EmpInfo');
			$table->string('Applicant_Income');
			$table->string('Applicant_Marital');
			$table->string('Applicant_EduLevel');
			$table->string('Applicant_Mualaf');
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
