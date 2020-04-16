<!DOCTYPE html>
<html lang="en">
<head>
 <title> List of Commercial </title>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <style>
        label{
            color: aliceblue;
        }
        body{
           background-color: #90caf9 ;
            color: black;
        }
        a{
                    color: aliceblue;
        }
         label{
        text-align: center;
                     color: aliceblue;
    }
         .container{
         margin-left:5px;
         }
    th{
        text-align: center;
        font-size: 12px;
    }
    td{
        text-align: center;
        border: 2px solid #414A4C ;
        font-size: 12px;
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
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<div class="container">
<?php
 session_start();
require_once('connection.php');
     if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
                echo '<center><h2> List of Customers   </h2><center><br/>';
$sql =    "SELECT employee.* FROM `employee` ,`Admin` WHERE employee.A_ID = Admin.A_ID and Admin.A_Login = '".$_SESSION['Users']."' GROUP BY employee.E_ID";
    

    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
//You don't need a ; like you do in SQL
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table style='border: solid 1px white;'sss>
          <tr>
          <th>ID</th>
          <th>Prenom</th>
          <th>Password</th>
           <th>Password</th>
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['E_ID'] . "</td><td>" . $row['UName'] . "</td><td>" . $row['Password'] . "</td><td>"  . $row['A_Login'] . "</td></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    else {
    echo "0 results";
}
    $con->close();

?> 
    </div>
 </body>
</html>