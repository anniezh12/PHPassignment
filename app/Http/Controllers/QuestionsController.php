<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Collection;
use App\Question;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  // public static $ques;

    public function session_access() 
    {
        
        // Fetch All Questions in random order and assign to a session variable sessionQuestion
        $ques = array();
        $ques =Question::inRandomOrder()->get();
        session(['sessionQuestion' => $ques]);
      }

   
  
    public function index()
    
       
    {
        $Questions = session('sessionQuestion');
        if(count($Questions) > 0)
           {
            foreach(session('sessionQuestion') as $key=>$value)
                {
                    $i =0;
                    if($i == 0 && (count($Questions)) > 0){
                        unset($Questions[$key]);
                         session(['sessionQuestion' =>$Questions]);
                        return $value;
                    }

                
                }
}
     else {
                    return "Question completed";
           }
   
}

   
}
