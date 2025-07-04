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
       Schema::create('pakets', function (Blueprint $table) {
        $table->id();
        $table->string('nama_paket');
        $table->foreignId('rumahsakit_id')->constrained('rumah_sakits')->onDelete('cascade');
        $table->decimal('harga', 12, 2);
        $table->text('deskripsi')->nullable();
        $table->string('gambar')->nullable();
        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
