<?php
 /*Questo file l'ho creato da terminale usando 
 "php artisan make:seeder TrainSeeder"

 NB: è in qeusto file che si popolano le righe delle tabelle */
namespace Database\Seeders;

use App\Models\Train; //questo si carica automativcamente quando scrivo "new Train()" sotto
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //creo un nuovo oggetto che conterrà le info delle mie nuove righe
        $newTrain = new Train();

        //popolo una riga della mia tabella rispettando il tipo di dato di ogni colonna.
        //ovviamente se metto tutto questo dentro un ciclo for con n iterazioni di darà n righe ripetute.
        //questo ciclo deve iniziare pero sopra la righa " $newTrain = new Train();" e finire sotto la righa "$newTrain->save();"
        $newTrain->Azienda = "TrainItalia";
        $newTrain->Stazione_di_partenza = "Bologna";
        $newTrain->Stazione_di_arrivo = "Milano";
        $newTrain->Orario_di_partenza = "9:00";
        $newTrain->Orario_di_arrivo = "10:00";
        $newTrain->Codice_Treno = 7536;
        $newTrain->Numero_Carrozze = 8;
        $newTrain->In_orario = false;
        $newTrain->Cancellato = false;

        //questo ci serve per salvare i campi e applicare e modifiche
        $newTrain->save();
    }
}


