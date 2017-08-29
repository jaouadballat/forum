<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rep1 = [
        	'user_id' => 1,
        	'discussion_id' => 2,
        	'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo'
        ];

        $rep2 = [
        	'user_id' => 2,
        	'discussion_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo'
        ];

        $rep3 = [
        	'user_id' => 2,
        	'discussion_id' => 4,
        	'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo'
        ];

        $rep4 = [
        	'user_id' => 1,
        	'discussion_id' => 5,
        	'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo'
        ];


        \App\Replay::create($rep1);
        \App\Replay::create($rep2);
        \App\Replay::create($rep3);
        \App\Replay::create($rep4);
    }
}
