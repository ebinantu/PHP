<?php
   include('connect.php');

  
   if(isset($_POST['submit']))
   {

   $regno =$_POST['regno'];
   $name=$_POST['name'];
   $mark1=$_POST['mark1'];
   $mark2=$_POST['mark2'];
   $mark3 = $_POST['mark3'];
   $query = "INSERT INTO student(regno,name,mark1,mark2,mark3) VALUES ('$regno','$name','$mark1','$mark2','$mark3');";
   $result = mysqli_query($db_handle,$query);
   
   if($result)
   {
   	echo 'Successfully Submitted';
   }
   else 
   {
   	echo 'Not inserted';
   }
   }
   else
   {
   	echo '<script>alert("Your form is Not Submitted yet please Submit It") </script>';
   }
 ?>