<!DOCTYPE html>
<html lang="en">
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
          
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
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<br /><br />  
           <div class="container">  
                <h3 align="center"> Black_List </h3>  
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
 $sql = "SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and client.Black_Liste='Oui' GROUP BY client.C_ID";
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
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  