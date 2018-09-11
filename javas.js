
var request = new XMLHttpRequest();

$("button").click(function(){
request.open("post", "suggestions.php");
request.onload = function(){
	$("#foo").html(request.responseText);
};
request.send();

});


