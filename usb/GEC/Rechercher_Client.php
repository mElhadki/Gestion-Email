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
         /*
         
         
          $_POST['First_name'],
         $_POST['Last_name'],
         $_POST['Middle_Name'],
         $_POST['Fonction'],
         $_POST['First_name'],
         $_POST['Company'],
         $_POST['Country'],
         $_POST['interesse'],
         
         */
if(isset($_POST['Email'])){
/* if(empty($_POST['C_origine'])){
     //le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        //echo "Le champ C_origine est vide.";
    }
    ,$_POST['Source'],$_POST['Black_Liste']
    $_POST['C_origine'],*/
    if(empty($_POST['Email'])){
     /*    //le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
      //  echo "Le champ Email est vide.";
    }
    elseif(empty($_POST['First_name'])){
       le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       echo "Le champ First_name est vide.";
    }
    elseif(empty($_POST['Last_name'])){
  le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
     echo "Le champ Last_name est vide.";
    }
    elseif(empty($_POST['Middle_Name'])){
         le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Middle_Name est vide.";
    }
    elseif(empty($_POST['Fonction'])){
      le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Fonction est vide.";
    }
    elseif(empty($_POST['Company'])){
       le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['Country'])){
         le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['interesse'])){
    le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Company est vide.";*/
    }
    
    /*
    elseif(empty($_POST['Source'])){
        //le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['Black_Liste'])){
         //le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
  
 OR client.First_name = '".$_POST['First_name']."' 
     OR client.Last_name = '".$_POST['Last_name']."' 
     OR client.Middle_Name = '".$_POST['Middle_Name']."' 
     OR client.Fonction = '".$_POST['Fonction']."' 
     OR client.Company = '".$_POST['Company']."' 
     OR client.Country = '".$_POST['Country']."'  
 OR client.interesse = '".$_POST['interesse']."' 
 
 
  AND (client.C_origine = '".$_POST['C_origine']."' OR client.C_origine IS NULL)
 OR (client.Black_Liste = '".$_POST['Black_Liste']."' OR client.Black_Liste IS NULL)
 
 OR (client.Source = '".$_POST['Source']."' OR client.Source IS NULL)
 */ 
    /*  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  <table style='border: solid 1px white;'sss>
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
    */
    
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
    </div>
  </body>
</html>