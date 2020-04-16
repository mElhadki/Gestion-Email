<?php

//fetch_single_data.php

include('database_connection.php');
if(isset($_POST["C_ID"]))
{
 $query = "
 SELECT * FROM client WHERE C_ID = '".$_POST["C_ID"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>