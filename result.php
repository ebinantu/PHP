<?php
include('connect.php');
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$query="select * from student where regno = $regno";
$result = mysqli_query($db_handle,$query);
if(mysqli_num_rows($result)>0)
{
  echo"<h1 align='center'><u>RESULT</u></h1>";
  echo "<br><br><table border='1' cellpadding='1' cellspacing='0' align='center'>";
  echo "<th>Name</th><th>RegisterNo</th> <th>Mark1</th><th>Mark2</th><th>Mark3</th>";
  while($record = mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo "<td>".$record["name"]."</td>";
    echo "<td>".$record["regno"]."</td>";
    echo "<td>".$record["mark1"]."</td>";
    echo "<td>".$record["mark2"]."</td>";
    echo "<td>".$record["mark3"]."</td>";
    echo " </tr>";

  }
 echo "</table>";
}
else
{
	echo "<br><br><h1>NO ROWS WHERE SELECTED</h1>";
}
}
?>

