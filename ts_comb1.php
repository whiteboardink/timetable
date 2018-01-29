<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEACHER SUBJECT COMBINATION</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="mian-color-bg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
       
       <!-- <div id="navbar" class="collapse navbar-collapse">-->
      <!-- <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">-->

          <ul class="nav navbar-nav navbar-right">
             
           <li><a href="" class="list-group-item active main-color-bg">Send Notification</a></li>
                      <li><a href="view.html" class="list-group-item active main-color-bg">Generate Timetable</a></li>
            <li><a href="ts_comb.php" class="list-group-item active main-color-bg">Teacher Subject Combination</a></li>
            <li><a href="subject_updation.html" class="list-group-item active main-color-bg">Subject Updation</a></li>
            <li><a href="view.html" class="list-group-item active main-color-bg">Logout</a></li>
          </ul>
          <!--</div>
          
        </div>
      </div>
    </header>-->
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
<form>
<a href="ts_comb1.php" >view tables</a>
<!--<a href="ts_comb1.php" >view combination</a>-->
</form>
          </div>
          
        </div>
      </div>
    </header>
    <div class="col-md-3">
  <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">TEACHERS</h3>
                </div>
                <div class="panel-body">
                <?php   
   require_once('db_connection.php');
                   
                    $result = mysqli_query($con,"SELECT * FROM teacher");
                    if($result)
                        {
                          //echo "Subject Added ";
                          //header("refresh:5; url=a.html");
                        }
                        else
                        {
                          echo "Database Error";
                          header("refresh:5; url=a.html");
                        }
                   
                    echo "<table class='table table-bordered table-hover' border='2'>
                                  <tr>
                                  <th>Teacher</th>
                                  <th>Teacher_id</th>
                                  </tr>";
                                  if (mysqli_num_rows($result)==0)
                                  echo " Database is empty!!!";
                                  while($row = mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td>" . $row['t_name'] . "</td>";
                                    echo "<td>" . $row['tid'] . "</td>";
                                    }
                                  echo "</table>";

                    ?>
                </div>
              </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">COMBINATION</h3>
                </div>
                <div class="panel-body">
                <?php   
   require_once('db_connection.php');
                   
                    $result = mysqli_query($con,"SELECT * FROM ts_combination");
                    if($result)
                        {
                          //echo "Subject Added ";
                          //header("refresh:5; url=a.html");
                        }
                        else
                        {
                          echo "Database Error";
                          header("refresh:5; url=a.html");
                        }
                   
                    echo "<table class='table table-bordered table-hover' border='2'>
                                  <tr>
                                  <th>Teacher</th>
                                  <th>T_id</th>
                                  <th>Subject</th>
                                  <th>c_id</th>
                                  </tr>";
                                  if (mysqli_num_rows($result)==0)
                                  echo " Database is empty!!!";
                                  while($row = mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td>" . $row['t_name'] . "</td>";
                                    echo "<td>" . $row['teacher_id'] . "</td>";
                                    echo "<td>" . $row['short_name'] . "</td>";
                                    echo "<td>" . $row['comb_id'] . "</td>";
                                    }
                                  echo "</table>";

                    ?>
                </div>
              </div>
 </div>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-0">
            <div class="list-group">
              <!--<a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="subject_updation.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Subject Updation</a>
              <a href="view.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Generate Timetable</a>
              <a href="ts_comb.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Teacher Subject Combination</a>
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Send Notification</a>
           --> </div>

            
          </div>
          
               <div class="col-md-4">
              <div class="panel panel-default">
                 <div class="panel-heading main-color-bg">
                <h2 class="panel-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEACHER SUBJECT COMBINATION</h2>
              </div>
              <div class="panel-body">
                   <div class="col-md-12 col-md-offset-0">
                          <form id="login" action="ts.php" class="well" method="post">
                  <div class="form-group">
                   <label>Teacher</label>
                 
                           
     
        <fieldset>
         <p>
          
            <select id="element_1" name="t" class="form-control" required>
                        <option value="" selected="selected"></option>

                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', '', 'timetable')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select t_name from teacher");
                                while ($row = $result->fetch_assoc()) {

                                              unset($tname);
                                              $tname = $row['t_name'];
                                            echo '<option value="'.$tname.'">'.$tname.'</option>';

                                            }
                              echo "</select>";
                              mysqli_close($conn);
                              ?>
                      
          </select>
         </p>
        </fieldset>
                     
                  </div>
                  <div class="form-group">
                   <label>Subject</label>
                 
                           
     
        <fieldset>
         <p>
          <select id="element_1" name="s" class="form-control" required>
                        <option value="" selected="selected"></option>

                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', '', 'timetable')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select s_name from subjects");
                                while ($row = $result->fetch_assoc()) {

                                              unset($sub);
                                              $sub = $row['s_name'];
                                            echo '<option value="'.$sub.'">'.$sub.'</option>';

                                            }

                              echo "</select>";
                              mysqli_close($conn);
                              ?>
                      


          </select>
         </p>
        </fieldset>
                     
                  </div>
                   <div class="form-group">
                   <label>Class</label>
                 
                           
     
        <fieldset>
         <p>
          
            <select id="element_1" name="class" class="form-control" required>
                        <option value="" selected="selected"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
            </select>

         </p>

        </fieldset>
                     
             </div>      
             <label>Teacher id</label><input type="text" name="t_id" class="form-control" ><br/>
             <label>Combination id</label>
             <input type="text" name="c_id" class="form-control" ><br/>
             <input type="submit"  value="SUBMIT" class="btn btn-default btn-block">  
              <!--  <button type="submit" class="btn btn-default main-color-bg btn-login col-md-4 col-md-offset-4">Submit</button>-->
                 
                    </form>
               
                 
          </div>
                 </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

   <!-- <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>-->

    
  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>