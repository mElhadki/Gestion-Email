<!DOCTYPE html>
<html>
  <head>
    <title>Awesome Search Box</title>
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
.btn-search {
	  background: #424242;
	  border-radius: 0;
	  color: #fff;
	  border-width: 1px;
	  border-style: solid;
	  border-color: #1c1c1c;
	}
	.btn-search:link, .btn-search:visited {
	  color: #fff;
	}
	.btn-search:active, .btn-search:hover {
	  background: #1c1c1c;
	  color: #fff;
	}
      </style>
  </head>
  <!-- Coded with love by Mutiullah Samim-->
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">GCC</a>
    </div>
      <ul class="nav navbar-nav">
      <li><a href="Home.php">Home</a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Commercial<span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="HAKMI.php"> HAKMI   </a></li>
<li><a href="HADGUEL.php"> HADGUEL  </a></li>
<li><a href="MANOUNIE.php">MANOUNI</a></li>
<li><a href="RAGUIGUR.php"> RAGUIGUE  </a></li>
<li><a href="HATAB.php">HATTAB</a></li>
<li><a href="SEMKALI.php"> SEMKALI </a></li>
<li><a href="SAADOUNE.php"> SAADOUNE  </a></li>
<li><a href="ELMALKI.php"> EL MALKI  </a></li>
        </ul>
      </li> 
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listing <span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="Double.php"> repeating  </a></li>
<li><a href="Liste_Commercial.php"> Commercial List  </a></li>
        </ul>
      </li> 
<li><a href="Ajouter_Commercial.php"> Add Commercial  </a></li>
<li><a href="Modifier_Commercial.php"> Edit Commercial  </a></li>
          <li class="active"><a href="Recheche_Email.php">Country search </a></li>
<!--  <li><a href="Effacer_Client.php"> Clear Client </a></li> -->
          <li><a href="DATA1.php"> DATA 1 </a></li>
          <li><a href="data2.php"> DATA 2 </a></li>
          <li><a href="data3.php"> DATA 3 </a></li>
          <li><a href="data4.php"> DATA 4 </a></li> 
          <li><a href="data5.php"> DATA 5 </a></li> 

</ul>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Add</a></li> 
    </ul>
  </div>
</nav> 
<?php
    session_start();
?>
       <div style="width: 500px; margin: 50px auto;">
             <form method="post" action="" autocomplete="off">
<center><h2> Customer search </h2></center>
    <div class="form-group">
<div class="input-group">
	<input type="Email" name="Email" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button name="btn-login" class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
</div>
           </div>
            </form>
    </div>  
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
     $sql = "SELECT DISTINCT client.*,employee.UName FROM `client`,
     `employee` WHERE client.E_ID = employee.E_ID 
     AND client.Email = '".$_POST['Email']."' 
     GROUP BY client.C_ID ";
         /* <th>ID</th> <td>" . $row['C_ID'] . "</td>  <th>ID</th> <td>" . $row['C_ID'] . "</td> */
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