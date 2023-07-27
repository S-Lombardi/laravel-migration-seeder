<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importo il pacchetto Faker
use Faker\Generator as Faker;
//importo il db da Models
use App\Models\Train;

//importo libreria Faker
use Faker\Provider\en_US\Address;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i=0; $i<4; $i++){
            $train = new Train ();
            $train->azienda = $faker->word();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->numberBetween(5, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_partenza = $faker->date();

            $train->save();
          
        }

    }
}
