<?php
require_once('/opt/lampp/htdocs/athira/db_connection.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $uname=$_POST['username'];
    $passwd=$_POST['password'];  
    {

        $query= $con->query("SELECT * FROM users WHERE username='$uname'");
        $result=$query->fetch_array();
        if($passwd==$result['password'])
           header("Location:index.html");
            //echo "</br>succesfull login";
        else
            echo "incorrect username and password..!!!";
    }
}
?>
