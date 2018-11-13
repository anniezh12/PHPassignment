<html>
<title>Containg Solution</title>
<head>
  
    
</head>
<body  style="background-color:white !important">
@extends('layouts.master')

@section('contents')
<!--All of the code related to this file will go between section tag-->
 <script> 
  $(document).ready(function(){
    //Start button will fetch question from questions table and will append in a div
    $('#start').on('click',function(){  
    $.ajax({
               type:'GET',
               url:'/questions',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
               
                              $("#displayquestion").html("<p><div class='text-secondary'> <input type='hidden' id='questionId' value='"+data.id+"'/> <h3><b>"+data.title+"</b></h3></div><div class='text-muted'>Category: "+data.category+"</div>"+data.prob);
            }
            });
  
});
  // "Add Item" link will add an item field when this button is clicked

     $('#additem').on('click',function(){
      //lastCat contains category text field contents
      var lastCat = $('#FormDiv > div:first-child > input[type="text"]:last-child'); 
      //lastitem contains item text field contents
     var lastitem = $('#FormDiv > div:last-child > input[type="text"]:last-child'); 
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
alert($("#CatId").val())

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

 $('.categorydiv').append(" <br> <input type='text' placeholder='Category'> ");
 $('.itemsdiv').append(" <br> <input type='text' placeholder='Item'> ");

     })

     function AddItem(lastitem, qid){
       $.ajax({
                type:'POST',
                url:'/items/submit',
              data: {'content': lastitem,'user_id':123,'category_id': $("#CatId").val(),'question_id': qid, _token: '{{csrf_token()}}'},
               success:function(data){
                console.log(data)
                $('.itemsdiv').append(" <br> <input type='text' placeholder='Item'> ");
               //  $("#CatId").val(data.id);
               //  $('#displaynewitemfield').append("<div class='row '><div class='col-md-4'></div><div class='col-md-4'> <br> <input type='text' value='Item'> </div>");
               // // $('#dis').html(data);
                  }
      }); 
     }
     //end of AddItem
     $('#submitAnswer').on('click',function(){
$.ajax({
                type:'GET',
                url:'/displayAnswer',
              data: '_token = <?php echo csrf_token() ?>',
               
               success:function(data){
               $("#displayingBothCategoryAndItem").css('display','block');

               for(var i=0 ; i< data.length; i++){
                 $('#displayingBothCategoryAndItem > div:first-child > div:last-child').append("<b>"+data[i].title+"</b>");

                 for(var j=0; j< data.length; j++){

                  if(data[j].id == data[i].id){
                     $('#displayingBothCategoryAndItem > div:first-child > div:last-child').append("<hr /><p>"+data[i].content+"</p>");
                  }
                 }
               
               }
                console.log(data[0]);
                
              
                  }
})

     })

     
   });   // end of document.ready()
         </script>

<div id="questionFromBrainStromTable" ></div>
<div class = "container">
  @include('inc.error-messages')
 
</div>

<div id="displayquestion">

</div>




  <div class="container">
  <input  type="button"  value="Start Test"  id="start">
   
  
@include('forms.answer-form')


<div class="row card bg-warning mb-3 " style="width: 100%; margin: auto; display: none"  id="displayingBothCategoryAndItem">
  <div class='card bg-light mb-3' style='min-width:50%'>
  <div class='card-header bg-warning text='red'><b>Answer</b></div>
  <div class='card-body'>

</div>
</div>


</div>
 </div>
@endsection

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
</body>
</html>
