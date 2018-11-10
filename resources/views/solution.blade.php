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
               	              $("#displayquestion").html("<p><div class='text-secondary'><h3><b>"+data.title+"</b></h3></div><div class='text-muted'>Category: "+data.category+"</div>"+data.prob+"<p><div class='card bg-light mb-3 style='min-width:50%'><div class='card-header'>Enter Answer</div><div class='card-body'><p class='card-text'><table><tr><b><form class='form-group'><div class='row '> Category(s):<input type='text'></div>Item(s):<input type='text'></div></tr><div id='displaynewitemfield'></div></div><input id='item-add-btn' type='button' class='btn btn-outline-info' value='Add Item' onclick='addItem()'></div></tr></p></div></div>");
            }
            });
  }
  // addItem() function will add an item field when button is clicked


     function addItem()
     {
      $('#displaynewitemfield').append("<input type='text' value='hello'>");
      

     }
         </script>

<div id="questionFromBrainStromTable"></div>
<div class = "container">
	@include('inc.error-messages')
 
</div>

<div id="displayquestion" >
  

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