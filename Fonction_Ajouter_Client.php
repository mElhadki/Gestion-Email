<?php
session_start();
require_once('Connection.php');
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)intéressé
$AfficherFormulaire=1;
//traitement du formulaire:
if(
isset($_POST['C_origine'],
      $_POST['First_name'],
      $_POST['Last_name'],
      $_POST['Middle_Name'],
      $_POST['Fonction'],
      $_POST['Company'],
      $_POST['Country'],
      $_POST['Email'],
      $_POST['Phone_Number'],
      $_POST['interesse'],
      $_POST['Source'],
    $_POST['Website'],
      $_POST['Black_Liste']
    ))
     /*
  $_POST['Website'],      $_POST['Category'], 
      $_POST['Advanced_diploma'],
      $_POST['Foundation_diploma'],
      $_POST['Certificate'],
      $_POST['training_lang'],
       $_POST['Category'], 
      $_POST['Award'],
      $_POST['Expertise']
     */
    
   /*   $_POST['Website'],
     $_POST['Category'],
     $_POST['Advanced_diploma'],
     $_POST['Foundation_diploma	'],
     $_POST['Certificate'],
     $_POST['training_lang']
     Website='".$_POST['Website']."',Category='".$_POST['Category']."',Advanced_diploma='".$_POST['Advanced_diploma']."',Foundation_diploma='".$_POST['Foundation_diploma']."',
Certificate='".$_POST['Certificate']."',training_lang='".$_POST['training_lang']."',
,Website='".$_POST['Website']."',
*/
{
    
  if(empty($_POST['Email'])){
     /* le champ mot de passe est vide
        echo "Le champ Email est vide.";
       echo '<center><a href="Register.php?Register">Le champ Email est vide!</a><center>';*/
    }
    elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM client WHERE Email='".$_POST['Email']."'"))==1){
       /* on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Ce Email est déjà utilisé.";
        */
        echo '<center><h3><a href="Ajouter_Client.php?Register">This Email is already used!</a></h3><center>';
    }
      /*  elseif(empty($_POST['Source'])){
      le champ mot de passe est vide
        echo "Le champ Email est vide.";
        echo '<center><a href="Register.php?Register">Le champ Email est vide!</a><center>';
    }*/
    
   /*  elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM client WHERE Source='".$_POST['Source']."'"))==1){
       
        on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Ce Email est déjà utilisé.";
       
        echo '<center><h3><a href="Ajouter_Client.php?Register">This Source is already used!</a></h3><center>';
    } */
    
    else {
       /* 
       toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
        */
      $result = mysqli_query($con,"SELECT E_ID FROM employee WHERE UName = '".$_SESSION['User']."'");
        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        /*
        
Website='".$_POST['Website']."',
Category='".$_POST['Category']."',
Award='".$_POST['Award']."',
Expertise='".$_POST['Expertise']."',
Website='".$_POST['Website']."',
        */
        $date = date('Y-m-d H:i:s');
        $id = mysqli_fetch_row($result);
if(!mysqli_query($con,"INSERT INTO client SET C_origine='".$_POST['C_origine']."',
First_name='".$_POST['First_name']."', 
Last_name='".$_POST['Last_name']."',
Middle_Name='".$_POST['Middle_Name']."',
Fonction='".$_POST['Fonction']."',
Company='".$_POST['Company']."',
Country='".$_POST['Country']."',
Email='".$_POST['Email']."',
Phone_Number='".$_POST['Phone_Number']."',
interesse='".$_POST['interesse']."',
Source='".$_POST['Source']."',
Website='".$_POST['Website']."',
Black_Liste='".$_POST['Black_Liste']."',

E_ID=". $id[0]))
        {
    //on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "An error has occurred: ".mysqli_error($con);
    //je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        }
        else {
              echo '<center><a href="ListeClient_Commercial.php">Successfully registered !</a><center>';
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
}
?>