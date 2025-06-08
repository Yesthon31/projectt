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
    Schema::create('experiences', function (Blueprint $table) {
        $table->id();
        $table->string('title');        // contoh: Backend Developer Intern
        $table->string('company');      // contoh: PT. Teknologi Maju
        $table->string('start_year');   // contoh: 2022
        $table->string('end_year');     // contoh: 2023
        $table->text('description');    // deskripsi singkat
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
