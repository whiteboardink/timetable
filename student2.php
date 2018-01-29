<?php
require_once('dd.php');

if(isset($_POST['insert']))
{
	$regno  = $_POST["regno_in"];
	$name   = $_POST["name_in"];
	$gender = $_POST["gender_in"];
	$mail   = $_POST["email_in"];
	
	
	
	$sql = "insert into student1(reg_no,name,gender,email) values ('$regno','$name','$gender','$mail')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$conn->close();
}
else if(isset($_POST['delete']))
{
	$regno = $_POST["regno_de"];
	
	
	$sql = "SELECT 1 FROM student1 WHERE reg_no = '$regno'";
	$result = $conn->query($sql);
	
	if($result->num_rows === 0){
		echo "No such record exists."; 	
	}	
	else{
		$sql = "delete from student1 where reg_no = '$regno'";
	
		if ($conn->query($sql) === TRUE) {	
   			 echo "Record deleted";
		}
    	else {
   			 echo "Error deleting record: " . $conn->error;
		}
	}
	$conn->close();
}
else if(isset($_POST['update']))
{
	$regno = $_POST["regno_up"];
	$name   = $_POST["name_up"];
	$gender = $_POST["gender_up"];
	$mail   = $_POST["email_up"];
	
	
	$sql = "SELECT 1 FROM student1 WHERE reg_no = '$regno'";
	$result = $conn->query($sql);
	
	if($result->num_rows === 0){
		echo "record not exists."; 	
	}	
	else{
	
		$sql = "update student1 set name = '$name',gender = '$gender',email = '$mail' where reg_no = '$regno'";
	
		if ($conn->query($sql) === TRUE) {	
   			 echo "Record updated";
		}
    	else {
   			 echo "Error updating record: " . $conn->error;
		}
	}
	
	$conn->close();
}	
else if(isset($_POST['display']))
{
	
	$sql = "select * from student1";
	
	$result = $conn->query($sql);
	echo "<table>
        <tr>
            <th> Reg_no </th>
            <th> Name </th>
            <th> Gender </th>
            <th> Email </th>
        </tr>";
	
	while($row = mysqli_fetch_array($result))
    {
    	
        echo "<tr>";
        echo "<td>".$row['reg_no']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['email']."</td>";
    }
     echo "</table>";
    $conn->close();
}

?>
	
	




<html>
	<body>
			<form method = "post">
			Register no:<input type = "text" name = "regno_in"/><br>
			Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "name_in" /><br>
			Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "gender_in"/><br>
			E mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "email_in"/><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="INSERT" name="insert">
			</form>
		<br/>
		<form method = "post">
			Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "name_up" /><br>
			Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "gender_up"/><br>
			E mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "email_up"/><br>
			Update where reg.no : <input type = "text" name = "regno_up"/><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="UPDATE" name="update"><br>
			</form>
		<br/>
		<form method = "post">
			Delete where reg.no : <input type = "text" name = "regno_de"/><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="DELETE" name="delete"><br>
			</form>		
		<br/>
		<br/>
		<form method = "post">
			<input type="submit" value="DISPLAY" name="display"><br>
			</form>		
		<br/>
	</body>
</html>
