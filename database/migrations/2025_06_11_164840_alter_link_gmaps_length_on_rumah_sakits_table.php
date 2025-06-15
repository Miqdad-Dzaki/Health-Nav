<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('rumah_sakits', function (Blueprint $table) {
            $table->text('link_gmaps')->change(); // Ubah dari VARCHAR ke TEXT
        });
    }

    public function down(): void
    {
        Schema::table('rumah_sakits', function (Blueprint $table) {
            $table->string('link_gmaps', 255)->change(); // Kembalikan ke semula jika dibatalkan
        });
    }
};

