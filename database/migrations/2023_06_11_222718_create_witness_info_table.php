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
		Schema::create('witness_info', function (Blueprint $table) {
			$table->id('Witness_IC');
			$table->string('Witness_Name');
			$table->string('Witnes_Address');
			$table->string('Witness_PhoneNo');
			$table->string('Witness_MarriageCategory');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('witness_info');
	}
};
