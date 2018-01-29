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
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once('db_connection.php');
$table_count=8;
$hour_count=6;
$day_count=5;
$tables = array(array(array()));
  for($i=0;$i<$table_count;$i++)
  { 
    for($j=0;$j<$day_count;$j++)
    { 
      for($k=0;$k<$hour_count;$k++)
      { 
        $tables[$i][$j][$k]=0;
      }
    } 
      
  }

/*
  $count=0;
  for($i=0;$i<$table_count;$i++)
  { 
    echo "<br>";
    echo "<br>";
    for($j=0;$j<$day_count;$j++)
    { 
      echo "<br>";
      for($k=0;$k<$hour_count;$k++)
      { 
        echo ($tables[$i][$j][$k]);
      }
    } 
      
  }  */

  for($i=0;$i<8;$i++)
  { 
    for($j=0;$j<5;$j++)
    { 
      for($k=0;$k<6;$k++)
      { 
        ///////////////////////
        //first class poool
        if($i==0)
        {
          $tables[$i][$j][$k]=rand(1,6);
          $count++;
          for($l=0;$l<8;$l++)
          { 
             //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //if equals,,, conflict of teacher comes into play ;) pinnallah 
             if($count<=100)  //till hundered vare random function call cheyyum....nnitum kittilenkil povan parayum.
                  $k--;
            }
          }
        }
        ///////////////////////
        //second class poool
        if($i==1)
        {
          $tables[$i][$j][$k]=rand(7,12);
          $count++;
          for($l=0;$l<8;$l++)
          { 
            //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=200)
                $k--;
            }
          }
        }
        ///////////////////////
        //Third class poool
        if($i==2)
        {
          $tables[$i][$j][$k]=rand(13,18);
          $count++;
          for($l=0;$l<8;$l++)
          { 
            //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=300)
               $k--;
            }
          }
        }
        ///////////////////////
        //fourth class poool
        if($i==3)
        {
          $tables[$i][$j][$k]=rand(19,24);
          $count++;
          for($l=0;$l<8;$l++)
          { 
             //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=400)
                $k--;
            }
          }
        }
        ///////////////////////
        //5th class poool
        if($i==4)
        {
          $tables[$i][$j][$k]=rand(25,33);
          $count++;
          for($l=0;$l<10;$l++)
          { 
             //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=500)
                $k--;
            }
          }
        }
        ///////////////////////
        //6th class poool
        if($i==5)
        {
          $tables[$i][$j][$k]=rand(34,41);
          $count++;
          for($l=0;$l<10;$l++)
          { 
             //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=600)
                $k--;
            }
          }
        }
        ///////////////////////
        //7th class poool
        if($i==6)
        {
          $tables[$i][$j][$k]=rand(42,49);
          $count++;
          for($l=0;$l<10;$l++)
          { 
             //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=700)
                $k--;
            }
          }
        }
        ///////////////////////
        //8th class poool
        if($i==7)
        {
          $tables[$i][$j][$k]=rand(50,58);
          $count++;
          for($l=0;$l<8;$l++)
          { 
             //$dup_check teacher
            $duplicates1=0;
            $duplicates2=0;
            if($i!=$l)
            {
            $dup1=$tables[$i][$j][$k];
            $dup2=$tables[$l][$j][$k];
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup1'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates1=$row['teacher_id']; 
                }
            $result = mysqli_query($con,"SELECT teacher_id from ts_combination where comb_id='$dup2'");
            while($row = mysqli_fetch_array($result))
                {
                 $duplicates2=$row['teacher_id']; 
                }
            if($duplicates1==$duplicates2) //echo "conflict";
              if($count<=800)
                $k--;
            }
          }
        }
      }
    } 
      
  }
//printing
  /*
  for($i=0;$i<$table_count;$i++)
  { 
    echo "<br>";
    echo "<br>";
    for($j=0;$j<$day_count;$j++)
    { 
      echo "<br>";
      for($k=0;$k<$hour_count;$k++)
      { 
        echo ($tables[$i][$j][$k]);
        echo " ";
      }
    } 
      
  }  */
  echo $count." times called rand() function";
  if($count < 800)
    echo '        
<script type="text/javascript">
alert("TimeTable Generated Successfully");

</script>';
  // echo "<h2>".alert("TimeTable Generated Successfully")."</h2>";
  else
    echo "<h2>"."TimeTable Generated Successfully with errors (Conflict of teachers may comes into play)"."</h2>";
  //////Inserting to table1
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[0][$q][0];
        $hour2 = $tables[0][$q][1];
        $hour3 = $tables[0][$q][2];
        $hour4 = $tables[0][$q][3];
        $hour5 = $tables[0][$q][4];
        $hour6 = $tables[0][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
        ///////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ////////////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ///////////////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        ///////////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        /////////////////////////////////////
  }
  $query ="INSERT INTO table1 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }
   //////Inserting to table2
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[1][$q][0];
        $hour2 = $tables[1][$q][1];
        $hour3 = $tables[1][$q][2];
        $hour4 = $tables[1][$q][3];
        $hour5 = $tables[1][$q][4];
        $hour6 = $tables[1][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
  }
  $query ="INSERT INTO table2 (h1,h2,h3,h4,h5,h6) VALUES ( '".$hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }
   //////Inserting to table3
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[2][$q][0];
        $hour2 = $tables[2][$q][1];
        $hour3 = $tables[2][$q][2];
        $hour4 = $tables[2][$q][3];
        $hour5 = $tables[2][$q][4];
        $hour6 = $tables[2][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
      /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
    
  }
  $query ="INSERT INTO table3 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }
 //////Inserting to table4
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[3][$q][0];
        $hour2 = $tables[3][$q][1];
        $hour3 = $tables[3][$q][2];
        $hour4 = $tables[3][$q][3];
        $hour5 = $tables[3][$q][4];
        $hour6 = $tables[3][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
      /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
    
  }
  $query ="INSERT INTO table4 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }

  //////Inserting to table5
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[4][$q][0];
        $hour2 = $tables[4][$q][1];
        $hour3 = $tables[4][$q][2];
        $hour4 = $tables[4][$q][3];
        $hour5 = $tables[4][$q][4];
        $hour6 = $tables[4][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
      /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
    
  }
  $query ="INSERT INTO table5 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }

  //////Inserting to table6
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[5][$q][0];
        $hour2 = $tables[5][$q][1];
        $hour3 = $tables[5][$q][2];
        $hour4 = $tables[5][$q][3];
        $hour5 = $tables[5][$q][4];
        $hour6 = $tables[5][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
      /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
    
  }
  $query ="INSERT INTO table6 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }
  //////Inserting to table7
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[6][$q][0];
        $hour2 = $tables[6][$q][1];
        $hour3 = $tables[6][$q][2];
        $hour4 = $tables[6][$q][3];
        $hour5 = $tables[6][$q][4];
        $hour6 = $tables[6][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
      /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
    
  }
  $query ="INSERT INTO table7 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }

  //////Inserting to table8
  $q=-1;
  for($z=0;$z<5;$z++)
  {
    $q++;
  $DataArr = array();
        foreach($tables as $row)
  {
        $hour1 = $tables[7][$q][0];
        $hour2 = $tables[7][$q][1];
        $hour3 = $tables[7][$q][2];
        $hour4 = $tables[7][$q][3];
        $hour5 = $tables[7][$q][4];
        $hour6 = $tables[7][$q][5];

        //$DataArr[] = "('$hour1', '$hour2', '$hour3','$hour4','$hour5','$hour6')";
      /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour1'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour11=$row['short_name'];
        }
        //////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour2'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour22=$row['short_name'];
        }
        /////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour3'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour33=$row['short_name'];
        }
        ///////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour4'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour44=$row['short_name'];
        }
        ////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour5'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour55=$row['short_name'];
        }
        //////////////////////////////////////////////
        $sql="select short_name from ts_combination where comb_id='$hour6'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
         $hour66=$row['short_name'];
        }
        //////////////////////////////////////////////
    
  }
  $query ="INSERT INTO table8 (h1,h2,h3,h4,h5,h6) VALUES ( '". $hour11."','".$hour22."','".$hour33."','".$hour44."','".$hour55."','".$hour66."' )";
        mysqli_query($con, $query);
  }



  //header('Location: showtimetable.php');
?>