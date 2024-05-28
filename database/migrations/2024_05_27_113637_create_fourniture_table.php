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
        Schema::create('fourniture', function (Blueprint $table) {
            $table->id('id_fourniture');
            $table->string('nom_fourniture', 50);
            $table->string('type_fourniture', 20);
            $table->text('description_fourniture');
            $table->string('image_fourniture', 30);
            $table->decimal('prix_fourniture', 5,2);
            $table->string('marque_fourniture', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fourniture');
    }
};
