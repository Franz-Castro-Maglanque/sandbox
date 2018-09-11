<?php 


if(isset($_POST['submit'])){



$studnumber = $_POST['studnumber'];
$fname = $_POST['fname'];
$mname = $_POST['mnane'];
$lname = $_POST['lname'];
$about = $_POST['about'];
$gender = $_POST['gender'];



echo "Your studentnumber is";
echo "C".$studentnumber. "<br>";$lname;
echo "and your Fullname is ".$lname.", ".$fname." ".$mname."<br>";
echo "and you gender is ".$gender."<br>";
echo "and the story about your self: ". $about;



}













	?>