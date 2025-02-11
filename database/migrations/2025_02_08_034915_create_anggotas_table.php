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
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('divisi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('npm')->unique();
            $table->string('photo');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('github');
            $table->string('twitterx');
            // Foreign Key
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('divisi_id');
            $table->unsignedBigInteger('prodi_id');

            // Relasi ke tabel lain
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
            $table->foreign('divisi_id')->references('id')->on('divisi')->onDelete('cascade');
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('jabatan');
        Schema::dropIfExists('prodi');
        Schema::dropIfExists('divisi');
    }
};
