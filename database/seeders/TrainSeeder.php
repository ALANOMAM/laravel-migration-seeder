<?php
 /*Questo file l'ho creato da terminale usando 
 "php artisan make:seeder TrainSeeder"

 NB: è in qeusto file che si popolano le righe delle tabelle */
namespace Database\Seeders;

use App\Models\Train; //questo si carica automativcamente quando scrivo "new Train()" sotto
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//devo inserire questo percorso per usare i fakers 
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker /*devo anche inserire questo */): void
    {

        for($i = 0; $i < 10; $i++) {
        //creo un nuovo oggetto che conterrà le info delle mie nuove righe
        $newTrain = new Train();

        // riempio le mie righe con dei fakers per categoria, rispettando il tipo di doto di ogni collonna.
        $newTrain->Azienda = $faker->company() ;
        $newTrain->Stazione_di_partenza = $faker->city();
        $newTrain->Stazione_di_arrivo = $faker->city();
        $newTrain->Orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
        $newTrain->Orario_di_arrivo = $faker->dateTimeBetween('+2 week', '+3 week');
        $newTrain->Codice_Treno =  $faker->unique()->randomNumber(6, true);
        $newTrain->Numero_Carrozze = $faker->numberBetween(1, 10);
        $newTrain->In_orario = $faker->boolean();
        $newTrain->Cancellato = $faker->boolean();

        //questo ci serve per salvare i campi e applicare e modifiche
        $newTrain->save();
        }
    }
}


