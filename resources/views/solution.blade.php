<html>
<title>Containg Solution</title>
<head>
	
    
</head>
<body  style="background-color:white !important">
@extends('layouts.master')

@section('contents')
<!--all the code related to this file will go between section tag-->
 <script> 


  	function funcy(){    
  	$.ajax({
               type:'GET',
               url:'/questions',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
               	              $("#displayquestion").html("<p><div class='text-secondary'><h3><b>"+data.title+"</b></h3></div><div class='text-muted'>Category: "+data.category+"</div>"+data.prob);
            }
            });
  }
  // addItem() function will add an item field when button is clicked


     function addItem()
     {
      $('#displaynewitemfield').append("<div class='row '><div class='col-md-4'></div><div class='col-md-4'> <br> <input type='text' value='Item'></div>");
     }

     function addCategoryWithItems()
     {
      //I called funcy() again and displayed it in another div
      funcy();
     }

     // following function will take care of the answer submitted through form
     $(document).ready(function(){
      $('#answerform').on('click',function(e){
               e.preventDefault();
               let category = $('#category').val();
               let item =$('#item').val();
               console.log(category,item);
               //create a category object and then items. First I will create a category once a user submits data. after creating a category I will get the category_id which will then be used to send this number along with the contents for the item and will create items.
           $.ajax({
               type:'GET',
               url:'/items',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                //alert("hello addAnswer")
                $('#dis').html(" thanks Allah "+data);  }
     });
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
	<input  type="button"  value="Start Test"  onclick="funcy()">
  
  </div>
  
@include('forms.answer-form');
@endsection



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
</body>
</html>