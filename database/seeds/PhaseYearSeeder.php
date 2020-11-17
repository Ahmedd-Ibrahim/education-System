<?php

use Illuminate\Database\Seeder;

class PhaseYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phase = \App\models\Phase::create([
            'name'=> 'Elementary stage for basic education',
        ]);

        // Append Years to this Phase
        $phase->PhaseYear()->SaveMany([
           new \App\models\PhaseYear(['yearsCount'=> 1]),
           new \App\models\PhaseYear(['yearsCount'=> 2]),
           new \App\models\PhaseYear(['yearsCount'=> 3])
        ]);
    }
}
