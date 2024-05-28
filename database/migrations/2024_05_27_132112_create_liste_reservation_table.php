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
        Schema::create('liste_reservation', function (Blueprint $table) {
            $table->unsignedBigInteger('id_listescolaire');
            $table->unsignedBigInteger('id_reservation');
            $table->integer('quantite');
            $table->primary(['id_listescolaire', 'id_reservation']);
            $table->foreign('id_listescolaire')->references('id_listescolaire')->on('liste_scolaire');
            $table->foreign('id_reservation')->references('id_reservation')->on('reservation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liste_reservation');
    }
};
