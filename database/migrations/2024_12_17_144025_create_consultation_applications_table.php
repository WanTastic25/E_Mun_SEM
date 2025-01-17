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
        Schema::create('consultation_applications', function (Blueprint $table) {
            $table->id();
            $table->string('wife_name');
            $table->string('wife_ic');
            $table->string('registration_no');
            $table->date('application_date');
            $table->string('status');
            $table->text('remarks');
            $table->text('complaint_detail')->nullable();
            $table->timestamps('created_at');       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_applications');
    }
};
