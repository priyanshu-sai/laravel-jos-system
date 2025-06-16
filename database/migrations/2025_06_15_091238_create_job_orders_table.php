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
        Schema::create('job_orders', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->date('date');
            $table->date('jos_date');
            $table->foreignId('type_of_work_id')->constrained('type_of_works')->onDelete('cascade');
            $table->foreignId('contractor_id')->constrained('contractors')->onDelete('cascade');
            $table->foreignId('conductor_id')->constrained('conductors')->onDelete('cascade');
            $table->decimal('actual_work_completed', 10, 2);
            $table->text('remarks')->nullable();
            $table->string('reference_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};
