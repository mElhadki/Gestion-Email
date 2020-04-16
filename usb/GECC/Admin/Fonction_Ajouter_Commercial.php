<?php
session_start();
require_once('Connection.php');
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)intéressé
$AfficherFormulaire=1;
//traitement du formulaire:
if(
isset($_POST['UName'],$_POST['Password']))
{//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['UName'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ First_name est vide.";
        //echo '<center><a href="Register.php?Register">Le champ First_name est vide!</a><center>';
    }
    elseif(empty($_POST['Password'])){//le champ mot de passe est vide
       // echo "Le champ Email est vide.";
       // echo '<center><a href="Register.php?Register">Le champ Email est vide!</a><center>';
    }

    else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
      $result = mysqli_query($con,"SELECT A_ID FROM admin WHERE A_Login = '".$_SESSION['Users']."'");
        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        $id = mysqli_fetch_row($result);
if(!mysqli_query($con,"INSERT INTO employee SET UName='".$_POST['UName']."', Password='".$_POST['Password']."', A_ID=". $id[0]))
        {//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "An error has occurred: ".mysqli_error($con);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        }
        else {
              echo '<center><a href="Liste_Commercial.php">Successfully registered !</a><center>';
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
}
?>