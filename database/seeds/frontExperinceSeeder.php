<?php

use App\models\front\SiteExperince;
use Illuminate\Database\Seeder;

class frontExperinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteExperince::create([
        'title'=>'٢٠ سنة من الخبرة',
        'description'=>'تعرف علي خبراتنا في مجال عملنا',
        'reowrd'=>'جوائز',
        'reowrd_number'=>'300',
        'parent'=>'آباء سعداء',
        'parent_number'=>'535',
        'child'=>'طفل ناجح',
        'child_number'=>'351',
        'teacher'=>'معلمين معتمدين',
        'teacher_number'=>'18'
        ]);
    }
}
