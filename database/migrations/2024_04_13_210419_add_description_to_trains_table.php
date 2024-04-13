<?php

 /*NB: per creare questo file usiamo il commando 
  "php artisan make:migration add_description_to_trains_table"
  dove "description" è il nome di questo file e "trains" è il nome 
  della tabella che abbiamo aggiunto nel nostro database. 

  In questo file possiamo solo aportare le modifiche alle colonne della nostra tabella 
  che abbiamo precedentemente popolato nell'altro file
  */

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
        Schema::table('trains', function (Blueprint $table) {
            //supponiamo che voglio aggiungere un'altra colonna alla mia tabella
            //la posso aggiungere da qui se voglio ma devo per forza mettere nella funzione 
            //"down" l'anullamento di questa cosa.. una volta aggiunto tutto faccio un push nel database
            //con "php artisan migrate" e se in futuro voglio tornare indietro di questa soecifica modifica
            //devo farlo con 

           // $table->string('Nome Capotreno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //dove faccio il contrario di quello che ho fatto sopra

           // $table->dropColumn('Nome Capotreno');
        });
    }
};
