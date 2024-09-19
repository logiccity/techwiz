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
        Schema::create('interiordesighners', function (Blueprint $table) {
            $table->desighner_id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('contactnumber');
            $table->string('address');
            $table->string('yearsofexperience');
            $table->string('specilaization');
            $table->string('portfolio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interiordesighners');
    }
};
