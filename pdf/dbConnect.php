<?php
   define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'tiger');
   define('DB_DATABASE', 'timetable');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die('Database has encountered an error!!! Please Try Again...');

?>
