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
               	              $("#displayquestion").html("<p><div class='text-secondary'><h3><b>"+data.title+"</b></h3></div><div class='text-muted'>Category: "+data.category+"</div>"+data.prob+"<p><div class='card bg-light mb-3 style='min-width:50%'><div class='card-header'>Enter Answer</div><div class='card-body'><p class='card-text'><b><form class='form-group'><div class='row '><div class='col-md-4'> Category(s):</div><div class='col-md-4'>Item(s):</div></div><div class='row'><div class='col-md-4'><input type='text' placeholder='Category'></div><div class='col-md-4'><input type='text' placeholder='Item'></div></div><div id='displaynewitemfield'></div><div class='row'><div class='col-md-4'></div><div class='col-md-4'><div id='item-add-btn' class='link-color-blue' onclick='addItem()'>Add Item </div><div id='item-add-btn' class='link-color' onclick='addAnswer()'>Add Answer </div><br></div></div></p></div><p><div class='row'><div class='col-md-4'><div class='link' onclick='addCategoryWithItems()'> Add Category</div><div class='col-md-4'></div></div></div>");
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

     function addAnswer()
     {
      
     }
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
  

@endsection



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
</body>
</html>