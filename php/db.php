<?php
   // $servername = "localhost";
    
    // $username = "root";
    // $password = "";
    // $dbname = "comments";
    // $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed" . mysqli_connect_error());
    // echo 'Connected!';

    $db = parse_url(getenv('DATABASE_URL'));
    $db["path"] = ltrim($db["path"], "/");
    $conn = pg_connect(getenv("DATABASE_URL"));
?>