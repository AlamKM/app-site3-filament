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
        Schema::create('qc_fpa_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->unsignedBigInteger('qcfpa_id')->nullable();
            $table->string('no_fpa')->nullable();
            $table->string('item')->nullable();
            $table->string('parameter')->nullable();
            $table->string('std_parameter')->nullable();
            $table->string('unit')->nullable();
            $table->string('hasil_analisa')->nullable();
            $table->string('method')->nullable();
            $table->string('status_analisa')->nullable();
            $table->string('qc_analis')->nullable();
            $table->date('tgl_analisa')->nullable();
            $table->date('tgl_input')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qc_fpa_details');
    }
};
