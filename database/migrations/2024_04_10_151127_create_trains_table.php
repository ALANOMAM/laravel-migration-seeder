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

     // aggiungiamo la colonna per il titolo del film
              $table->string('Azienda', 200);
            /*$table->string('Stazione di partenza ', 200);
             $table->string('Stazione di arrivo', 200);
             $table->timestamp('Orario di partenza');
             $table->timestamp('Orario di arrivo');
             $table->mediumInteger('Codice Treno');
             $table->smallInteger('Numero Carrozze');
             $table->boolean('In orario')->nullable();
             $table->boolean('Cancellato')->nullable();*/

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');

         /*
        Schema::dropIfExists('trains',function (Blueprint $table){

        // rimuovere la colonna dalla tabella
             $table->dropColumn('Azienda');
             $table->dropColumn('Stazione di partenza');
             $table->dropColumn('Stazione di arrivo');
             $table->dropColumn('Orario di partenza');
             $table->dropColumn('Orario di arrivo');
             $table->dropColumn('Codice Treno');
             $table->dropColumn('Numero Carrozze');
             $table->dropColumn('In orario');
             $table->dropColumn('Cancellato');

        }); */
    }
};


