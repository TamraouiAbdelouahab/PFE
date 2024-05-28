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
        Schema::create('liste_cahier', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cahier');
            $table->unsignedBigInteger('id_listescolaire');
            $table->integer('quantite_cahier');
            $table->primary(['id_cahier', 'id_listescolaire']);
            $table->foreign('id_cahier')->references('id_cahier')->on('cahier');
            $table->foreign('id_listescolaire')->references('id_listescolaire')->on('liste_scolaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liste_cahier');
    }
};
