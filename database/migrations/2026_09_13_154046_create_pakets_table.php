<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pakets', function (Blueprint $table) {

        $table->id();

        $table->string('nama_paket');

        $table->string('gambar')
              ->nullable();

        $table->string('lokasi');

        $table->enum('kategori', [
            'Pemula',
            'Adventure',
            'Extreme'
        ]);

        $table->string('durasi');

        $table->integer('kapasitas');

        $table->integer('harga');

        $table->text('deskripsi')
              ->nullable();


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
