<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title'=> 'Laravel', 'slug'=> str_slug('Laravel')];
        $channel2 = ['title'=> 'VueJS', 'slug'=> str_slug('VueJS')];
        $channel3 = ['title'=> 'Machine Learning', 'slug'=> str_slug('Machine Learning')];
        $channel4 = ['title'=> 'Python', 'slug'=> str_slug('Python')];
        $channel5 = ['title'=> 'A.I', 'slug'=> str_slug('A.I')];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
    }
}
