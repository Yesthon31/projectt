<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
     public function up()
     {
         Schema::create('education', function (Blueprint $table) {
             $table->id();
             $table->string('school');
             $table->string('degree');        // contoh: S1 Teknik Informatika
             $table->string('start_year');    // contoh: 2019
             $table->string('end_year');      // contoh: 2023
             $table->timestamps();
         });
     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
