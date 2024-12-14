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
        Schema::create('partner_info', function (Blueprint $table) {
					$table->id('Partner_IC');
					$table->string('Partner_DOB');
					$table->string('Partner_Age');
					$table->string('Partner_Citizenship');
					$table->string('Partner_Address');
					$table->string('Partner_EduLevel');
					$table->string('Partner_EmpInfo');
					$table->string('Partner_Income');
					$table->string('Partner_MaritalStatus');
					$table->string('Partner_MualafStatus');
					$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_info');
    }
};
