<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importo il pacchetto Faker
use Faker\Generator as Faker;
//importo il db da Models
use App\Models\Passeggeri;


class PasseggeriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<4; $i++){
            $passeggero = new Passeggeri ();
            $passeggero->nome = $faker->firstName();
            $passeggero->cognome =$faker->lastName();
            $passeggero->email = $faker->email();
            $passeggero->numero_telefono = $faker->phoneNumber();
            $passeggero->codice_biglietto =$faker->regexify('[A-Z]{5}[0-4]{3}');
            $passeggero->posto_a_sedere =$faker->bothify('#?');
            $passeggero->classe = $faker->boolean();
            $passeggero->tariffa_ridotta =$faker->boolean();

            $passeggero->save();
        }
    }
}
