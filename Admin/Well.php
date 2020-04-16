<?php
    session_start();
 
    if(isset($_SESSION['Users']))
    {
        echo ' Welcome  ' . $_SESSION['Users'].'<br/>';
        echo '<a href="Log.php?log">Log</a>';
    }
    else
    {
        header("location:Admin.php");
    }
 
?>