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
            $table->json('jan')->nullable();
            $table->json('feb')->nullable();
            $table->json('mar')->nullable();
            $table->json('apr')->nullable();
            $table->json('mei')->nullable();
            $table->json('jun')->nullable();
            $table->json('jul')->nullable();
            $table->json('aug')->nullable();
            $table->json('sep')->nullable();
            $table->json('okt')->nullable();
            $table->json('nov')->nullable();
            $table->json('des')->nullable();
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
