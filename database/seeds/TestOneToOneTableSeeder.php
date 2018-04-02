<?php

use Illuminate\Database\Seeder;

class TestOneToOneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1;$i < 10; $i ++) {
            \App\TestOneToOne::create([
                'user_id' => $i
            ]);
        }
    }
}
