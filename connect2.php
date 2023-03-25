<?php
$conn = mysqli_connect("localhost","ssein","S@hussein700","assignment");
if (!$conn) {
	echo "connection fail bro";
}
else{
	echo "<h1>database connected successfully  hussein</h1> ";
}
//$conn = mysqli_connect("localhost","ssein","S@hussein700","assignment");
$firstName =$_POST['first_name'] ;
$lastName =$_POST['last_name'];
$departmantal =$_POST['department'];
$datetime =$_POST['date_of_birth'];
$umri =$_POST['age'];
$jinsia =$_POST['gender'];

$myquery="INSERT INTO `users` (`fname`, `lname`, `dprtmnt`, `datee`, `uage`,`gndr`)
VALUES ('$firstName','$lastName', '$departmantal', '$datetime','$umri','$jinsia')";
$result= mysqli_query($conn,$myquery);
if ($result===true) {
	echo "well done";
}
else{
	echo "bad work";
}
