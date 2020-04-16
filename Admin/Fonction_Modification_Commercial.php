
        <?php
session_start();
require_once('Connection.php');
//sélection de la base de données:
   $E_ID = $_POST['E_ID'];
   $UName = $_POST['UName'];
   $Password = $_POST['Password'];
 


 if(!mysqli_query($con,"UPDATE employee SET
                  UName = '$UName',
                  Password = '$Password'
                  WHERE E_ID = '$E_ID' "))

{
              echo"La modification à échouée";
}
  else
  {
      echo"La modification à été correctement effectuée ";
    
  }
                  ?>


