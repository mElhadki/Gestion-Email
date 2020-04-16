<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste Doublant !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
           body{
           background-color: #90caf9 ;
            color: black;
        }
        a{
                    color: black;
        }
         label{
        text-align: center;
                     color: black;
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
      <li ><a href="Home.php">Home</a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Commercial<span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="MANOUNIE.php">MANOUNIE</a></li>
<li><a href="RAGUIGUR.php"> RAGUIGUE  </a></li>
<li><a href="SEMKALI.php"> SEMKALI </a></li>
<li><a href="SAADOUNE.php"> SAADOUNE  </a></li>
<li><a href="HATAB.php">HATAB</a></li>
<li><a href="HAKMI.php"> HAKMI   </a></li>
<li><a href="HADGUEL.php"> HADGUEL  </a></li>
        </ul>
      </li> 
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listing <span class="caret"></span></a>
        <ul class="dropdown-menu">
<li class="active"><a href="Double.php"> repeating  </a></li>
<li><a href="Liste_Commercial.php"> Commercial List  </a></li>
        </ul>
      </li> 
<li><a href="Ajouter_Commercial.php"> Add Commercial  </a></li>
<li><a href="Modifier_Commercial.php"> Edit Commercial  </a></li>
<li><a href="Liste.php"> Search customers  </a></li>
       <li><a href="Effacer_Client.php"> Clear Client </a></li>
</ul>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<?php
session_start();
require_once('Connection.php');
    if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
    ini_set('max_execution_time', 100);
         echo '<center><h3><a> Liste Doublant  !</a></h3><center>';
   // "SELECT client.*,employee.UName FROM `client`, `employee` WHERE client.E_ID = employee.E_ID and (Email LIKE 'gh@ghj.com') OR (Email LIKE 'gh@ghj.com' AND First_name LIKE 'momo') ORDER BY client.C_ID"
  //  la recherch avec email ou nom
    //"SELECT client.*,employee.UName  FROM `client`, `employee` WHERE client.E_ID = employee.E_ID  and  (Email LIKE '".$_POST['Email']."' OR First_name LIKE '".$_POST['First_name']."')  ORDER BY client.C_ID";
           $sql =  "SELECT DISTINCT * FROM `client` t1 WHERE EXISTS ( SELECT * FROM  `client` t2 WHERE t1.C_ID <> t2.C_ID AND t1.Email = t2.Email  GROUP BY t1.C_ID)";
//$sql =   " SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.UName = '".$_SESSION['User']."' GROUP BY client.C_ID";
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
           <th>C_origine</th>
          <th width='20px'>First_name</th>
          <th width='20px'>Last_name</th>
          <th width='20px'>Middle_Name</th>
          <th width='25px'>Fonction</th>
          <th width='23px'>Company</th>
          <th width='20px'>Country</th>
          <th>Email</th>
          <th>Source </th>
          <th>Date_Inscr </th>
          <th>interesse </th>
          <th>Black_List </th>
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['C_ID'] . "</td><td>" . $row['C_origine'] . "</td><td width='20px'>" . $row['First_name'] . "</td><td width='20px'>" . $row['Last_name'] . "</td><td width='20px'>" . $row['Middle_Name'] . "</td><td width='25px'>" . $row['Fonction'] . "</td><td  width='23px'>" . $row['Company'] . "</td><td width='20px'>" . $row['Country'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Black_Liste'] . "</td></tr>";  //$row['index'] the index here is a field name
}
    
  echo "</table>";
}
    else {
    echo "0 results";
}
    $con->close();

?> 
            </body></html>