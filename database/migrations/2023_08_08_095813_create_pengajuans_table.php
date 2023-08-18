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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('accept')->default(0);
            $table->string('lantai_id');
            $table->string('fotoktp_suami');
            $table->string('fotoktp_istri');
            $table->string('fotokk');
            $table->string('berkas_statusnikah');
            $table->string('surat_ket_rumah');
            $table->string('surat_ket_pendapatan');
            $table->string('surat_ket_kepolisian');
            $table->string('pasfoto_suami');
            $table->string('pasfoto_istri');
            $table->string('surat_permohonan');
            $table->string('surat_kesanggupan');
            $table->string('surat_pernyataan');
            $table->string('surat_rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
