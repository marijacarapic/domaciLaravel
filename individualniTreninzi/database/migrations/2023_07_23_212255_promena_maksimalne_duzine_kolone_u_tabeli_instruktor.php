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
        Schema::table('instruktori', function (Blueprint $table) {
            $table ->string('imePrezime', 35)->change();
            $table ->string('grad', 30)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instruktori', function (Blueprint $table) {
            $table ->string('imePrezime', 30)->change();
            $table ->string('grad', 25)->change();
        });
    }
};
