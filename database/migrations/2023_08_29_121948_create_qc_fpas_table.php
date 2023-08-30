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
        Schema::create('qc_fpas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->nullable();
            $table->string('no_fpa')->nullable();
            $table->string('item')->nullable();
            $table->string('status_item')->nullable();
            $table->string('create_by')->nullable();
            $table->string('qcanalis_by')->nullable();
            $table->string('status_fpa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qc_fpas');
    }
};
