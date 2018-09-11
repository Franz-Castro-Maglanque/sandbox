<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<input type="text" name="name">
<button id="bar">insert</button>
<br>
<div id="foo">
	
</div>
<?php
$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo $row['fullName'];
	echo "<br>";
}

?>



<script src="javas.js"></script>
</body>
</html>
