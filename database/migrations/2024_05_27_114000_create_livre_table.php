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
        Schema::create('livre', function (Blueprint $table) {
            $table->id('id_livre');
            $table->string('nom_livre', 50);
            $table->string('type_livre', 10);
            $table->text('description_livre');
            $table->string('image_livre', 30);
            $table->decimal('prix_livre', 5, 2);
            $table->string('edition', 10);
            $table->string('matiere', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livre');
    }
};
