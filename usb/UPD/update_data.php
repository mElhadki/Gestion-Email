<?php
//update_data.php
include('database_connection.php');
if(isset($_POST["Email"]))
{
 $error = '';
 $success = '';
 $C_origine= '';
 $Email = '';
 $First_name = '';
 $Last_name = '';
 $Middle_name = '';
 $Fonction = '';
 $Phone_Number = '';
 $Company = '';
 $Country = '';
 $Interested = '';
    $Source ='';
 $images = '';
 //$Fonction = $_POST["Fonction"];
 if(empty($_POST["C_origine"])){
  $error .= '<p>C_origine is Required</p>';
 }
 else{
  $C_origine = $_POST["C_origine"];
 }
    if(empty($_POST["Email"])){
  $error .= '<p>Email is Required</p>';
 }
 else{
  $Email = $_POST["Email"];
 }
 if(empty($_POST["First_name"])){
  $error .= '<p>First_name is Required</p>';
 }
 else{
  $First_name = $_POST["First_name"];
 }
 if(empty($_POST["Last_name"])){
  $error .= '<p>Last_name is Required</p>';
 }
 else{
  $Last_name = $_POST["Last_name"];
 }
 if(empty($_POST["Middle_name"])){
  $error .= '<p>Middle_name is Required</p>';
 }
 else{
  $Middle_name = $_POST["Middle_name"];
 }
    if(empty($_POST["Fonction"])){
  $error .= '<p>Fonction is Required</p>';
 }
 else{
  $Fonction = $_POST["Fonction"];
 }
    if(empty($_POST["Phone_Number"])){
  $error .= '<p>Phone_Number is Required</p>';
 }
 else{
  $Phone_Number = $_POST["Phone_Number"];
 }
    if(empty($_POST["Company"])){
  $error .= '<p>Company is Required</p>';
 }
 else{
  $Company = $_POST["Company"];
 }
     if(empty($_POST["Country"])){
  $error .= '<p>Country is Required</p>';
 }
 else{
  $Country = $_POST["Country"];
 }
     if(empty($_POST["Interested"])){
  $error .= '<p>Interested is Required</p>';
 }
 else{
  $Interested = $_POST["Interested"];
 }
     if(empty($_POST["Source"])){
  $error .= '<p>Source is Required</p>';
 }
 else{
  $Source = $_POST["Source"];
 }
    
 $images = $_POST['hidden_images'];
 if(isset($_FILES["images"]["name"]) && $_FILES["images"]["name"] != ''){
  $image_name = $_FILES["images"]["name"];
  $array = explode(".", $image_name);
  $extension = end($array);
  $temporary_name = $_FILES["images"]["tmp_name"];
  $allowed_extension = array("jpg","png");
  if(!in_array($extension, $allowed_extension)) {
   $error .= '<p>Invalid Image</p>';
  }
  else{
   $images = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, 'images/' . $images);
  }
 }
 if($error == '')
 {
  $data = array(
   ':C_origine'   => $C_origine,
   ':Email'  => $Email,
   ':First_name'  => $First_name,
   ':Last_name' => $Last_name,
   ':Middle_name'   => $Middle_name,
      ':Fonction'  => $Fonction,
   ':Phone_Number'  => $Phone_Number,
   ':Company'   => $Company,
      ':Country'   => $Country,
':Interested'   => $Interested,
       ':Source'   => $Source,
   ':images'  => $images,
   ':id'   => $_POST["id"]
  );

  $query = "
  UPDATE tbl_employee 
  SET C_origine = :C_origine,
  Email = :Email,
  First_name = :First_name, 
  Last_name = :Last_name, 
  Middle_name = :Middle_name, 
  Fonction = :Fonction, 
  Phone_Number = :Phone_Number, 
  Company = :Company, 
  Country = :Country, 
  Interested = :Interested, 
  Source = :Source,
  images = :images 
  WHERE id = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $success = 'Employee Data Updated';
 }
 $output = array(
  'success'  => $success,
  'error'   => $error
 );
 echo json_encode($output);
}

?>

