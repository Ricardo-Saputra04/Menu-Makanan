<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('sarapan');
            $table->string('makan_siang');
            $table->string('makan_malam');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('makanan');
    }
};