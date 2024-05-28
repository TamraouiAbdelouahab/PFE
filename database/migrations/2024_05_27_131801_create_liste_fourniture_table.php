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
        Schema::create('liste_fourniture', function (Blueprint $table) {
            $table->unsignedBigInteger('id_listescolaire');
            $table->unsignedBigInteger('id_fourniture');
            $table->integer('quantite_fourniture');
            $table->primary(['id_listescolaire', 'id_fourniture']);
            $table->foreign('id_listescolaire')->references('id_listescolaire')->on('liste_scolaire');
            $table->foreign('id_fourniture')->references('id_fourniture')->on('fourniture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liste_fourniture');
    }
};
