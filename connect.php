<?php
  
   $username = "root";
   $pass ="";
   $server = "localhost";
   $database="studentdata";
   $db_handle = mysqli_connect($server,$username,$pass);
    if(!$db_handle){
    	die("could not connect".mysqli_close_error());
    }
    else
    {
    	echo '<script>console.log("successfully connected\n"); </script>';
    }
  $db_found = mysqli_select_db($db_handle,$database);
  if($db_found){
  	echo '<script>console.log("database Found\n"); </script>';
  }
  else{
  	die("database not found");
  }
  
  ?>