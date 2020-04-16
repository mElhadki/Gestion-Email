

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Commercial</title>  <meta charset="utf-8">
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
      <a class="navbar-brand" href="Home.php">GCC</a>
    </div>
   <ul class="nav navbar-nav">
      <li><a href="Home.php">Home</a></li>
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
    </div>
<?php
session_start();
require_once('Connection.php');
     if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} ini_set('max_execution_time', 100);
    
      echo '<center><h3> MANOUNIE !</h3><center><br><br><br>';

   // "SELECT client.*,employee.UName FROM `client`, `employee` WHERE client.E_ID = employee.E_ID and (Email LIKE 'gh@ghj.com') OR (Email LIKE 'gh@ghj.com' AND First_name LIKE 'momo') ORDER BY client.C_ID"
  //  la recherch avec email ou nom
    //"SELECT client.*,employee.UName  FROM `client`, `employee` WHERE client.E_ID = employee.E_ID  and  (Email LIKE '".$_POST['Email']."' OR First_name LIKE '".$_POST['First_name']."')  ORDER BY client.C_ID";
    
    
$sql =   " SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.E_ID = '7' GROUP BY client.C_ID";
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
          <th>First_name</th>
          <th>Last_name</th>
          <th>Middle_Name</th>
          <th>Fonction</th>
          <th>Company</th>
          <th>Country</th>
          <th>Email</th>
          <th>Phone_Number</th>
          <th>Intéressé</th>
          <th>Source</th>
          <th>Date_Time</th>
          <th>Black_List</th>
          <th>Commercial</th>
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['C_ID'] . "</td><td>" . $row['C_origine'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr>";  //$row['index'] the index here is a field name
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