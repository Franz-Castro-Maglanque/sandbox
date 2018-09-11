	var counter = 1;
	var btn = document.querySelector("button");
 	var container = document.querySelector("#comments");

	btn.addEventListener("click", function(){
		var Request = new XMLHttpRequest();
		Request.open('GET', 'test-' + counter +'.js');
	Request.onload = function(){
	var data = JSON.parse(Request.responseText);
	renderHTML(data);
	// console.log(data[0].foods.likes.length);	

};
Request.send();
counter++;
if (counter > 2) {
$("button").hide();
};

	});





	function renderHTML(data){
 		var htmlString = "";
 		for (i = 0; i < data.length; i++) {
 			htmlString += "<p>" + data[i].name;
 			for (ii = 0 ; ii < data[ii].foods.likes.length ; ii++) {
 				htmlString += "<p>" + data[i].foods.likes[ii] + "</p>";
 			}
 		}
 		container.insertAdjacentHTML("beforeend",htmlString);
 	}

