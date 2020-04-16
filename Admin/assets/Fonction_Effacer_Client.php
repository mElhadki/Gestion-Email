<?php
//connection BDD
require_once('Connection.php');

$C_ID = $_POST['C_ID'];

$con->query("delete  FROM client  where C_ID= $C_ID");	//suppression dans bdd


              echo '<center><a href="Effacer_Client.php">Successfully delete !</a><center>';

exit();


// fermeture de la connection à la bdd
if ($con) {
	$con = NULL;
}
?>
