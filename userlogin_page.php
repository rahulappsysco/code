<?php 
session_start();
include('reg_database.php');



if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$userpassword=$_POST['userpassword'];
	
//select query......
$userentry="SELECT * FROM outcome_records where Password='$userpassword' AND (uname='$username' OR email_id='$username' OR telephone='$username')";
$userquery=mysqli_query($conn,$userentry);
$userrow=mysqli_num_rows($userquery);
if($userrow>0)
{
	$userfetch=mysqli_fetch_assoc($userquery);
	$_SESSION['id']=$userfetch['id'];
	//print_r($userfetch);
	header('location:ufetch.php');
}
else
{
	echo "invalid username or password";
}

}




?>





<DOCTYPE html>
<html>
<body>
<h1> Login Page</h1>
<form action="" method="POST" enctype="multipart/form-data">
User Name: <input type="text" name="username"><br><br>
Upassword: <input type="password" name="userpassword"><br><br><br>&nbsp &nbsp  &nbsp &nbsp
<input type="submit" name="submit" value="Login">&nbsp &nbsp  &nbsp &nbsp
<?php echo '<b><a href="registration2.php">New User</a></b>'; ?>
</form>


</body>
</html>