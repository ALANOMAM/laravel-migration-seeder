<?php
/* E in questo file che popolo le colonne della mia tabella */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   /*
         "Schema" è la facade(classi di laravel che ci forniscono strumenti già pronti )
         "Schema" ci serve per creare, modificare e eliminare delle tabelle nel nostro db
        */ 
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
           // aggiungiamo le colonne della nostra tabella trains 
                 $table->string('Azienda');  
               $table->string('Stazione_di_partenza');
             $table->string('Stazione_di_arrivo');
              $table->time('Orario_di_partenza');
             $table->time('Orario_di_arrivo');
             $table->mediumInteger('Codice_Treno');
             $table->smallInteger('Numero_Carrozze');
             $table->boolean('In_orario')->nullable();
             $table->boolean('Cancellato')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        // questa funzione (sempre inserita di default grazie a laravel) ci permette di tornare indietro
        //nelle modifiche fatte alla nostra tabella.
        Schema::dropIfExists('trains');
      
    }
};





