<?php

use Illuminate\Database\Seeder;

class AutomobilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('automobiles')->delete();

        factory(App\Model\Automobile::class, 7)->create();
    }
}
