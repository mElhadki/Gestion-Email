<!DOCTYPE html>
<html lang="en">
<head>
 <title>Login</title>  <meta charset="utf-8">
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
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GEC</a>
    </div>
   <ul class="nav navbar-nav">
      <li class="active"><a href="Welcome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact<span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="ListeClient_Commercial.php">List </a></li>
    <li><a href="Ajouter_Client.php">Add New  </a></li>
    <li><a href="Rechercher_Client.php">Email search </a></li>
    <li><a href="Rechercher_Country.php">Country search </a></li>
     </ul>
      </li> 
               <li><a href="Black_Liste.php">Black_List </a></li>
               <li><a href="P_B_P.php">Publipostage </a></li>
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
    if(isset($_SESSION['User'])) {
        echo '<center> <strong>Well Come   ' . $_SESSION['User'].'</strong><center><br/>';
       // echo '<center><a href="logout.php?logout">Logout</a><center>';
    }
    else {
        header("location:index.php");
    }

?>
 </div>
</body>
</html>
