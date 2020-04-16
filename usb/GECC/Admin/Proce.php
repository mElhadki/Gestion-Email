<?php 
require_once('Connection.php');
session_start();
    if(isset($_POST['A_Login']))
    {
       if(empty($_POST['A_Login']) || empty($_POST['A_Passw']))
       {
            header("location:Admin.php?Empt= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where A_Login='".$_POST['A_Login']."' and A_Passw='".$_POST['A_Passw']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['Users']=$_POST['A_Login'];
                header("location:Home.php");
            }
            else
            {
                header("location:Admin.php?Inval= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
?>

<?php 
 
