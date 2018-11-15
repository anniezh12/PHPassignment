<html>
<title>Containg Solution</title>
<head>
  
    
</head>
<body  style="background-color:white !important">
@extends('layouts.master')

@section('contents')
<!--All of the code related to this file will go between section tag-->
 <script>

// Timer Function

function incTimer() {
        var currentMinutes = Math.floor(totalSecs / 60);
        var currentSeconds = totalSecs % 60;
        if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
        if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
        totalSecs++;
        $("#timer").text(currentMinutes + ":" + currentSeconds);
        setTimeout('incTimer()', 1000);
    }
    totalSecs = 0;

    // Date Function

    function gettingDate(){

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();

        if(dd<10) {
            dd = '0'+dd
        } 

        if(mm<10) {
            mm = '0'+mm
        } 

        today = mm + '/' + dd + '/' + yyyy;
      
    }

    // Document.ready part of script

  $(document).ready(function(){




    //Start button will fetch question from questions table and will append them in a div

     $.ajax({
               type:'GET',
               url:'/abc',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
               console.log(data);
                              
            }
            });

    $('#start').on('click',function(){  

       // call to incTimer() will start a timer for a question
totalSecs = 0;
        incTimer();
 $("#DisplayReviewSystemAnswer").css('display','none');
  $("#displayingBothCategoryAndItem").css('display','none');
        // call to gettingDate() will fetch current date to be inserted in the brainstorm_responses table

        //gettingDate();


// questions will be fetched and displayed using following ajax

    $.ajax({
               type:'GET',
               url:'/questions',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
               console.log(data);
               if(data == "Question completed"){
 alert("Test completed");
   $("#start").val("Start Test");
    $("#start").prop('disabled', true);
               }
               
              else{

                              $("#displayquestion").html("<p><div class='text-secondary'> <input type='hidden' id='questionId' value='"+data.id+"'/> <h3><b>"+data.title+"</b></h3></div><div class='text-muted'>Category: "+data.category+"</div>"+data.prob);
                            $("#start").val("Next Question");
                              $("#start").prop('disabled', true);
                          }
            }
            });
  
});
  // "Add Item" link will add an item field when this button is clicked

     $('#additem').on('click',function(){
      //lastCat contains category text field contents
      var lastCat = $('#FormDiv > div:last-child > .categorydiv > input[type="text"]'); 
      //lastitem contains item text field contents
     var lastitem = $('#FormDiv > div:last-child > .itemsdiv > input[type="text"]:last-child'); 
     // following if statement will take care of empty fields
if(lastCat.val() == ''){
  $("#errorMsg").html("Please add a category first!")
}
else if(lastitem.val() == ''){
  $("#errorMsg").html("Please add an item first!")
}
else{
  var qid = $('#questionId').val();
// if CatId(hidden field) value is 0 then add category

if($("#CatId").val() != "0")
{
// Foolowing ajax will send data to items@store method
     AddItem(lastitem.val(), qid);
 }

if($("#CatId").val() == "0"){

 // alert(qid);
   $.ajax({
                type:'POST',
                url:'/categories/submit',
              data: {'title': lastCat.val(),'question_id': qid, _token: '{{csrf_token()}}'
},
               success:function(data){
                // assign CatId new value of category Id just created
                 $("#CatId").val(data.id);
                 AddItem(lastitem.val(), qid);
                  }
     });
 }
// if CatId(hidden field) value is not 0 then add item(s)

    
   }    // end of if/else structure

    });   // end of "Add Item" button 

     // Following ajax call will take care of adding a new category/item(s) div

     $('#addCategoryDiv').on('click',function(){

      $('#CatId').val("0");
//'#FormDiv > div:last-child > div:first-child > input[type="text"]:last-child
$('#FormDiv').append("<div class='row' style='margin-top:15px'><div class='col-md-4 categorydiv'><input type='text' class='form-control' placeholder='Category'> </div> <div class='col-md-8 itemsdiv'> <input type='text' class='form-control' placeholder='Item'></div></div>");
 
 //$('#FormDiv >div:last-child > .categorydiv').append(" <br> <input type='text' class='form-control' placeholder='Category'> ");
 //$('.itemsdiv').append(" <br> <input type='text' class='form-control' placeholder='Item'> ");

     })

function GetAnswer(){
  $.ajax({
                type:'GET',
                url:'/displayAnswer',
              data: {'time':  $("#timer").text(),'user_id':123,'question_id':  $('#questionId').val(), _token: '{{csrf_token()}}'},
              
               success:function(data){
                console.log(data);
               $("#displayingBothCategoryAndItem").css('display','block');
              // var item = [];
              // after getting data from SolutionsController/displayAnswer I made a check to display both Categories and their associated ids


$("#displayingBothCategoryAndItem > div:first-child > div:last-child ").empty();
               for(var i=0 ; i< data[0].length; i++){

        

                   $('#displayingBothCategoryAndItem > div:first-child > div:last-child').append("<b>"+ data[0][i].title +"</b>");

                   for(var j=0; j< data[1].length; j++){

                    if(data[0][i].id == data[1][j].category_id ){
                       $('#displayingBothCategoryAndItem > div:first-child > div:last-child').append("<hr /><p>"+ data[1][j].content+"</p>");
                    }
                  }
                 }
              
                
              
                  }
})
}

     function AddItem(lastitem, qid){
       $.ajax({
                type:'POST',
                url:'/items/submit',
              data: {'content': lastitem,'user_id':123,'category_id': $("#CatId").val(),'question_id': qid, _token: '{{csrf_token()}}'},
               success:function(data){
                console.log(data)
                $('#FormDiv > div:last-child > .itemsdiv').append(" <br> <input type='text' class='form-control' placeholder='Item'> ");
               //  $("#CatId").val(data.id);
               //  $('#displaynewitemfield').append("<div class='row '><div class='col-md-4'></div><div class='col-md-4'> <br> <input type='text' value='Item'> </div>");
               // // $('#dis').html(data);
                  }
      }); 
     }
     //end of AddItem
     $('#submitAnswer').on('click',function(){

    $("#start").prop('disabled', false);
      // User response to a question will be saved to brainstorm_responses table using following Ajax method. Call will be made to brainStormResponsesController's saveResponse() method 

      $.ajax({

                type:'get',
                url:'/saveResponse',
           data: {'brain_id': $('#questionId').val(),'answer':'yourr answer','time': $("#timer").text(),'user_id':123, _token: '{{csrf_token()}}'},
              
               success:function(data){
                GetAnswer();
               // alert(data);
              }

      });

   
    // In order to display User's response a call to SolutionController@displayAnswer will be made using following Ajax method and then results will be displayed



     })

     $("#SystemReviewAnswwer").on('click',function(){

            $.ajax({
                type:'GET',
                url:'/displaySystemAnswer',
                 data: {'user_id':123,'question_id':  $('#questionId').val(), _token: '{{csrf_token()}}'},
              
               success:function(data){
                
                console.log(data);

                $("#DisplayReviewSystemAnswer").css('display','block');
                $("#ReviewSystemAnswerP").text(data[0].answer);
               }
             });

     });

     
   });   // end of document.ready()
         </script>

<div id="questionFromBrainStromTable" ></div>
<div class = "container">

  @include('inc.error-messages')
 
</div>

<div id="displayquestion">

</div>

<div id="timer">Hello</div>


  <div class="container">
  <input  class='btn btn-link'  value="Start Test"  id="start">
   
  
@include('forms.answer-form')


<div class="row card bg-warning mb-3 " style="width: 100%; margin: auto; display: none"  id="displayingBothCategoryAndItem">
  <div class='card bg-light mb-3' style='min-width:50%'>
  <div class='card-header bg-warning text='red'><b>Answer</b> <a id="SystemReviewAnswwer" style="float: right" href="#">Review System Answer</a></div>
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

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
</body>
</html>
