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
        Schema::create('jos_job_order_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_order_statement_id')->constrained('job_order_statements')->onDelete('cascade');
            $table->foreignId('job_order_id')->constrained('job_orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jos_job_order_links');
    }
};
