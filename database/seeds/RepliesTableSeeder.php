<?php

use Illuminate\Database\Seeder;
use App\Reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'discussion_id' => 1,
            'user_id' => 1
            
        ];

        $r2 = [
            
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'discussion_id' => 2,
            'user_id' => 1
            
        ];


        $r3 = [
            
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'discussion_id' => 3,
            'user_id' => 2
            
        ];


        $r4 = [
            
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus omnis, sint, voluptates voluptatem magnam deleniti expedita a necessitatibus suscipit ex illo ullam dolores molestiae! Voluptas, a vero? Doloremque, omnis tempore.',
            'discussion_id' => 4,
            'user_id' => 4
            
        ];


        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
