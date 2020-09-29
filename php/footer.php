<?php
    if(isset($conn)){
        pg_close($conn);
    }
?>