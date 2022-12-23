console.log("HIIIIIIIIIIIIIII");
// $(document).load(function() {
// 	$('#button').click(function() {
// 		console.log("button click");
// 	});	
// });

// A $( document ).ready() block.
$( document ).ready(function() {
	$('#button').click(function() {
		// console.log("button click");
		const node = $("#segment");
		$("#test_cont").append("<div id='test'>" + node + "</div>");
	});	
    // console.log( "ready!" );
});