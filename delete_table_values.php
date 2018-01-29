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
               <a href="delete_table_values.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">Delete table values</span> </a>
            <a href="generate.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true">Generate Timetable</span> </a>
              <a href="showtimetable.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Show Timetable</a>
            </div>

            
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"></h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                 <?php
require_once('db_connection.php');
$sql="DELETE from table1 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 1 Deleted";
      echo '<br>';
    }
  else
  {
    echo "Table 1 deletion encountered a problem";
  }
  $sql="DELETE from table2 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 2 Deleted";
         echo '<br>';
    }
  else
  {
    echo "Table 2 deletion encountered a problem";
  }
  $sql="DELETE from table3 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 3 Deleted";
         echo '<br>';
    }
  else
  {
    echo "Table 3 deletion encountered a problem";
  }
  $sql="DELETE from table4 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 4 Deleted";
      echo '<br>';
    }
  else
  {
    echo "Table 4 deletion encountered a problem";
  }
  $sql="DELETE from table5 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 5 Deleted";
      echo '<br>';
    }
  else
  {
    echo "Table 5 deletion encountered a problem";
  }
  $sql="DELETE from table6 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 6 Deleted";
      echo '<br>';
    }
  else
  {
    echo "Table 6 deletion encountered a problem";
  }
  $sql="DELETE from table7 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 7 Deleted";
      echo '<br>';
    }
  else
  {
    echo "Table 7 deletion encountered a problem";
  }
  $sql="DELETE from table8 where 1";
$result=mysqli_query($con,$sql);
if($result)
    {
      echo "Table 8 Deleted";
      echo '<br>';
    }
  else
  {
    echo "Table 8 deletion encountered a problem";
  }
  mysqli_close($con);
?>
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





