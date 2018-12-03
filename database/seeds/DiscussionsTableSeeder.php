<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing OAuth2 with laravel passport';
        $t2 = 'Pagination in VueJs not working';
        $t3 = 'ImpLaravel Homestead error';
        $t4 = 'Implementing Social Auth in laravel';

        $d1 = [
            'title' => $t1,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'channel_id' => 1,
            'user_id' => 2,
            'slug' => str_slug($t1)
        ];

        $d2 = [
            'title' => $t2,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t2)
        ];

        $d3 = [
            'title' => $t3,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t3)
        ];

        $d4 = [
            'title' => $t4,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'channel_id' => 5,
            'user_id' => 1,
            'slug' => str_slug($t4)
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
    }
}
