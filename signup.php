
<html>
<title>Fashion Cart</title>
<head>
<script type="text/javascript">
function matchpass(){
	var name=document.myform.username.value;
var fp=document.myform.pword.value;
if(fp.indexOf(' ') >= 0 || name.indexOf(' ') >= 0)
{
	alert("Please, remove the whitespaces!");
	return false;
}
if(name==""||name==" "||name.length == 0)
{
alert("Enter the username!");
return false;
}
if(fp==""||fp==" "||fp.length == 0)
{
alert("Enter the password!");
return false;
}
if(fp.length<8)
{
	alert("Password must be atleast 8 characters!");
	return false;
}
if (/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/.test(fp)&&/[1-9]/.test(fp)) 
{
if (/[a-z]/.test(fp))
{
if (/[A-Z]/.test(fp))
{
return true;
}
else
{
alert("Password must contain a lowercase and uppercase alphabets! a number and a special character!");
return false
}
}
else
{
alert("Password must contain a lowercase and uppercase alphabets! a number and a special character!");
return false
}
}
else
{
alert("Password must contain a lowercase and uppercase alphabets! a number and a special character!");
return false
}
return true;
}
</script>
<script>document.createElement("ele1")</script>
<script>document.createElement("ele2")</script>
<style>
ele1
{
font: century,times new roman;
display: block;
color:white;
background-color:rgba(0,0,0,.5);
font-size:30px;
}

ele2
{
font: century,times new roman;
display: block;
color:black;
font-size:23px;
}
</style>
</head>
<body background="main.jpg" width="30%" height="100%" opacity="0.5">
<center>
<ele1>Fashion Cart<br>
The perfect fashion blogger<br>
Sign-up
</ele1>
</center>

<br><br>
<ele2>
<center>
<form method="post" action="signup.php" onsubmit="return matchpass()" name = "myform"style="background-color:rgba(255,255,255,0.5);border-radius:3px;width:290px; height:180px; opacity:0.8" >


USERNAME<input type="text" name="username" style="background-color:rgba(255,255,255,0.5);height:30px"><br>

PASSWORD<input type="password" name="pword"  style="background-color:rgba(255,255,255,0.5);height:30px"><br>

<br>
<input type="submit" name="Submit"value="Sign-up" ></span></a>
  </ele2>
</form>
</center>
<br>
 <?php
if(isset($_POST["Submit"]) and $_POST["Submit"]=="Sign-up")
{
$uname=$_POST["username"];
$pass=$_POST["pword"];
$con=mysqli_connect("localhost","root",""); 
if (!$con)
die('Could not connect: ' . mysqli_error($con));
if (!mysqli_select_db($con,"fashioncart"))   
die("Cant select database"); 
$checkUserID = mysqli_query($con,"SELECT username from login WHERE username = '$uname'");

while($test = mysqli_fetch_array($checkUserID))

if ($test ) 
{
echo '<script>';
echo 'alert("Sorry,username already exists!");';
echo '</script>';
}
if(!$test)
{
	
$result = mysqli_query($con,"insert into login values('$uname','$pass')"); 
mysqli_close($con);
echo '<script>';
echo 'alert("You have successfully registered");';
echo '</script>';
header("location:http://localhost/MiniProject/page2.html");
}
}
?> 
</body>
</html>