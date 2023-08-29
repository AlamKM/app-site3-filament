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
        Schema::create('parameterqcs', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('parameter');
            $table->string('unit');
            $table->string('method');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameterqcs');
    }
};
