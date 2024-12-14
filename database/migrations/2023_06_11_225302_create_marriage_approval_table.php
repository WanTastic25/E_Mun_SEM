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
		Schema::create('marriage_approval', function (Blueprint $table) {
			$table->id('Approval_ID');
			$table->string('Approval_Status');
			$table->string('Approval_Date');
			$table->foreignId('User_IC')->references('id')->on('users');
			$table->foreignId('Partner_ID')->references('Partner_IC')->on('partner_info');
			$table->foreignId('Applicant_ID')->references('Applicant_ID')->on('applicant_info');
			$table->foreignId('Card_No')->references('cardNo')->on('marriagecard_info');
			$table->foreignId('RegistrationNo');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('marriage_approval');
	}
};
