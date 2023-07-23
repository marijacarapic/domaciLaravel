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
        Schema::create('instruktori', function (Blueprint $table) {
            $table->id();
            $table->string('imePrezime',30);
            $table->string('grad',25);
            $table->integer('godiste');
            $table->string('specijalnost');
            $table->string('kontaktTelefon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instruktori');
    }
};
