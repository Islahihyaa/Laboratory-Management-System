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
        Schema::create('inventori_ruangan_lab', function (Blueprint $table) {
            $table->id('id_inventory_room', 255);
            $table->integer('projector');
            $table->integer('projector_screen');
            $table->integer('computer');
            $table->integer('room_capacity');
            $table->unsignedBigInteger('id_ruangan');
            $table->foreign('id_ruangan')->references('id_ruangan')->on('ruangan_lab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventori_ruangan_lab');
    }
};
