<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SolutionController extends Controller
{
	
    public function displayAnswer(Request $request)
    {

    	$answer = DB::table('categories')
    	->join('items','items.category_id','=','categories.id')
    	->select('categories.title','items.content', 'categories.id')
        ->where("categories.question_id", "=",$request->question_id )
    	->get();
    	return $answer;
    }
}
