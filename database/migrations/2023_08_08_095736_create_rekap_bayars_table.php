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
        Schema::create('rekap_bayars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->date('maxbayar')->nullable();
            $table->enum('jan', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('feb', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('mar', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('apr', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('mei', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('jun', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('jul', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('aug', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('sep', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('okt', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('nov', ['Lunas', 'Belum'])->default('Belum');
            $table->enum('des', ['Lunas', 'Belum'])->default('Belum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_bayars');
    }
};
