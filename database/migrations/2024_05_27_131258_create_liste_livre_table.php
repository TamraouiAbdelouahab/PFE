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
        Schema::create('liste_livre', function (Blueprint $table) {
            $table->unsignedBigInteger('id_livre');
            $table->unsignedBigInteger('id_listescolaire');
            $table->primary(['id_livre', 'id_listescolaire']);
            $table->foreign('id_livre')->references('id_livre')->on('livre');
            $table->foreign('id_listescolaire')->references('id_listescolaire')->on('liste_scolaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liste_livre');
    }
};
