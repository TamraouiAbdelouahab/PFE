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
        Schema::create('cahier', function (Blueprint $table) {
            $table->id('id_cahier');
            $table->string('type_cahier', 6);
            $table->string('description_cahier', 256);
            $table->string('image_cahier', 30);
            $table->string('dimension_cahier', 10);
            $table->string('carreaux_cahier', 20);
            $table->integer('page');
            $table->string('marque_cahier', 20);
            $table->string('sperale', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cahier');
    }
};
