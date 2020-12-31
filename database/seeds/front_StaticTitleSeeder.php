<?php

use App\models\front\StaticTitle;
use Illuminate\Database\Seeder;

class front_StaticTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticTitle::create([

            'welcome_title'=>'اهلا بك في منظمة رشد التعليمية',
            'welcome_desc'=>'رشد هي كيان طبي تعليمي ترفيهي تربوي، يساعد الأطفال علي ان يصبحوا جيل افضل',
            'welcome_provide_title'=>'ماذا نقدم في رشد',
            'welcome_provide_sub_title' => 'نقدم لك كل ما تتمني من راحة لك و لطفلك', // provide section

            'smoth_title' => 'تعليم طفلك بعض الأخلاق الحميدة',
            'somth_desc' => 'تحسين سلوك طفلك و تعليمه بعض الآداب و الأخلاق التي تساعده في ضبط النفس', //smoth section

            'professional_title' =>'معلمين معتمدين',

             'professional_sub_title'=>'لدينا طاقم عمل فريد من نوعه مدرب تدريب مكثف للتعامل مع طفلك بطريقة سلسة', // proof

            'subject_title' => 'المواد الدراسية',

            'subject_sub_title' =>'اليك نبذة عن المواد الجراسية الخاصة بمنظمة رشد التعليمية', // subject

            'experince_title'=> 'ما يقوله الآباء عنا'
        ]);
    }
}
