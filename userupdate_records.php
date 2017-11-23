<?php 
session_start();
include('reg_database.php');
$pqr=$_SESSION['id'];
$userrecords="SELECT * FROM outcome_records WHERE id='$pqr'";
$updatequery=mysqli_query($conn,$userrecords);
$updaterow=mysqli_num_rows($updatequery);
//print_r($updaterow);

//print_r($updatefetch);


?>

<DOCTYPE html>
<html>
<body>
<h1><u><i>User Update Records</i></u></h1>
<?php //print_r($updatefetch); ?><br><br>



<table width="1200" cellpadding=6celspacing=5 border=1 >
	<tr>
		<th>id</th>
		<th>First-Name</th>
		<th>Last-Name</th>
		<th>User-Name</th>
		<th>Telephone</th>
		<th>Email-id</th>
		<th>Gender</th>
		<th>Hobbies</th>
		<th>Image</th>
		<th>Subscription</th>
	</tr>
<?php 

while($updatefetch=mysqli_fetch_assoc($updatequery))
{
	?>
	<tr>
	    <td><?php echo $updatefetch['id'];?></td>
		<td><?php echo $updatefetch['fname'];?></td>
		<td><?php echo $updatefetch['lname'];?></td>
		<td><?php echo $updatefetch['uname'];?></td>
		<td><?php echo $updatefetch['telephone'];?></td>
		<td><?php echo $updatefetch['email_id'];?></td>
		<td><?php echo $updatefetch['gender'];?></td>
		<td><?php echo $updatefetch['hobbies'];?></td>
		<td><?php echo $updatefetch['images'];?></td>
		<td><?php echo $updatefetch['suscript'];?></td>
			
	</tr>
	
<?php	
//delete query...
$delete1 = "DELETE FROM outcome_records WHERE id='$pqr'";
$querydel=mysqli_query($conn,$delete1);
}
?>	
</table><br><br>


<?php echo '<b><a href="userlogin_page.php">Logout</a></b>'; ?>

</body>
</html>