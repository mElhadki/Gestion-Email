<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    <!-- DataTables CSS -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script href="js/addons/datatables.min.js" rel="stylesheet"></script>

<!-- DataTables Select CSS -->
<link href="css/addons/datatables-select.min.css" rel="stylesheet">
<!-- DataTables Select JS -->
<script href="js/addons/datatables-select.min.js" rel="stylesheet"></script>
    
    
 <title> List of Customers </title>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
body{
           background-color: #90caf9 ;
            color: black;
        }
a{
                    color: aliceblue;
        }
h2{
             color: black;
         }
label{
        text-align: center;
                     color: aliceblue;
    }
table{
             margin-left: inherit;
             font-size: 10px;
         }
.container{
               margin-left:10px;
         }
th{
        text-align: center;
        border: 1px solid #414A4C;
  font-size: 13px;
    }
td{
        text-align: center;
        border: 2px solid #414A4C;
         padding: 0.5px;
          font-size: 11px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GCC</a>
    </div>
   <ul class="nav navbar-nav">
      <li ><a href="Welcome.php">Home</a></li>
  <li><a href="Ajouter_Client.php"> Add Customer  </a></li>
              <li><a href="ListeClient_Commercial.php">List of Customers</a></li>
             <li><a href="Rechercher_Modification_Suppression.php">Customer Modification</a></li>
                     <li><a href="Rechercher_Client.php">Customer search </a></li>
         <li><a href="Black_Liste.php">Black_List </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="Totale.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
    <script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>
<?php
session_start();
require_once('Connection.php');
     if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
   
    
   
                echo '<center><h2> Publipostage   </h2><center><br/>';
$sql = " SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.UName = '".$_SESSION['User']."' AND interesse = 'Non' GROUP BY client.C_ID";
    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
//You don't need a ; like you do in SQL 
   
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "
        <table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
    <th>ID</th> 
<th>Email</th>
      
    </tr>
  </thead>
              ";
            
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['C_ID'] . "</td><td>" . $row['Email'] . "</td></tr>"; 
        //$row['index'] the index here is a field name
} 
  echo "</table>";
}
    else {
    echo "0 results";
}
    $con->close();
?> 
         
 </body>
</html>