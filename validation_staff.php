<?php
require_once('/opt/lampp/htdocs/athira/db_connection.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $uname=$_POST['username'];
    $passwd=$_POST['password'];  
    {

        $query= $con->query("SELECT * FROM userr WHERE uname='$uname'");
        $result=$query->fetch_array();
        if($passwd==$result['password'])
           header("Location:index_staff.php");
            //echo "</br>succesfull login";
        else
            echo "incorrect username and password..!!!";
    }
}
?>
