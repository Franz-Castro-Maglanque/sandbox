<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p id="demo"></p>


<script>
var cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
var text = "";
var i;
// for (i = 0; i < cars.length; i++) {
//     text += cars[i] + "<br>";
// }


test = document.getElementById("demo");
test.innerHTML = test.innerHTML + cars + "<br>";

</script>
</body>
</html>