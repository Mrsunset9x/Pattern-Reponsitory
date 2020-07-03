<?php

use Illuminate\Database\Seeder;

class CutomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Customer::class,100)->create();
    }
}
