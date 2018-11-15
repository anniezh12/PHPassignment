<?php

use Illuminate\Database\Seeder;

class BrainstormAnswers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('brainstorm_answers')->insert([
        	[
        	'brain_id' => '1',
            'answer' => 'First answer',
             'last_edit' => '2018-11-09'
        ],
    [
        'brain_id' => '2',
            'answer' => 'Second answer',
             'last_edit' => '2018-11-09'
        ],
    [
        	'brain_id' => '3',
            'answer' => 'Third answer',
             'last_edit' => '2018-11-09'
        ],
        
    ['brain_id' => '4',
            'answer' => 'Fourth answer',
             'last_edit' => '2018-11-09'
        ]
    ]);

    
    }
}
