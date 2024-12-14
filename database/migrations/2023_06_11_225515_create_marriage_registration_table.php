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
		Schema::create('marriage_registration', function (Blueprint $table) {
			$table->id('RegistrationNo');
			$table->string('Registration_Type');
			$table->string('Registration_Date');
			$table->string('Registration_Status');
			$table->foreignId('Applicant_ID')->references('Applicant_ID')->on('applicant_info');
			$table->foreignId('User_ID')->references('id')->on('users');
			$table->foreignId('Approval_ID')->references('Approval_ID')->on('marriage_approval');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('marriage_registration');
	}
};
