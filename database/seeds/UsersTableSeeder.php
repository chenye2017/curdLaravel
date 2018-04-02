<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class)->times(50)->create();
        $user = App\User::find(1);
        $user->name = 'cy';
        $user->email = '1967196626@qq.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
