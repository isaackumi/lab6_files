 function spinUpServer()
{
$(document).ready( function(){

	//jQuery methods go here...
	$("form").keyup(function(){
		event.preventDefault();
		//grab the text field
		let inputVal = $(this).serialize();
		$.post("processsearch.php",
		inputVal,
	 function(data,status){

			$('span').html(data);
			});
		
		});
	
});


}
