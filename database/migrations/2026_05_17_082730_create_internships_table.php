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
        Schema::create('internships', function (Blueprint $table) {
            $table->id('id_intern');
            $table->unsignedBigInteger('id_user');
            $table->string('perusahaan');
            $table->string('posisi');
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
