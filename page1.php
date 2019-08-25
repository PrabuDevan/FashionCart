
<html>
<title>Fashion Cart</title>
<head>
<script>document.createElement("ele1")</script>
<script>document.createElement("ele2")</script>
<style>
ele1
{
font-face: century,times new roman;
display: block;
color:white;
background-color:rgba(0,0,0,.5);
font-size:30px;
}

ele2
{
font-face: century,times new roman;
display: block;
color:black;
font-size:27px;
}

.button {
  border-radius:50%;
  background-color:rgba(255,255,255,0.5);
  border:none;
  color:#800080;
  text-align:center;
  font-size:25px;
  padding:20px;
  width:200px;
  transition:all 0.5s;
  cursor:pointer;
  margin:5px;
}

.button:hover span
{
padding-right:25px;
}
.button:hover span:after
{
opacity:0.5;
right:0;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0.5;
  top: 0;
  right: -20px;
  transition: 0.5s;
}



</style>
</head>
<body background="main.jpg" width="30%" height="100%" opacity="0.5">
<center>
<ele1>Fashion Cart<br>
The perfect fashion blogger
</ele1>
</center>

<br><br>
<ele2>
<center>
<form method="post" action="page1.php" name = "myform"style="background-color:rgba(255,255,255,0.5);border-radius:3px;width:290px; height:180px; opacity:0.8" >


USERNAME<input type="text" name="username" style="background-color:rgba(255,255,255,0.5);height:30px"><br>

PASSWORD<input type="password" name="pword"  style="background-color:rgba(255,255,255,0.5);height:30px"><br>  </ele2>
Dont have an account:<a href="signup.php">Sign-up</a><br>

<input type="submit" name="Submit"value="Submit" ></span></a>
<input type="button" value="Reset" onClick="this.form.reset()" />

</form>
</center>
<p align="center">
<br>

<a href="t&c.html" style="color:black"><button class="button"><span> T&C</span></a>

<a href="contact.html" style="color:black"><button class="button"><span> Contact</span></a>

<a href="about.html" style="color:black"><button class="button"><span> About</span></a>

 <?php
if(isset($_POST["Submit"]) and $_POST["Submit"]=="Submit")
{

$uname = $_POST["username"];
$pass = $_POST["pword"];


$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysqli_error());
}


mysqli_select_db($con,"fashioncart");

$result = mysqli_query($con, "SELECT username,password FROM login WHERE username = '$uname'")or die("Error: ".mysqli_error($con));

$row = mysqli_fetch_array($result);
if($uname == null || $pass == null)
{
	echo '<script>';
echo 'alert("Please enter the values!");';
echo '</script>';	
}
else{
if($row["username"]==$uname && $row["password"]==$pass)
    {
	echo '<script>';
echo 'alert("You are a vaild user!");';
echo '</script>';
header("location:http://localhost/MiniProject/page2.html");
	}
else
{
	echo '<script>';
echo 'alert("Sorry, You are not a vaild user!");';
echo '</script>';
}
}   
}
?>
</body>
</html> 