<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@nairaland.com',
            'admin' => 1
            // 'avatar' => asset('avatars/avatar.png')
        ]);

        App\User::create([
            'name' => 'Chimex',
            'password' => bcrypt('chimex'),
            'email' => 'chimex@nairaland.com'
            // 'avatar' => asset('avatars/avatar.png')
        ]);
    }
}
