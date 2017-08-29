<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $t1 = 'Implementing OAUTH2 with laravel passport';
        $t2 = 'Pagination in vuejs not working correctly';
        $t3 = 'Vuejs event listeners for child components';
        $t4 = 'Laravel homestead error - undetected database';

        $discussion1 = [
        	'user_id' => 1,
        	'channel_id' => 3,
        	'title' => $t1,
        	'slug' => str_slug($t1),
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignissimos repellat ut consectetur corrupti beatae sed blanditiis, delectus odit, sequi possimus suscipit voluptate. Tempore dolorum inventore dolore repudiandae '
        ];

        $discussion2 = [
        	'user_id' => 2,
        	'channel_id' => 1,
        	'title' => $t2,
        	'slug' => str_slug($t2),
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignissimos repellat ut consectetur corrupti beatae sed blanditiis, delectus odit, sequi possimus suscipit voluptate. Tempore dolorum inventore dolore repudiandae '
        ];

        $discussion3 = [
        	'user_id' => 1,
        	'channel_id' => 5,
        	'title' => $t3,
        	'slug' => str_slug($t3),
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignissimos repellat ut consectetur corrupti beatae sed blanditiis, delectus odit, sequi possimus suscipit voluptate. Tempore dolorum inventore dolore repudiandae '
        ];

        $discussion4 = [
        	'user_id' => 2,
        	'channel_id' => 3,
        	'title' => $t4,
        	'slug' => str_slug($t4),
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignissimos repellat ut consectetur corrupti beatae sed blanditiis, delectus odit, sequi possimus suscipit voluptate. Tempore dolorum inventore dolore repudiandae '
        ];


        \App\Discussion::create($discussion1);
        \App\Discussion::create($discussion2);
        \App\Discussion::create($discussion3);
        \App\Discussion::create($discussion4);
    }
}