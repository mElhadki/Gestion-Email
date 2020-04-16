<!DOCTYPE html>
<html>
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
<div class="input-group">
	<input type="text" name="Email" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button name="btn-login" class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
</div>
           </div>
            </form>
               </div>  
           
           <?php
require_once('Connection.php');

        
if(isset($_POST['Email'])){

    if(empty($_POST['Email'])){
 
    }

    
     $sql = "SELECT DISTINCT client.*,employee.UName FROM `client`,
     `employee` WHERE client.E_ID = employee.E_ID 
     AND client.Email = '".$_POST['Email']."'
     GROUP BY client.C_ID ";
         /* <th>ID</th> <td>" . $row['C_ID'] . "</td> */
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>ID</th>
       <th class='th-sm'>C_origine</th>
      <th class='th-sm'>Email</th>
       <th class='th-sm'>Source</th>
       <th class='th-sm'>First_name</th>
       <th class='th-sm'>Last_name</th>
       <th class='th-sm'>Middle_Name</th>
       <th class='th-sm'>Fonction</th>
       <th class='th-sm'>Company</th>
       <th class='th-sm'>Country</th>
       <th class='th-sm'>Phone_Number</th>
       <th class='th-sm'>Intéressé</th>
       <th class='th-sm'>Date_Time</th>
       <th class='th-sm'>Black_List</th>
       <th class='th-sm'>Commercial</th>
    </tr>
  </thead>
 ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo  "<tbody><tr><th scope='row'>" . $row['C_ID'] . "</th><td>" . $row['C_origine'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr></tbody>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    else {
    echo "0 results";
}
$con->close();
    
   }
?>            
         <form method="post" action="" autocomplete="off" class="form-inline md-form mr-auto mb-4">
  <input class="form-control mr-sm-2" name="First_name" type="First name" placeholder="First name" aria-label="Search">
  <button class="btn btn-elegant btn-rounded btn-sm my-0" type="submit">Search</button>
</form>
           <br>

  <?php
require_once('Connection.php');

        
if(isset($_POST['First_name'])){

    if(empty($_POST['First_name'])){
 
    }

    
     $sql = "SELECT DISTINCT client.*,employee.UName FROM `client`,
     `employee` WHERE client.E_ID = employee.E_ID 
     AND client.First_name = '".$_POST['First_name']."' 
     GROUP BY client.C_ID ";
         /* <th>ID</th> <td>" . $row['C_ID'] . "</td> */
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>ID</th>
       <th class='th-sm'>C_origine</th>
      <th class='th-sm'>Email</th>
       <th class='th-sm'>Source</th>
       <th class='th-sm'>First_name</th>
       <th class='th-sm'>Last_name</th>
       <th class='th-sm'>Middle_Name</th>
       <th class='th-sm'>Fonction</th>
       <th class='th-sm'>Company</th>
       <th class='th-sm'>Country</th>
       <th class='th-sm'>Phone_Number</th>
       <th class='th-sm'>Intéressé</th>
       <th class='th-sm'>Date_Time</th>
       <th class='th-sm'>Black_List</th>
       <th class='th-sm'>Commercial</th>
    </tr>
  </thead>
 ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo  "<tbody><tr><th scope='row'>" . $row['C_ID'] . "</th><td>" . $row['C_origine'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr></tbody>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    else {
    echo "0 results";
}
$con->close();
    
   }
?> 
      
                      <form method="post" action="" autocomplete="off" class="form-inline md-form mr-auto mb-4">
  <input class="form-control mr-sm-2" name="Last_name" type="Last_name" placeholder="Last name" aria-label="Search">
  <button class="btn btn-elegant btn-rounded btn-sm my-0" type="submit">Search</button>
</form>
           <br>
<?php
require_once('Connection.php');

if(isset($_POST['Last_name'])){

    if(empty($_POST['Last_name'])){
 
    }
     $sql = "SELECT DISTINCT client.*,employee.UName FROM `client`,
     `employee` WHERE client.E_ID = employee.E_ID 
     AND client.Last_name = '".$_POST['Last_name']."' 
     GROUP BY client.C_ID ";
         /* <th>ID</th> <td>" . $row['C_ID'] . "</td> */
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>ID</th>
       <th class='th-sm'>C_origine</th>
      <th class='th-sm'>Email</th>
       <th class='th-sm'>Source</th>
       <th class='th-sm'>First_name</th>
       <th class='th-sm'>Last_name</th>
       <th class='th-sm'>Middle_Name</th>
       <th class='th-sm'>Fonction</th>
       <th class='th-sm'>Company</th>
       <th class='th-sm'>Country</th>
       <th class='th-sm'>Phone_Number</th>
       <th class='th-sm'>Intéressé</th>
       <th class='th-sm'>Date_Time</th>
       <th class='th-sm'>Black_List</th>
       <th class='th-sm'>Commercial</th>
    </tr>
  </thead>
 ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo  "<tbody><tr><th scope='row'>" . $row['C_ID'] . "</th><td>" . $row['C_origine'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr></tbody>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    else {
    echo "0 results";
}
$con->close();
    
   }
   
   ?>


         <div class="container">
         <br>
         

    </div>
  </body>
</html>