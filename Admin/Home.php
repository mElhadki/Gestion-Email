
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Administration </title>  <meta charset="utf-8">
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
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.avatar {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
}
    th{
        text-align: center;
    }
    img{
        text-align: center;
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
<li><a href="Liste_Commercial.php"> Commercial List  </a></li>
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
    <?php
    session_start();
    require_once('Connection.php');
  //  if(isset($_SESSION['User']))
  //  {
   //     echo '<center> <strong>Well Come   ' . $_SESSION['User'].'</strong><center><br/>';
       // echo '<center><a href="logout.php?logout">Logout</a><center>';
  //  }
    //else
   // {
     //   header("location:index.php");
   // }
?>
    
    <center><h1>  GCC </h1></center>
    
    
<center>
       
       
          <?php
                       
$sql =    "SELECT COUNT(*) FROM `client` WHERE client.E_ID = employee.E_ID and employee.UName = '".$_SESSION['User']."' AND interesse ='Non'";
    

    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
//You don't need a ; like you do in SQL
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table>
          <tr>
          <th><img src='Contact.png' alt='Avatar' class='avatar'></th>
     
       
         
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><th>"  . $row['CountOf'] . "</th></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
       $sql =    "SELECT COUNT(*) AS CountOf FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and employee.E_ID = 7 ";
    

    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
//You don't need a ; like you do in SQL
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table>
          <tr>
          <th><img src='Proc.png' alt='Avatar' class='avatar'></th>
     
       
         
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><th>"  . $row['CountOf'] . "</th></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
      
       $sql =    "SELECT COUNT(*) AS CountOf FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and employee.E_ID = 7 ";
    

    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
//You don't need a ; like you do in SQL
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table>
          <tr>
          <th><img src='Student.png' alt='Avatar' class='avatar'></th>
     
       
         
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><th>"  . $row['CountOf'] . "</th></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
      
                    ?>
       

    
    </center>
    
    
    
    
 </div>
</body>
</html>
