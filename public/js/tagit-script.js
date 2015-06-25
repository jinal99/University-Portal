$( document ).ready(function() {
    $('#demo4').tagit(
    	{
    		sortable:true
       	});

$( "#question" ).submit(function( event ) {
  var tags =  $('#demo4').tagit('tags');
	for (var i in tags){
		var new_value = tags[i].value; 
		if($("#tags").val() != "")
			new_value = $("#tags").val() + ","+ tags[i].value;
		$("#tags").val(new_value);    
	}
});

});

