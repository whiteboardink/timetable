<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
   
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">TEACHER SUBJECT COMBINATION</h1>
          </div>
        </div>
    

    <!--<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-right">
            <form id="login" method="POST" action="ts_comb.php"  class="well">
                  
                  <button name="select_teacher" type="submit" class="btn btn-default btn-block">SELECT TEACHER</button>
                   </form>
                 
                   <form id="login1" method="POST" action="ts_comb.php"  class="well">
                  <button name="select_subject" type="submit" class="btn btn-default btn-block">SELECT SUBJECT</button>
              </form>
          </div>
        </div>
      </div>
    </section>-->

    <div class="container-fluid">
  <div class="row">
      
       <!-- <div class="col-md-8 text-right">
          
        <button type="button"  onclick="submitForm('ts_comb.php')"class="btn btn-warning custom-button-width .navbar-right">SELECT TEACHER</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-danger custom-button-width .navbar-right">SELECT SUBJECT</button>
      
      </div>-->
     


      <form enctype="multipart/form-data" method="post" action="ts.php">
                  <div class="form-group">
                    <label for="bookno">Teacher</label>
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
                  </div>
                  <div class="form-group">
                    <label for="bktitle">Subject</label>
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
                  </div>
                  <div class="form-group">
                    <label for="bktitle">Class</label>
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
                  </div>

                  <button type="submit" class="btn btn-default main-color-bg btn-login col-md-4 col-md-offset-4">Submit</button>
                </form>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php
          require_once('/opt/lampp/htdocs/athira/db_connection.php');
?>



