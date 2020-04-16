
        <?php
session_start();
require_once('Connection.php');
//sélection de la base de données:

    $C_ID = $_POST['C_ID'];
   $C_origine = $_POST['C_origine'];
   $First_name = $_POST['First_name'];
   $Last_name = $_POST['Last_name'];
   $Middle_Name = $_POST['Middle_Name'];
   $Fonction = $_POST['Fonction'];
   $Company = $_POST['Company'];
   $Country = $_POST['Country'];
  $Phone_Number = $_POST['Phone_Number'];
  $interesse = $_POST['interesse'];
$Black_Liste = $_POST['Black_Liste'];
$Source =  $_POST['Source'];
$Category =  $_POST['Category'];
$Award =  $_POST['Award'];
$Expertise =  $_POST['Expertise'];


 if(!mysqli_query($con,"UPDATE client SET
                  C_origine = '$C_origine',
                  First_name = '$First_name',
                  Last_name = '$Last_name',
                  Middle_Name = '$Middle_Name',
                  Fonction = '$Fonction',
                  Company = '$Company',
                  Country = '$Country',
                  Phone_Number = '$Phone_Number',
                  interesse = '$interesse',
                  Source = '$Source',
                  Category = '$Category ',
                  Award = '$Award ',
                  Expertise = '$Expertise ',
                  Black_Liste ='$Black_Liste'
                  WHERE C_ID ='$C_ID' "))
{
              echo"La modification à échouée".mysqli_error($con);
}
  else
  {
      echo '<center><a href="ListeClient_Commercial.php">La modification à été correctement effectuée!</a><center>';
  }
/*
Category = '$Category',
                  Advanced_diploma = '$Advanced_diploma ',
                  Foundation_diploma = '$Foundation_diploma ',
                  Certificate = '$Certificate ',
                  training_lang = '$training_lang ',


$Category =  $_POST['Category'];
$Advanced_diploma =  $_POST['Advanced_diploma'];
$Foundation_diploma =  $_POST['Foundation_diploma'];
$Certificate =  $_POST['Certificate'];
//$training_lang =  $_POST['training_lang'];



*/





                  ?>





