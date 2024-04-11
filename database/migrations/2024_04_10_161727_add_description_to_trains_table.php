<?php
  /*NB: per creare questo file usiamo il commando 
  "php artisan make:migration add_description_to_trains_table"
  dove "description" è il nome di questo file e "trains" è il nome 
  della tabella che abbiamo aggiunto nel nostro database. 

  è a partire da quetso file che aggiungeremo le colonne delle nostre tabelle
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
             // aggiungiamo le colonne della nostra tabella trains 
                 $table->string('Azienda', 200);  
            $table->string('Stazione di partenza', 200);
             $table->string('Stazione di arrivo', 200);
              $table->time('Orario di partenza');
             $table->time('Orario di arrivo');
             $table->mediumInteger('Codice Treno');
             $table->smallInteger('Numero Carrozze');
             $table->boolean('In orario')->nullable();
             $table->boolean('Cancellato')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
        // rimuovere la colonna dalla tabella
    {   //serve anche questa parte quando aggiungiamo le colonne, ci permetterenno di fare
        // rollabck e refresh
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('Azienda');
         $table->dropColumn('Stazione di partenza');
         $table->dropColumn('Stazione di arrivo');
         $table->dropColumn('Orario di partenza');
        $table->dropColumn('Orario di arrivo');
        $table->dropColumn('Codice Treno');
        $table->dropColumn('Numero Carrozze');
        $table->dropColumn('In orario');
        $table->dropColumn('Cancellato');
         
        });
    }
};
