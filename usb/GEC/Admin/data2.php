 <!DOCTYPE html>  
 <html>  
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
       <li   class="active"><a href="Effacer_Client.php"> Clear Client </a></li>
          <li><a href="DATA1.php"> DATA 1 </a></li>
          <li class="active"><a href="data2.php"> Clear Client </a></li>
          <li><a href="data3.php"> Clear Client </a></li>
          <li><a href="data4.php"> Clear Client </a></li>

</ul>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Add</a></li> 
    </ul>
  </div>
</nav> 
           <br /><br />  
           <div class="container">  
                <h3 align="center"></h3>  
                <br />  <div class="container">
          <form method="post" action="Fonction_Effacer_Client.php" class="delete_form">              
              <div class="form-group">
<div class="input-group">
	<input type="C_ID" name="C_ID" class="form-control" required placeholder="ID Client...">
      <span class="input-group-btn">
        <button name="valider" class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Remove</button>
          
          
      </span>
</div>
           </div>
              
              
</form>
    </div>
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <td>C_ID</td> 
                                    <td>C_origine</td>  
                                    <td>Email</td>  
                                    <td>Source</td>  
                                    <td>First_name</td>  
                                    <td>Last_name</td>  
                                   <td>Middle_Name</td> 
                                    <td>Fonction</td>  
                                    <td>Company</td>  
                                    <td>Country</td>  
                                    <td>Phone_Number</td>  
                                 
                                   <td>Date_Inscr</td> 
                                     
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

/*<td>'.$row["C_ID"].'</td> 
                                    <td>'.$row["C_origine"].'</td>  
                                    <td>'.$row["Email"].'</td>  
                                    <td>'.$row["Source"].'</td>  
                                    <td>'.$row["First_name"].'</td>  
                                    <td>'.$row["Last_name"].'</td> 
									SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID GROUP BY client.C_ID
									*/


 $sql = "SELECT * FROM `client` WHERE C_ID BETWEEN 20000 AND 40000";
    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
 $result = mysqli_query($con,$sql);  
 
                        
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
									 <td>'.$row["C_ID"].'</td> 
                                    <td>'.$row["C_origine"].'</td>  
                                    <td>'.$row["Email"].'</td>  
                                    <td>'.$row["Source"].'</td>  
                                    <td>'.$row["First_name"].'</td>  
                                    <td>'.$row["Last_name"].'</td>  
                                    <td>'.$row["Middle_Name"].'</td> 
                                    <td>'.$row["Fonction"].'</td>  
                                    <td>'.$row["Company"].'</td>  
                                    <td>'.$row["Country"].'</td>  
                                    <td>'.$row["Phone_Number"].'</td>  
                                   
                                    <td>'.$row["Date_Inscr"].'</td>  
                                    
									 
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