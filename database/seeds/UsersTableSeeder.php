<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(5)->make();

        User::insert($users->makeVisible(['password'])->toArray());

        $user = User::find(1);

        $user->name = 'Long';

        $user->email = '394307916@qq.com';

        $user->password = bcrypt('123456');

        $user->save();
    }
}
