<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Tanggal ujian
            $table->string('waktu'); // Format: "08:00 - 10:00"
            $table->string('mata_kuliah');
            $table->string('ruangan');
            $table->json('pengawas')->nullable(); // Disimpan dalam array JSON
            $table->unsignedTinyInteger('jumlah_pengawas')->default(0); // Target jumlah pengawas
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
