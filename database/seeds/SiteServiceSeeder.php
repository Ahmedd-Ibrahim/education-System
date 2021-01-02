<?php

use App\models\front\Service;
use Illuminate\Database\Seeder;

class SiteServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'class'=>'flaticon-security',
            'title'=>'السلامة اولا',
            'description'=>'لدينا فريق متخصص في المحافزة علي سلامة طفلك',
            ]);

        Service::create([
            'class'=>'flaticon-reading',

            'title'=>'فصول دراسية',
            'description'=>'نوفر الفصول الدراسية لطفلك لتعلم المزيد عن العالم و تنمية مهاراته',
            ]);

        Service::create([
            'class'=>'flaticon-diploma',

            'title'=>'معلمين معتمدين',
            'description'=>'نوفر طاقم تعليمي كامل مميز و مدرب علي اعلي مستويات التعليم
            التربوي لطفلك',
            ]);

        Service::create([
            'class'=>'flaticon-education',

            'title'=>'حديقة حيوان',
            'description'=>'توجد لدينا حديقة حيوان لزيادة المتعة لدي طفلك ولتعرفه علي عالم الحيوان',
            ]);

        
        Service::create([
            'class'=>'flaticon-jigsaw',

            'title'=>'فصول إبداعية',
            'description'=>'نقدم فصول ابداعية لتنمية مهارات طفلك',
            ]);

        Service::create([
            'class'=>'flaticon-kids',

            'title'=>'منشآت رياضية',
            'description'=>'توفير المنشآت الرياضية لطفلك ليتمكن من ممارسة الرياضة المفضلة له',
            ]);

    }
}
