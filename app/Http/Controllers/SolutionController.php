<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SolutionController extends Controller
{
	
    public function displayAnswer(Request $request)
    {

    	$categories = DB::table('categories')
    	    	->select('categories.title', 'categories.id')
        ->where("categories.question_id", "=",$request->question_id )
    	->get();
        $items = DB::table('items')
                ->select('items.content', 'items.category_id')
        ->where("items.question_id", "=",$request->question_id )
        ->get();

    	return [$categories,$items];
    }
}
