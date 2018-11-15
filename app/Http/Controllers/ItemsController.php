<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class ItemsController extends Controller
{
    
    
    public function submit(Request $request)
    {
    $item = new item;
    $item->content =  $request->content;
    $item->user_id =  $request->user_id;
    $item->category_id =  $request->category_id;
    $item->question_id =  $request->question_id;

     $item->save();
     return $item;
        
    }

   
}
