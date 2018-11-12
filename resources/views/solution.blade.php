<html>
<title>Containg Solution</title>
<head>
  
    
</head>
<body  style="background-color:white !important">
@extends('layouts.master')

@section('contents')
<!--all the code related to this file will go between section tag-->
 <script> 
  $(document).ready(function(){
    $('#start').on('click',function(){  
    $.ajax({
               type:'GET',
               url:'/questions',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                alert("hello") ;
                              $("#displayquestion").html("<p><div class='text-secondary'> <input type='hidden' id='questionId' value='"+data.id+"'/> <h3><b>"+data.title+"</b></h3></div><div class='text-muted'>Category: "+data.category+"</div>"+data.prob);
            }
            });
  
});
  // addItem() function will add an item field when button is clicked
     $('#additem').on('click',function(){
      var lastCat = $('#FormDiv > div:first-child > input[type="text"]:last-child'); 
       console.log(lastCat.val());
     var lastitem = $('#FormDiv > div:last-child > input[type="text"]:last-child'); 
      console.log(lastitem.val());
if(lastCat.val() == ''){
  $("#errorMsg").html("Please fill category first!")
}
else if(lastitem.val() == ''){
  $("#errorMsg").html("Please fill item first!")
}
else{
  var qid = $('#questionId').val();

 // alert(qid);
   $.ajax({
                type:'POST',
                url:'/categories/submit',
              data: {'title': lastCat.val(),'question_id': qid, _token: '{{csrf_token()}}'
},
               success:function(data){
                 $("#CatId").val(data.id);
                $('#displaynewitemfield').append("<div class='row '><div class='col-md-4'></div><div class='col-md-4'> <br> <input type='text' value='Item'> </div>");
               // $('#dis').html(data);
                  }



     });

// Foolowing ajax will send data to items@store method
    $.ajax({
                type:'POST',
                url:'/items/submit',
              data: {'content': lastitem.val(),'user_id':123,'category_id': $("#CatId").val(),'question_id': qid, _token: '{{csrf_token()}}'},
               success:function(data){
                alert(data.id);
               //  $("#CatId").val(data.id);
               //  $('#displaynewitemfield').append("<div class='row '><div class='col-md-4'></div><div class='col-md-4'> <br> <input type='text' value='Item'> </div>");
               // // $('#dis').html(data);
                  }
      });
   
     
   }
    });
     
   });
         </script>

<div id="questionFromBrainStromTable"></div>
<div class = "container">
  @include('inc.error-messages')
 
</div>

<div id="displayquestion">

</div>



<div id="displayingBothCategoryAndItem">
  
</div>

<p>
  <div class="container">
  <input  type="button"  value="Start Test"  id="start">
  
  </div>
  
@include('forms.answer-form');
@endsection



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
</body>
</html>
