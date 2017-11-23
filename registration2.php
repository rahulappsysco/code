<?php 
include('reg_database.php');
if(isset($_POST['submit']))
{
	//set variables to input values....
 $fname1=$_POST['userfname'];
 //print_r($fname1);
 $lname1=$_POST['userlname'];
 $uname1=$_POST['username'];
 $mobile1=$_POST['usertelno'];
 $uemail1=$_POST['useremail'];
 //$genderr=$_POST['gender1'];
//print_r( $genderr);

if (isset($_POST['gender1'])) 
		{
			$genderr=$_POST['gender1'];
			//print_r( $genderr);
		}

if(isset($_POST['check']))
	{	
		$uhobbies=$_POST['check'];
		$checkall="";
		foreach($uhobbies as $arrayvalues)
			{
				$checkall.=$arrayvalues.",";
			}
	}
 
 $image1=$_FILES['userimages']['name'];
 $folder1="reg_image/";
 $path1=$folder1."/".$image1;
 move_uploaded_file($_FILES['userimages']['tmp_name'],$path1);
 if(isset($_POST['gender2']))
 {
 $genderr2=$_POST['gender2'];
 }
//how to validate registration form...
if(empty($fname1))
{
	echo "what is your first name";
}
elseif(empty($lname1))
{
	echo "what is your last name";
}
elseif(empty($uname1))
{
	echo "what is your username";
}
elseif(empty($mobile1))
{
	echo "what is your mobile number";
}
elseif(empty($uemail1))
{
	echo "what is your email_id";
}
elseif(empty($genderr))
{
	echo "what is your gender";
}
elseif(empty($uhobbies))
{
	echo "what is your hobbies";
}
elseif(empty($image1))
{
	echo "your image is required";
}
elseif(empty( $genderr2))
{
	echo "your subscription is required";
}
else
{
	//select query...
$select1="SELECT * FROM outcome_records WHERE email_id='".$uemail1."'";
$selquery=mysqli_query($conn,$select1);
$row=mysqli_num_rows($selquery);
if($row>0)
{
	echo "This email_id is already exist";
}
else
{
//insert query...

$reg1="INSERT INTO outcome_records (fname,lname,uname,telephone,email_id,gender,hobbies,images,suscript) 
VALUES('$fname1','$lname1','$uname1','$mobile1','$uemail1','$genderr','$checkall','$image1','$genderr2')";
$query1=mysqli_query($conn,$reg1);

header('location:http://localhost/outcome/registration2.php');
}
}


}

?>

<!DOCTYPE html>
<htmls
<head>
<style>
</style>
</head>
<body>
<h1><u><i>Registration-form</i></u></h1>
<?php //print_r($_POST['check']);?>
<form action="" method="POST" enctype="multipart/form-data">
First Name:  <input type="text" name="userfname" value="<?php if(isset($_POST['userfname'])){echo $fname1;}?>"><br><br>
Last Name: <input type="text" name="userlname" value="<?php if(isset($_POST['userlname'])){echo $lname1;}?>"><br><br>
User Name: <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $uname1;}?>"><br><br>
Telephone: <input type="tel" name="usertelno" value="<?php if(isset($_POST['usertelno'])){echo $mobile1;}?>"><br><br>
User Email: <input type="email" name="useremail" value="<?php if(isset($_POST['useremail'])){echo $uemail1;}?>"><br><br>
Gender:  <input type="radio" name="gender1" value="Female" <?php if(isset($_POST['gender1'])){  if($_POST['gender1']=="Female"){echo "checked"; }}?>>Female
         <input type="radio" name="gender1" value="Male" <?php if(isset($_POST['gender1'])){  if($_POST['gender1']=="Male"){echo "checked"; }}?>>Male
		 <input type="radio" name="gender1" value="Other" <?php if(isset($_POST['gender1'])){  if($_POST['gender1']=="Other"){echo "checked"; }}?>>Other<br><br>
		 
Hobbies: <input type="checkbox" name="check[]" value="Cricket" <?php if(isset($_POST['check'][0])){  if($_POST['check'][0]=="Cricket"){echo 'checked'; }}?>>Cricket
         <input type="checkbox" name="check[]" value="Football" <?php if(isset($_POST['check'][1])){  if($_POST['check'][1]=="Football"){echo 'checked'; }}?>>Football
         <input type="checkbox" name="check[]" value="Hockey" <?php if(isset($_POST['check'][2])){  if($_POST['check'][2]=="Hockey"){echo 'checked'; }}?>>Hockey
         <input type="checkbox" name="check[]" value="Badminton" <?php if(isset($_POST['check'][3])){  if($_POST['check'][3]=="Badminton"){echo 'checked'; }}?>>Badminton
         <input type="checkbox" name="check[]" value="Tennis" <?php if(isset($_POST['check'][4])){  if($_POST['check'][4]=="Tennis"){echo 'checked'; }}?>>Tennis<br><br>		 
Images: <input type="file" name="userimages"><br><br>
Subscription: <input type="radio" name="gender2" value="YES" <?php if(isset($_POST['gender2'])){  if($_POST['gender2']=="YES"){echo "checked"; }}?>>YES
              <input type="radio" name="gender2" value="NO" <?php if(isset($_POST['gender2'])){  if($_POST['gender2']=="NO"){echo "checked"; }}?>>NO<br><br><br>
              <input type="submit" name="submit" value="Submit">&nbsp &nbsp  &nbsp &nbsp
            <?php echo '<b><a href="userlogin_page.php">Logout</a></b>'; ?>			  
</form>
</body>
</html>