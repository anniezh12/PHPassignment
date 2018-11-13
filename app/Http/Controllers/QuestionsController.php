<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
  
               public function index()
    {
 global $arrayOfRandomNumners;
         $GLOBALS['arrayOfRandomNumners'] = array();

        //$questions = Question::orderBy('brain_id','desc')->paginate(1);
        // $questions = Question::orderBy('brain_id','desc')->take(1)->get();

       // $questions = shuffle(Question::all());
        $GLOBALS['arrayOfRandomNumners'] = session('newArr');


        for($i=1;$i<=count($questions);$i++)
        {
            $random_number = rand(0,count($questions)-1);   
         
           if(empty($GLOBALS['arrayOfRandomNumners']))
           {
             $GLOBALS['arrayOfRandomNumners'] = array();
            array_push($GLOBALS['arrayOfRandomNumners'],$random_number);
            session(['newArr' => $GLOBALS['arrayOfRandomNumners']]);
            return $questions[$random_number];
           }

        else if(count($GLOBALS['arrayOfRandomNumners'])===count($questions))
        {    
            $GLOBALS['arrayOfRandomNumners'] = array();
             session(['newArr' => $GLOBALS['arrayOfRandomNumners']]);
            return new Question();
        }

       else if (!in_array($random_number,$GLOBALS['arrayOfRandomNumners']))
  {
     echo $random_number;
         array_push($GLOBALS['arrayOfRandomNumners'],$random_number);
          session(['newArr' => $GLOBALS['arrayOfRandomNumners']]);
         return $questions[$random_number];
                
    }
    
}
   
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
