<?php

use App\models\Group;
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
        $phaseYears =   $phase->PhaseYear()->SaveMany([
           new \App\models\PhaseYear(['yearsCount'=> 1]),
           new \App\models\PhaseYear(['yearsCount'=> 2]),
           new \App\models\PhaseYear(['yearsCount'=> 3])
        ]);

        foreach ($phaseYears as $phaseYear)
        {
            $phaseYear->Groups()->save(new Group(['name' =>'A' . $phaseYear->yearsCount, 'student_counter' => 30]));
        }
    }
}
