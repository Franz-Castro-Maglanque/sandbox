<!DOCTYPE html>
<html>
<body>

<p>Click the button to list all the items in the array.</p>
<!-- <button onclick="numbers.forEach(myFunction)">Try it</button> -->
<p id="demo"></p>

<script>
demoP = document.getElementById("demo");
var numbers = [4, 9, 16, 25,"franz"];

function myFunction(item, index) {
    // demoP.innerHTML = demoP.innerHTML + "index[" + index + "]: " + item + "<br>"; 
    demoP.innerHTML = demoP.innerHTML +"<br>" +  item;
}
numbers.forEach(myFunction)
</script>

</body>
</html>