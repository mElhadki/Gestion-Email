<?php

//fetch_single_data.php

include('database_connection.php');

if(isset($_POST["id"]))
{
 $query = "
 SELECT * FROM tbl_employee WHERE id = '".$_POST["id"]."'
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