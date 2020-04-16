<?php 
    session_start();
    if(isset($_GET['log']))
    {
        session_destroy();
        header("location:we.php");
    }
 
?>