<?php
require_once('db_connection.php');

if(isset($_POST['register']))
{
	$Name= $_POST["name"];
	$Email   = $_POST["email"];
	$Mobile = $_POST["mobile"];
	$Department = $_POST["department"];
	$UName  = $_POST["uname"];
	$Passwd   = $_POST["password"];
	//$t_id = $_POST["t_id"];
	
	mysqli_query($con,"insert into teacher(t_name,mobile,email,department) values ('$Name','$Mobile','$Email','$Department')");
	
	if(mysqli_affected_rows($con) > 0)
	{
		 mysqli_query($con,"insert into userr(uname,password) values ('$UName','$Passwd')");
		/*$r=mysqli_query($con,"select * from teacher where t_name='$Name' and email='$Email')");
		
		 while($row = mysqli_fetch_array($r))
          {                      
 			$rr = $row['tid'];
 		//echo $rr;
                               }*/
		$sql="select tid from teacher where t_name='$Name' and email='$Email'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['tid'];
}
echo '        
<script type="text/javascript">
alert("Remember your registration id");
alert("' . $hour66 . '");
location="login_signup.html";
</script>';
/*echo '<script language="javascript">';
       
echo 'alert("Remember your registration id")';
echo '</script>';

        echo '<script language="javascript">';

echo 'alert("' . $hour66 . '")';
echo location="REDIRECTION_PAGE.php";
echo '</script>';*/

       // redirect('login_signup.html');
       // $hai = "thi";
     // echo "<script type='text/javascript'>alert('$hai'." ".$hour66');</script>";
             // echo $hour66;
         /* $sql="select tid from teacher where t_name='roufina' and email='roufi@gmail.com'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }*/
 //header("refresh:5; url=staff_details_insert.php");
		//header("Location:login_signup.html");
		//echo "<p>Employee Added</p>";
		//echo "<a href="index.html">Go Back</a>";
	} 
	else 
	{
		echo "Employee NOT Added<br />";
		echo mysqli_error ($con);
	}
	/*if ($conn->query($sql) === TRUE) 
	{
	    echo "New record inserted";
	} 
	else 
	{
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();*/
}
?>