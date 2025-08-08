<?php 

    $dbhost = "localhost";
    $dbusername = "root";
    $dbpass = '';
    $dbname = "dataiku";
    $timezone = "Asia/Kolkata";
    
    $con = mysqli_connect($dbhost,$dbusername,$dbpass);
    
    mysqli_select_db($con, $dbname);
    date_default_timezone_set($timezone);

?>