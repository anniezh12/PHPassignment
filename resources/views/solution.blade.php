<html>
<title>Containg Solution</title>
<head>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  </script>
  <script src="js/solution.js"></script>
</head>
<body  style="background-color:white !important">
  @extends('layouts.master')

  @section('contents')
  <!--All of the code related to this file will go between section tag-->

  <div id="questionFromBrainStromTable" ></div>
  <div class = "container">

    @include('inc.error-messages')

  </div>


  <div id="displayquestion"></div>

  <div id="timer"></div>

  <div class="container">
    <input  class='btn btn-link'  value="Start Test"  id="start"   

    @include('forms.answer-form')

    <div class="row card bg-warning mb-3 " style="width: 100%; margin: auto; display: none"  id="displayingBothCategoryAndItem">
      <div class='card bg-light mb-3' style='min-width:50%'>
        <div class='card-header bg-warning text='red'><b>Answer</b> <span id="TimeSpan"></span> <a id="SystemReviewAnswwer" style="float: right" href="#">Review System Answer</a></div>
        <div class='card-body'>    
        </div>
      </div>

    </div>

    <div class="row card bg-success" style="width: 100%; margin: auto; margin-top:40px; display: none"  id="DisplayReviewSystemAnswer">
      <div class='card bg-light mb-3' style='min-width:50%'>
        <div class='card-header bg-success text='red'><b>System Review Answer</b></div>
        <div class='card-body'>

          <p class="label label-success" id="ReviewSystemAnswerP"></p>
        </div>
      </div>

    </div>
    @endsection

  </body>
  </html>
