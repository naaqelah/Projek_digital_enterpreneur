<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            $table->string('nama_customer');

            $table->string('lokasi');

            $table->string('paket');

            $table->integer('jumlah_orang');

            $table->integer('harga');

            $table->enum('status',[
                'pending',
                'selesai',
                'cancel'
            ]);

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }

};