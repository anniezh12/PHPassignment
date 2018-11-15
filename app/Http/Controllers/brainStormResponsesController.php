<?php

namespace App\Http\Controllers;
use App\brainstorm_responses;
use App\brainstorm_answers;
use DB;
use Illuminate\Http\Request;

class brainStormResponsesController extends Controller
{
      public function saveResponse(Request $request)
      {
       //return Carbon::parse($request->time)->format('H, i, s');
                 
          $response = new  brainstorm_responses;
          $response->brain_id =  $request->brain_id;
          $response->answer =  $request->answer;
          $response->time  =  $request->time;
          $response->user_id  =  $request->user_id;
          $response->date  = date("Y-m-d");
          $response->save();
        echo $response;
      }

      public function getResponse(Request $request)
      {
        $answer = DB::table('brainstorm_answers')
       ->select('answer')
       ->where("brain_id", "=",$request->question_id)
      ->get();
      return $answer;
      }
}
