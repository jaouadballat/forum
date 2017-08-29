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
        \App\User::create([
            'name' => 'jaouad',
            'email' => 'forum@admin.dev',
            'admin' => 1,
            'password' => bcrypt('admin'),
            'avatar' => asset('avatar/avatar.png')
        ]);

        \App\User::create([
            'name' => 'ballat',
            'email' => 'jaouad.ballat@gmail.com',
            'admin' => 1,
            'password' => bcrypt('admin'),
            'avatar' => asset('avatar/avatar.png')
        ]);
    }
}
