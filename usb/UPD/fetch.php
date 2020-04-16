<?php
//fetch.php
include('database_connection.php');
$query = '';
$output = array();
$query .= "SELECT * FROM tbl_employee ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE C_origine LIKE "%'.$_POST["search"]["value"].'%" OR
 Email LIKE "%'.$_POST["search"]["value"].'%" OR
 First_name LIKE "%'.$_POST["search"]["value"].'%" OR
 Last_name LIKE "%'.$_POST["search"]["value"].'%" OR
 Middle_name LIKE "%'.$_POST["search"]["value"].'%" OR
  Fonction LIKE "%'.$_POST["search"]["value"].'%" OR
 Phone_Number LIKE "%'.$_POST["search"]["value"].'%" OR
 Company LIKE "%'.$_POST["search"]["value"].'%" OR
 Country LIKE "%'.$_POST["search"]["value"].'%" OR
 Interested LIKE "%'.$_POST["search"]["value"].'%"  OR
 Source LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"])){
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1){
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["Email"];
 $sub_array[] = $row["First_name"];
 $sub_array[] = $row["Last_name"];
 $sub_array[] = $row["Middle_name"];
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $data[] = $sub_array;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT * FROM tbl_employee");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records($connect),
 "data"    => $data
);
echo json_encode($output);
?>
