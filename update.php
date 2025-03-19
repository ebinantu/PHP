<?php
include('connect.php');
if(isset($_POST['submit']))
{   $regno =$_POST['regno'];
    $subname = $_POST['subname'];
    $mark = $_POST['mark'];
	$query = "update student set $subname = $mark where regno = $regno;";
	$result = mysqli_query($db_handle,$query);
	if($result)
	{
		echo "<br><br><center><h3>Updation Completed</h3></center>";

	}
	else
	{
		echo "failed to Update";

	}
}
?>