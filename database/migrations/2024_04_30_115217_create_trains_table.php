<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Azienda
     * Stazione di partenza
     * Stazione di arrivo
     * Orario di partenza
     * Orario di arrivo
     * Codice Treno
     * Numero Carrozze
     * In orario
     * Cancellato
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 20)->nullable();
            $table->string('stazione_di_partenza', 40);
            $table->string('stazione_di_arrivo', 40);
            $table->time('Orario_di_partenza', precision: 0);
            $table->time('Orario_di_arrivo', precision: 0);
            $table->integer('codice_treno')->unsigned();
            $table->integer('numero_carozza')->unsigned();
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
