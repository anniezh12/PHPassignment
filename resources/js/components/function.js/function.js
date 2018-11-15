
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

  $(document).ready(function(){




    //Start button will fetch question from questions table and will append in a div
     $.ajax({
               type:'GET',
               url:'/abc',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
               console.log(data);
                              
            }
            });

    $('#start').on('click',function(){  
//Start timer 
incTimer();
    $.ajax({
               type:'GET',
               url:'/questions',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
               console.log(data);
               if(data == "Question completed")
                alert("Test completed");
              else
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
              data: {'time':  $("#timer").text(),'user_id':123,'question_id':  $('#questionId').val(), _token: '{{csrf_token()}}'},
              
               success:function(data){
               $("#displayingBothCategoryAndItem").css('display','block');
               
              // after getting data from SolutionsController/displayAnswer I made a check to display both Categories and their associated ids

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