<?php
$con = mysqli_connect("localhost","root","","fashioncart");
if(!$con)
{
    die('Connection Failed'.mysqli_error());
}

$uname=$_POST['username'];
$pwd=$_POST['pword'];

$result = mysqli_query($con, "SELECT username, password FROM login WHERE username = '$uname'")or die("Error: ".mysqli_error($con));

$row = mysqli_fetch_array($result);

if($row["username"]==$uname && $row["password"]==$pwd)
    {
	echo '<script>';
echo 'alert("You are a vaild user!");';
echo '</script>';
header("location:http://localhost/Prabu/Content/Content.html");
	}
else
{
	echo '<script>';
echo 'alert("Sorry, You are not a vaild user!");';
echo '</script>';
}
?>