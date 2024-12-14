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
		Schema::create('courses', function (Blueprint $table) {
			$table->bigIncrements('Course_ID');
			$table->string('Course_Organization')->nullable();
			$table->string('Course_Venue')->nullable();
			$table->string('Course_Address')->nullable();
			$table->string('Course_District')->nullable();
			$table->string('Course_DateStart')->nullable();
			$table->string('Course_DateEnd')->nullable();
			$table->string('Course_TimeStart')->nullable();
			$table->string('Course_TimeEnd')->nullable();
			$table->string('Course_Public')->nullable();
			$table->string('Course_Slot')->nullable();
			$table->string('Course_Siri')->nullable();
			$table->integer('Course_Capacity')->nullable();
			$table->string('Course_Staff')->nullable();
			$table->string('Course_StaffNo')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('courses');
	}
};
