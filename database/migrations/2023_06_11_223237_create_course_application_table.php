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
		Schema::create('course_application', function (Blueprint $table) {
			$table->id('Course_ApplicationID');
			$table->string('Course_CertNo')->nullable();
			$table->string('Course_ApplyDate')->nullable();
			$table->foreignId('Course_ID')->references('Course_ID')->on('courses');
			$table->foreignId('Applicant_ID')->references('Applicant_ID')->on('applicant_info');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('course_application');
	}
};
