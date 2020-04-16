<!DOCTYPE html>
<html lang="en">
<head>
  <title> Modifier Commercial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        a{
            color: black;
        }
        label{
            color: black;
        }
            body{
           background-color: #90caf9 ;
            color: black;
        }
        h2{
            color:black;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">GCC</a>
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
        </ul>
      </li> 
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listing <span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="Double.php"> repeating  </a></li>
<li><a href="Liste_Commercial.php"> Commercial List  </a></li>
        </ul>
      </li> 
<li><a href="Ajouter_Commercial.php"> Add Commercial  </a></li>
<li  class="active"><a href="Modifier_Commercial.php"> Edit Commercial  </a></li>
<li><a href="Liste.php"> Search customers  </a></li>
       <li><a href="Effacer_Client.php"> Clear Client </a></li>

</ul>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<div class="container">
    <div class="container">
        <div style="width: 500px; margin: 50px auto;">
            <form method="post" action="Fonction_Modification_Commercial.php" autocomplete="off">
                <center><h2> Modifier Commercial </h2></center>
                <hr/> 
           <div class="form-group">
                 <!-- <label for="email" class="control-label">Commercial</label>
                   <input type="Commercial" name="Commercial" class="form-control" autocomplete="off">-->
                              <label for="E_ID" class="control-label">ID</label>   <input type="E_ID" name="E_ID" class="form-control" autocomplete="off" required>
               <label for="	UName" class="control-label">Prénom</label>   <input type="UName" name="UName" class="form-control" autocomplete="off" required>
               <label for="Password" class="control-label">Mot de passe</label>    <input type="Password" name="Password" class="form-control" autocomplete="off" required>
<center><input type="submit" name="btn-login" value="Modifier" class="btn btn-primary"></center>    
                <hr/>
                 </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html> 