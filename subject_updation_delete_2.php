<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUBJECT UPDATION DELETE</title>
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
          <!--<a class="navbar-brand" href="#">AdminStrap</a>-->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <!--<ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="generate.html">Generate Timetable</a></li>
            <li><a href="notification.html">Notification</a></li>
            <li><a href="allocation.html">Staff Allocation</a></li>
             <li><a href="period.html">Staff Period Details</a></li>
            <li><a href="staff_noti.html">Staff Notification</a></li>
            <li><a href="staff_det.html">View Staff Details</a></li>
          </ul>-->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
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
              <!--<a href="class_updation.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Class Updation </a>
              <a href="staff_updation.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Staff Updation</a>-->
              <a href="subject_updation.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Subject Updation</a>
              <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Generate Timetable</a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Teacher Subject Combination</a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Send Notification</a>
            </div>

            
          </div>
          
               <div class="col-md-9">
              <!-- Latest Users -->
              <div class="panel panel-default">
                 <div class="panel-heading main-color-bg">
                <h2 class="panel-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBJECT UPDATION</h2>
              </div>
              <div class="panel-body">
                   <div class="col-md-6 col-md-offset-4">
                           <form id="login" action="subject_updation_delete.php" class="well" method="post">
        
                  <div class="form-group">
                   <label>Semester</label>
                 
                           
     
        <fieldset>
         <p>
          <select name="semester" class="form-control">
            <option>--Select Semester--</option>
            <option value="1 & 2">1 & 2</option>
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
                  <input type="submit" name="list"  value="LIST SUBJECT" class="btn btn-default btn-block">
                   <label>Subject</label><br/>
                    <select name="subjectt" class="form-control">
                     <?php
                  require_once('/opt/lampp/htdocs/athira/db_connection.php');
                  
                  if(isset($_POST['list']))
                  {
                  $Semester = $_POST['semester'];

                  $query= "SELECT s_name FROM subjects WHERE semester='$Semester'";
                  $result = mysqli_query($con,$query);
                 while($row=mysqli_fetch_array($result))
                    {
            
                      //  echo $row['s_name'];
                      echo "<option value='".$row['s_name']."'> " .$row['s_name'] ."</option>";
                    
                  }
                  }
                  else
                  {
                    echo "not ";
                  }

                  ?>
                 </select><br>
                  
                   
                  <input type="submit" name="delete"  value="DELETE" class="btn btn-default btn-block">   

                           

<?php
require_once('db_connection.php');

if(isset($_POST['delete']))
{
  
  $Subject = $_POST["subjectt"];
 
  mysqli_query($con,"DELETE FROM subjects WHERE s_name = '$Subject'");
  
  if(mysqli_affected_rows($con) > 0)
  {
    echo "deleted";
   
  } 
  else 
  {
    echo "Subject NOT deleted<br />";
    echo mysqli_error ($con);
  }
}
?>
                             </form>
                
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

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

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