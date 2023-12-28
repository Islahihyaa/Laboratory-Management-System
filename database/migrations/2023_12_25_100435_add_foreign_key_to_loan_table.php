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
        Schema::table('loan', function (Blueprint $table) {
            $table->unsignedBigInteger('lab_id')->change();
            $table->foreign('lab_id')->references('id')->on('laboratory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan', function (Blueprint $table) {
            $table->dropForeign(['lab_id']);
        });
    }
};
