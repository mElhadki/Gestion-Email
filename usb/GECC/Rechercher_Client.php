<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
      <li ><a href="Welcome.php">Home</a></li>
    <li><a href="Ajouter_Client.php"> Add Customer  </a></li>
              <li><a href="ListeClient_Commercial.php">List of Customers</a></li>
             <li><a href="Rechercher_Modification_Suppression.php">Customer Modification</a></li>
                     <li><a href="Rechercher_Client.php">Customer search </a></li>
         <li><a href="Black_Liste.php">Black_List </a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<?php
    session_start();
    if(isset($_SESSION['User']))
    {
        echo '<center> <strong>  ' . $_SESSION['User'].'</strong><center><br/>';
       // echo '<center><a href="logout.php?logout">Logout</a><center>';
    }
    else
    {
        header("location:index.php");
    }
?>
    <div style="width: 500px; margin: 50px auto;">
             <form method="post" action="" autocomplete="off">
                                 <center><h2> Customer search </h2></center>
    <div class="form-group">
           
              <label for="Email" class="control-label">Email</label>       
              <input type="Email" name="Email" class="form-control" autocomplete="off" >
           
        <center><input type="submit" name="btn-login" value="search" class="btn btn-primary"></center>
            </div>
            </form></div>  
     <div class="container">
         <br>
<?php
require_once('Connection.php');
          if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
if(isset($_POST['Email'])){

   if(empty($_POST['Email'])){
       
    }
    
 
     $sql = "SELECT DISTINCT client.*,employee.UName FROM `client`, `employee` WHERE client.E_ID = employee.E_ID AND client.Email = '".$_POST['Email']."'  GROUP BY client.C_ID ";
         
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table style='border: solid 1px white;'sss>
          <tr>
           <th>ID</th>
          <th>C_origine</th>
         <th>Email</th>
         <th>Source</th>
          <th>First_name</th>
          <th>Last_name</th>
          <th>Middle_Name</th>
          <th>Fonction</th>
          <th>Company</th>
          <th>Country</th>
          <th>Phone_Number</th>
          <th>Intéressé</th>
          <th>Date_Time</th>
          <th>Black_List</th>
          <th>Commercial</th>
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo  "<tr><td>" . $row['C_ID'] . "</td><td>" . $row['C_origine'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    else {
    echo "0 results";
}
$con->close();
    
   }
?> 
    </div>
         </body>
</html>