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
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Home.php">GEC</a>
    </div>
   <ul class="nav navbar-nav">
      <li class="active"><a href="Home.php">Home</a></li>
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
	      <li><a href="Recheche_Email.php">Email search </a></li>
       <!--  <li><a href="Effacer_Client.php"> Clear Client </a></li> -->
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DATA<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="DATA1.php"> DATA 1 </a></li>
          <li><a href="data2.php"> DATA 2 </a></li>
          <li><a href="data3.php"> DATA 3 </a></li>
          <li><a href="data4.php"> DATA 4 </a></li>
		  <li><a href="data5.php"> DATA 5 </a></li>
		   <li><a href="DATA6.php"> DATA 6 </a></li>
 </ul>
      </li> 

</ul>
  <ul class="nav navbar-nav navbar-right">
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<br /><br />  
                <h3 align="center"> Prospect </h3>  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
         <!-- <td>C_ID</td> -->
          <td>E_ID</td>  
          <td>Email</td>  
          <td>First_name</td>
          <td>Last_name</td>
          <td>Middle_Name</td>
          <td>Fonction</td>
          <td>Company</td>
          <td>Country</td>
          <td>Email</td>
          <td>Phone_Number</td>
          <td>Intéressé</td>
          <td>Black_List</td>
          <td>Commercial</td>
          </tr>  
                          </thead>  
                           <?php
                         require_once('Connection.php');
    if(isset($_SESSION['User']))
    {
        echo '<center> <strong>  ' . $_SESSION['User'].'</strong><center><br/>';
       // echo '<center><a href="logout.php?logout">Logout</a><center>';
    }
    else{
        //header("location:index.php");
    }
 if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
    ini_set('max_execution_time', 100);
 $sql = "SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID  and client.interesse = 'Yes' GROUP BY client.C_ID";
    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
 $result = mysqli_query($con,$sql);  
 /* <td>'.$row["C_ID"].'</td>    */  
                        
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    
                                    <td>'.$row["E_ID"].'</td>  
                                    <td>'.$row["Email"].'</td>  
                                    <td>' . $row['First_name'] . '</td>
                                    <td>'. $row['Last_name'] . '</td>
                                    <td>' . $row['Middle_Name'] .'</td>
                                    <td>' . $row['Fonction'] . '</td>
                                    <td>' . $row['Company'] . '</td>
                                    <td>' . $row['Country'] . '</td>
                                    <td>' . $row['Email'] . '</td>
                                    <td>' . $row['Phone_Number'] . '</td>
                                    <td>'. $row['interesse'] . '</td>
                                    <td>' . $row['Black_Liste'] . '</td>
                                    <td>' . $row['UName'] . '</td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  