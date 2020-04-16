<!DOCTYPE html>
<html lang="en">
<head>
 <title> List of customers </title>  <meta charset="utf-8">
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
    th{
        text-align: center;
        

    }
    td{
        text-align: center;
       width: 150px; 
        border: 1px solid aliceblue;
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
      <li class="active"><a href="Home.php">Home</a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Commercial<span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="MANOUNIE.php">MANOUNIE</a></li>
<li><a href="RAGUIGUR.php"> RAGUIGUE  </a></li>
<li><a href="SEMKALI.php"> SEMKALI </a></li>
<li><a href="SAADOUNE.php"> SAADOUNE  </a></li>
<li><a href="HATAB.php">HATAB</a></li>
<li><a href="HAKMI.php"> HAKMI   </a></li>
<li><a href="HADGUEL.php"> HADGUEL  </a></li>
<li><a href="ELMALKI.php"> EL MALKI  </a></li>
        </ul>
      </li> 
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listing <span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="Double.php"> repeating  </a></li>
<li  class="active"><a href="Liste_Commercial.php"> Commercial List  </a></li>
        </ul>
      </li> 
<li><a href="Ajouter_Commercial.php"> Add Commercial  </a></li>
<li><a href="Modifier_Commercial.php"> Edit Commercial  </a></li>
<li><a href="Liste.php"> Search customers  </a></li>
       <li><a href="Effacer_Client.php"> Clear Client </a></li>

</ul>
    <ul class="nav navbar-nav navbar-right">
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<div class="container">
    <div class="container">
        <div style="width: 500px; margin: 50px auto;">
            <!--  <form method="post" action="" autocomplete="off">
   pour l'admin rechercher email existe sur la base de donner 
    <div class="form-group">
                  <label for="email" class="control-label">Email</label><input type="Email" name="Email" class="form-control" autocomplete="off" required>
                  <label for="First_name" class="control-label">First_name</label><input type="First_name " name="First_name" class="form-control" autocomplete="off" required><br/>
        <center><input type="submit" name="btn-login" value="Login" class="btn btn-primary"></center>
            </div>
            </form>--></div>  
        </div>
<?php
session_start();
require_once('Connection.php');
     if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
    ini_set('max_execution_time', 100);
                echo '<center><h2> List of customers   </h2><center><br/>';
$sql =    "SELECT employee.*,Admin.A_Login FROM `employee` ,`Admin` WHERE employee.A_ID = Admin.A_ID and Admin.A_Login = '".$_SESSION['Users']."' GROUP BY employee.E_ID";
    

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
          <th>Prenom </th>
          <th>Mot de passe</th>
          <th>Admin</th>
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