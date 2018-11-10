<?php

use Illuminate\Database\Seeder;

class AllTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	[
        	'brain_id' => '1',
            'prob' => 'This is the first problem',
            'category' => 'food',
            'source' => 'Internet',
            'title' => 'First Question',
             'status' => 'NA',
             'last_edit' => '2018-11-09'
        ],
    [
        	'brain_id' => '2',
            'prob' => 'This is the Second problem',
            'category' => 'Education',
            'source' => 'Internet',
            'title' => 'Second Question',
             'status' => 'NA',
             'last_edit' => '2018-11-10'
        ],
    [
        	'brain_id' => '3',
            'prob' => 'This is the third problem',
            'category' => 'Music',
            'source' => 'Books',
            'title' => 'Third Question',
             'status' => 'NA',
             'last_edit' => '2018-11-23'
        ],
    [
        	'brain_id' => '4',
            'prob' => 'This is the fourth problem',
            'category' => 'Tech',
            'source' => 'Books/internet',
            'title' => 'Fourth Question',
             'status' => 'NA',
             'last_edit' => '2018-10-03'
         ]
        ]);

    }
}
