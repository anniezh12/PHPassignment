 $.get('solution/index').done(function(resp){
           	console.log(resp);
           	$("#displayquestion").append("<h2>Hello</h2>")
           } .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
});
