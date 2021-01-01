<?php

use Illuminate\Database\Seeder;

class BaseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = \App\models\BasicsInfo::create([
            'name' => 'Educate',
            'Email' => 'Educate@email',
            'address' => 'address @ address',
            'phone' => '+201010420399',
            'logo' => 'baseInfo/default.png',
            'fb_link' => '#',
            'twitter_link' => '#',
            'insta_link' => '#'
        ]);

    }
}
