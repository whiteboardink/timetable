

<?php
require_once('db_connection.php');

if(isset($_POST['add']))
{
  $Name= $_POST["sname"];
  $Department = $_POST["department"];
  $Semester = $_POST["semester"];
  
  mysqli_query($con,"insert into subjects(department,s_name,semester) values ('$Department','$Name','$Semester')");
  
  if(mysqli_affected_rows($con) > 0)
  {
     header("Location:index1.php");
    //echo "<a href="index.html">Go Back</a>";
  } 
  else 
  {
    echo "Subject NOT Added<br />";
    echo mysqli_error ($con);
  }
}
?>