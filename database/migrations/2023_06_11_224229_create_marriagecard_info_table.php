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
		Schema::create('marriagecard_info', function (Blueprint $table) {
			$table->id('cardNo');
			$table->string('Card_Details');
			$table->string('Card_Date');
			$table->string('Card_Status');
			$table->foreignId('RegistrationNo');
			$table->foreignId('Partner_ID')->references('Partner_IC')->on('partner_info');
			$table->foreignId('Applicant_ID')->references('Applicant_ID')->on('applicant_info');
			$table->foreignId('Approval_ID');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('marriagecard_info');
	}
};
