<?php 
include('reg_database.php');
//$deleteq="SELECT * FROM outcome_records WHERE id=7";
//$delquery=mysqli_query($conn,$selectf);
//$deleterow=mysqli_num_rows($selqueryf);
//$deletefetch=mysqli_fetch_assoc($selqueryf);

//delete query...
$delete1 = "DELETE FROM outcome_records WHERE id=6";
$querydel=mysqli_query($conn,$delete1);

?>