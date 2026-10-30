
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prediksi_mikroklimat', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('nama_tanaman');
            $table->float('suhu_udara');
            $table->unsignedTinyInteger('kelembapan_udara');
            $table->unsignedTinyInteger('kelembapan_tanah');
            $table->string('status_mikroklimat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prediksi_mikroklimat');
    }
};
