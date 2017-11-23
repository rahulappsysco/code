<?php 
session_start();
include('reg_database.php');
$pqr=$_SESSION['id'];
//select query......
$selectf="SELECT * FROM outcome_records WHERE id='$pqr'";
$selqueryf=mysqli_query($conn,$selectf);
$rowf=mysqli_num_rows($selqueryf);
$fetch1=mysqli_fetch_assoc($selqueryf);
$fname=$fetch1['fname'];
$lname=$fetch1['lname'];
$uname=$fetch1['uname'];
$telephone=$fetch1['telephone'];
$email_id=$fetch1['email_id'];
$gender=$fetch1['gender'];
$hobbies=$fetch1['hobbies'];
$abc=explode(",",$hobbies);
$images=$fetch1['images'];
$suscript=$fetch1['suscript'];

if(isset($_POST['submit']))
{
	$fname=$_POST['userfname'];
	$lname=$_POST['userlname'];
	$uname=$_POST['username'];
	$telephone=$_POST['usertelno'];
	$email_id=$_POST['useremail'];
	//$gender=$_POST['gender1'];
	if (isset($_POST['gender1'])) 
		{
			$gender=$_POST['gender1'];
			//print_r( $genderr);
		}
	//$hobbies=$_POST['check'];
	if(isset($_POST['check']))
	{	
		$hobbies=$_POST['check'];
		$xyz="";
		foreach($hobbies as $arrayvalues)
			{
				$xyz.=$arrayvalues.",";
			}
	}
//$images=$_POST['userimages'];
 $images=$_FILES['userimages']['name'];
 $folder1="reg_image/";
 $path1=$folder1."/".$images;
 move_uploaded_file($_FILES['userimages']['tmp_name'],$path1);
//$suscript=$_POST['gender2'];
 if(isset($_POST['gender2']))
 {
 $suscript=$_POST['gender2'];
 }
	
$updates="UPDATE outcome_records SET fname='$fname',lname='$lname',uname='$uname',telephone='$telephone', email_id='$email_id',gender='$gender',hobbies='$xyz',images='$images',suscript='$suscript'
 WHERE id='$pqr'";

$queryup=mysqli_query($conn,$updates);

header('location:http://localhost/outcome/ufetch.php');


}




?>


<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<h1><u><i>Registration-form</i></u></h1>
<img src="reg_image/<?php echo $fetch1['images']; ?> " width='200' height='200'><br><br>
<?php //print_r($_POST['check']);?>
<form action="" method="POST" enctype="multipart/form-data">
First Name:  <input type="text" name="userfname" value="<?php echo $fname; ?>"><br><br>
Last Name: <input type="text" name="userlname" value="<?php echo $lname; ?>"><br><br>
User Name: <input type="text" name="username" value="<?php echo $uname; ?>"><br><br>
Telephone: <input type="tel" name="usertelno" value="<?php echo $telephone; ?>"><br><br>
User Email: <input type="email" name="useremail" value="<?php echo $email_id; ?>"><br><br>
Gender:  <input type="radio" name="gender1" value="Female" <?php if($fetch1['gender']=="Female"){echo "checked"; }?>>Female
         <input type="radio" name="gender1" value="Male" <?php if($fetch1['gender']=="Male"){echo "checked"; }?>>Male
		 <input type="radio" name="gender1" value="Other" <?php if($fetch1['gender']=="Other"){echo "checked"; }?> >Other<br><br>
		 
Hobbies: <input type="checkbox" name="check[]" value="Cricket" <?php if(in_array("Cricket",$abc)) echo 'checked'; ?>>Cricket
         <input type="checkbox" name="check[]" value="Football" <?php if(in_array("Football",$abc)) echo 'checked'; ?>>Football
         <input type="checkbox" name="check[]" value="Hockey" <?php if(in_array("Hockey",$abc)) echo 'checked'; ?>>Hockey
         <input type="checkbox" name="check[]" value="Badminton" <?php if(in_array("Badminton",$abc)) echo 'checked'; ?>>Badminton
         <input type="checkbox" name="check[]" value="Tennis" <?php if(in_array("Tennis",$abc)) echo 'checked'; ?>>Tennis<br><br>		 
Images: <input type="file" name="userimages"><br><br>
Subscription: <input type="radio" name="gender2" value="YES" <?php if($fetch1['suscript']=="YES"){echo "checked"; }?>>YES
              <input type="radio" name="gender2" value="NO" <?php if($fetch1['suscript']=="NO"){echo "checked"; }?>>NO<br><br>
              <input type="submit" name="submit" value="UPDATE">&nbsp &nbsp  &nbsp &nbsp
			  <?php echo '<b><a href="userupdate_records.php">Check Update Records</a></b>'; ?>&nbsp &nbsp  &nbsp &nbsp
<?php echo '<b><a href="userlogin_page.php">Logout</a></b>'; ?>
			  
			  
</form>
</body>
</html>





















