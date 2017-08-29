<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Larevel 5.3', 'slug' => str_slug('Larevel 5.3')];
        $channel2= ['title' => 'Vue js 2', 'slug' => str_slug('Vue js 2')];
        $channel3 = ['title' => 'Wordpress', 'slug' => str_slug('Wordpress')];
        $channel4 = ['title' => 'HTML5', 'slug' => str_slug('HTML5')];
        $channel5 = ['title' => 'Angular js', 'slug' => str_slug('Angular js')];
        $channel6 = ['title' => 'Javascript', 'slug' => str_slug('Javascript')];
        $channel7 = ['title' => 'PHP5', 'slug' => str_slug('PHP5')];

        \App\Channel::create($channel1);
        \App\Channel::create($channel2);
        \App\Channel::create($channel3);
        \App\Channel::create($channel4);
        \App\Channel::create($channel5);
        \App\Channel::create($channel6);
        \App\Channel::create($channel7);
    }
}
