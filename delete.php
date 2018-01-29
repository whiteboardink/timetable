

                  <?php
                  require_once('/opt/lampp/htdocs/athira/db_connection.php');
                  
                  if(isset($_POST['subject']))
                  {
                  $Semester = $_POST['semester'];

                  $query= "SELECT s_name FROM subjects WHERE semester='$Semester'";
                  $result = mysqli_query($con,$query);
                 while($row=mysqli_fetch_array($result))
                    {
            
                        echo $row['s_name'];
                      //echo "<option value='".$result['s_name']."'> " .$result['s_name'] ."</option>";
                    
                  }
                  }
                  else
                  {
                    echo "not ";
                  }

                  ?>
              