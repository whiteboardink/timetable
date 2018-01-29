<?php
require_once('db_connection.php');

if(isset($_POST['submit']))
{
  
  $Subject = $_POST["subjectt"];
 
  mysqli_query($con,"DELETE FROM subjects WHERE s_name = '$Subject'");
  
  if(mysqli_affected_rows($con) > 0)
  {
    echo "deleted";
   
  } 
  else 
  {
    echo "Subject NOT deleted<br />";
    echo mysqli_error ($con);
  }
}
?>