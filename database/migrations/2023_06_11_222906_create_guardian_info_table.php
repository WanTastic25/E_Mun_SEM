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
		Schema::create('guardian_info', function (Blueprint $table) {
			$table->id('Guardian_IC');
			$table->string('Guardian_Name');
			$table->string('Guardian_Address');
			$table->string('Guardian_DOB');
			$table->integer('Guardian_Age');
			$table->integer('Guardian_PhoneNo');
			$table->string('Guardian_Relationship');
			$table->string('Guardian_MarriageInfo');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('guardian_info');
	}
};
