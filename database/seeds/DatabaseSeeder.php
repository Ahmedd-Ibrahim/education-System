<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BaseInfoSeeder::class);
        $this->call(PhaseYearSeeder::class);

        //  frontEnd data
        $this->call(front_provideSeeder::class);
        $this->call(front_StaticTitleSeeder::class);
        $this->call(SiteServiceSeeder::class);
    }
}
