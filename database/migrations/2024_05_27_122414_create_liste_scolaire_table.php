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
        Schema::create('liste_scolaire', function (Blueprint $table) {
            $table->id('id_listescolaire');
            $table->BigInteger('id_niveau')->unsigned();
            $table->BigInteger('id_ecole')->unsigned();
            $table->foreign('id_niveau')->references('id_niveau')->on('niveau');
            $table->foreign('id_ecole')->references('id_ecole')->on('ecole');
            $table->unique(['id_niveau', 'id_ecole']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liste_scolaire');
    }
};
