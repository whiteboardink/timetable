

<?php
require_once('db_connection.php');

if(isset($_POST['delete']))
{echo "hiiii";
  
 // $Subject = $_POST["subjectt"];
  extract($_POST);
  
  mysqli_query($con,"DELETE FROM `subjects` WHERE `s_name` = '$Subject'");
  
  if(mysqli_affected_rows($con) > 0)
  {
    echo "deleted";
    // header("Location:index.html");
    //echo "<a href="index.html">Go Back</a>";
  } 
  else 
  {
    echo "Subject NOT deleted<br />";
    echo mysqli_error ($con);
  }
}
?>