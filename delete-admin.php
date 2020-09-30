<?php
    require_once('php/db.php');

    $id=$_GET['id'];
 
    $sql5 = "DELETE FROM requeststore WHERE idstore='" . $id ;
    // . "' LIMIT 1"
    if(pg_query($conn, $sql5)){
        
        header("Location:admin.php");
        
    }
 
?>