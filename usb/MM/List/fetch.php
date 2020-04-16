
<?php

//fetch.php

include('database_connection.php');
$query = '';
$output = array();
$query .= "SELECT * FROM client ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE C_origine LIKE "%'.$_POST["search"]["value"].'%" OR
 Email LIKE "%'.$_POST["search"]["value"].'%" OR
 First_name LIKE "%'.$_POST["search"]["value"].'%" OR
 Last_name LIKE "%'.$_POST["search"]["value"].'%" OR
 Middle_Name LIKE "%'.$_POST["search"]["value"].'%" OR
 Phone_Number LIKE "%'.$_POST["search"]["value"].'%" OR
 Fonction LIKE "%'.$_POST["search"]["value"].'%" OR
 Company LIKE "%'.$_POST["search"]["value"].'%" OR
 Country LIKE "%'.$_POST["search"]["value"].'%" OR
 Website LIKE "%'.$_POST["search"]["value"].'%" OR
 Source LIKE "%'.$_POST["search"]["value"].'%" OR
 interesse LIKE "%'.$_POST["search"]["value"].'%" OR
 Black_Liste LIKE "%'.$_POST["search"]["value"].'%" OR
 Category LIKE "%'.$_POST["search"]["value"].'%" OR
 Advanced_diploma LIKE "%'.$_POST["search"]["value"].'%" OR
 Foundation_diploma LIKE "%'.$_POST["search"]["value"].'%" OR
 training_lang LIKE "%'.$_POST["search"]["value"].'%" OR
 Certificate LIKE "%'.$_POST["search"]["value"].'%" OR
 E_ID LIKE "%'.$_POST["search"]["value"].'%" 
';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY C_ID DESC ';
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
 $sub_array[] = $row["C_origine"];
 $sub_array[] = $row["Email"];
 $sub_array[] = $row["First_name"];
 $sub_array[] = $row["Last_name"];
 $sub_array[] = $row["Middle_Name"];
 $sub_array[] = $row["Phone_Number"];
 $sub_array[] = $row["Fonction"];
 $sub_array[] = $row["Company"];
 $sub_array[] = $row["Country"];
 $sub_array[] = $row["Website"];
 $sub_array[] = $row["Source"];
 $sub_array[] = $row["interesse"];
 $sub_array[] = $row["Black_Liste"];
 $sub_array[] = $row["Category"];
 $sub_array[] = $row["Advanced_diploma"];
 $sub_array[] = $row["Foundation_diploma"];
 $sub_array[] = $row["training_lang"];
 $sub_array[] = $row["Certificate"];
    $sub_array[] = $row["E_ID"];
 //$sub_array[] = '<button type="button" name="view" id="'.$row["C_ID"].'" class="btn btn-primary btn-xs view">View</button>';
 //$sub_array[] = '<button type="button" name="update" id="'.$row["C_ID"].'" class="btn btn-warning btn-xs update">Update</button>';
 //$sub_array[] = '<button type="button" name="delete" id="'.$row["C_ID"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT * FROM client");
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