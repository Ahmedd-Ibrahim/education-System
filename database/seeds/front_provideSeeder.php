<?php

use App\models\front\Provide;
use Illuminate\Database\Seeder;

class front_provideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provide::create([
            'class' => 'flaticon-teacher',
            'title' => 'معلمين مؤهلين',
            'description' => '   لدينا طاقم مميز من المعلمين ذوي الخبرة, والذين يمتلكون شهادات
            معتمدة في مجال التعليم و التدريس'
        ]);

        Provide::create([
            'class' => 'flaticon-reading',
            'title' => 'تعليم خاص',
            'description' => ' لدينا افضل اساليب التعليم الخاص التي يستطيع طفلك فهمها بسهولة'
        ]);


        Provide::create([
            'class' => 'flaticon-books',
            'title' => 'كتاب و مكتبة',
            'description' => 'توجد لدينا مكتبة مليئة بالكتب التي يحتاجها طفلك للعب و المعرفة
            التي تمكنه من تطوير مهاراته'
        ]);


        Provide::create([
            'class' => 'flaticon-diploma',
            'title' => 'شهادة معتمدة',
            'description' => '  منح طفلك شهادة معتمدة مقدمة من منظمة رشد التعليمية بحصوله علي
            الدرجة الاولي من التعلم الإيجابي'
        ]);

    }
}
