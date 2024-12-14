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
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->string('User_IC')->unique()->index();
			$table->string('User_Name');
			$table->string('User_Gender');
			$table->string('Staff_ID')->unique()->index()->nullable();
			$table->string('User_Phone_Number');
			$table->tinyInteger('role')->default(0);
			$table->string('email')->unique()->index();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('users');
	}
};
