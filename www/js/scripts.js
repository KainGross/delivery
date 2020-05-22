$(document).ready(function() {

});
function showcart () {
	//$("#cart").show();
	$.ajax({
	    type: 'POST',
	    url: '/../content/cart.php',
	    data: {
	        lang: 'JavaScript',
	        library: 'jQuery'
	    }
	}).done(function(data) {
		$("body").append(data);
	});
	$("body").css('overflow-y', 'hidden');
}
function hidecart () {
	$("#cart").remove();
	$("body").css('overflow-y', '');
}