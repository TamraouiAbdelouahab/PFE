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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('id_reservation');
            $table->bigInteger('id_client')->unsigned();
            $table->date('date_reservation');
            $table->string('description', 256)->nullable();
            $table->string('etat', 50);
            $table->foreign('id_client')->references('id_client')->on('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
