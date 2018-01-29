<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX</title>
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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          
        </div>
      </div>
    </header>

    

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="subject_updation.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Subject Updation</a>
              <a href="view.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Generate Timetable</a>
              <a href="ts_comb.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Teacher Subject Combination</a>
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Send Notification</a>
            </div>

            
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div>
                    <?php
                    require_once('db_connection.php');
                    $teacher=$_POST['t'];
                    $subject=$_POST['s'];
                    $class=$_POST['class'];
                    $result=mysqli_query($con,"insert into ts_combination(t_name,s_name,class_id) values ('$teacher','$subject','$class')");
                    if($result)
                        {
                          echo "Combination Added ";
                          header("refresh:5; url=ts_comb.php");
                        }
                        else
                        {
                          echo "Database Error";
                          header("refresh:5; url=ts_comb.php");
                        }
                    $result = mysqli_query($con,"SELECT * FROM ts_combination");
                    echo "<table class='table table-bordered table-hover' border='2'>
                                  <tr>
                                  <th>Teacher</th>
                                  <th>Subject</th>
                                  <th>Sem</th>
                                  </tr>";
                                  if (mysqli_num_rows($result)==0)
                                  echo " Database is empty!!!";
                                  while($row = mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td>" . $row['t_name'] . "</td>";
                                    echo "<td>" . $row['s_name'] . "</td>";
                                    echo "<td>" . $row['class_id'] . "</td>";
                                    }
                                  echo "</table>";

                    ?>


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