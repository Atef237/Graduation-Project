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
        Schema::create('donor_project', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->references('id')->on('donor')->cascadeOnDelete();
            $table->foreignId('project_id')->references('id')->on('project')->cascadeOnDelete();
            $table->double('amount');
            $table->enum('donation_method',['cache'])->default('cache');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor_project');
    }
};
