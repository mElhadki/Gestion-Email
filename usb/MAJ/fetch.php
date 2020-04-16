<?php

//fetch.php

include('database_connection.php');
$query = '';
$output = array();
$query .= "SELECT * FROM client ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE name LIKE "%'.$_POST["search"]["value"].'%" OR address LIKE "%'.$_POST["search"]["value"].'%" OR gender LIKE "%'.$_POST["search"]["value"].'%" OR designation LIKE "%'.$_POST["search"]["value"].'%" OR age LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
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
 $sub_array[] = $row["name"];
 $sub_array[] = $row["gender"];
 $sub_array[] = $row["designation"];
 $sub_array[] = $row["age"];
 $sub_array[] = '<button type="button" name="view" id="'.$row["id"].'" class="btn btn-primary btn-xs view">View</button>';
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
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
