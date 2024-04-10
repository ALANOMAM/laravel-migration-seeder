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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // qui dovremmo scrivere tutto il codice che ci permette di "tornare indietro nel tempo" a prima che questa migration fosse eseguita
        // questa funzione (sempre inserita di default grazie a laravel) elimina la tabella
        Schema::dropIfExists('trains');
      
        

    }
};


