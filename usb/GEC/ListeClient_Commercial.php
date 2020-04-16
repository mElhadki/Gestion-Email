<?php 
session_start();
require_once('Connection.php');

$query="SELECT * FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.UName = '".$_SESSION['User']."' GROUP BY client.C_ID";
$result=mysqli_query($con,$query);
?>
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
      <a class="navbar-brand" href="Welcome.php">GCC</a>
    </div>
   <ul class="nav navbar-nav">
      <li ><a href="Welcome.php">Home</a></li>
        <li><a href="Ajouter_Client.php"> Add Customer  </a></li>
              <li><a href="ListeClient_Commercial.php">List of customers</a></li>
             <li><a href="Rechercher_Modification_Suppression.php">Customer Modification</a></li>
               <li><a href="Rechercher_Client.php">Email search </a></li>
       <li><a href="Rechercher_Country.php">Country search </a></li>
         <li><a href="Black_Liste.php">Black_List </a></li>
	   <li><a href="P_B_P.php">Publipostage </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
  <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">   
                          <thead>  
                               <tr> 
                                    <td>C_ID</td>
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
          <th>Category</th>
          <th>Award</th>
          <th>Expertise</th>
        <td>Edit</td> 
                               </tr>
                         </thead>
        <?php
    while($row = $result->fetch_assoc()){
        $C_ID=$row['C_ID'];
        $C_origine=$row['C_origine'];
        $Email=$row['Email'];
        $Source=$row['Source'];
        $First_name=$row['First_name']; 
         $Last_name=$row['Last_name'];
        $Middle_Name=$row['Middle_Name'];
        $Fonction=$row['Fonction'];
        $Company=$row['Company'];  
         $Country=$row['Country'];
        $Phone_Number=$row['Phone_Number'];
        $interesse=$row['interesse'];
        $Date_Inscr=$row['Date_Inscr'];
        $Category=$row['Category'];
        $Award=$row['Award'];
        $Expertise=$row['Expertise'];
                         ?>
        <tr>
             <td><?php echo $C_ID ?></td>
           <td><?php echo $C_origine ?></td>
            <td><?php echo $Email ?></td>
            <td><a><?php echo $Source ?></a></td>
            <td><?php echo $First_name ?></td>
            <td><?php echo $Last_name ?></td>
            <td><?php echo $Middle_Name ?></td>
            <td><?php echo $Fonction ?></td>
            <td><?php echo $Company ?></td>
            <td><?php echo $Country ?></td>
            <td><?php echo $Phone_Number ?></td>
            <td><?php echo $interesse ?></td>
            <td><?php echo $Date_Inscr ?></td>
            <td><?php echo $Category ?></td>
            <td><?php echo $Award ?></td>
            <td><?php echo $Expertise ?></td>
          <td class="btn btn-warning btn-xs update"><a href="Rechercher_Modification_Suppression.php?GetC_ID=<?php echo $C_ID ?>">Edit</a></td> 
        </tr>
       <?php 
    }
  ?>           
   </table>
    </div>
    <?php
    $sql =    "SELECT COUNT(*) AS CountOf FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and employee.UName = '".$_SESSION['User']."' ";
    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }

//You don't need a ; like you do in SQL
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table style='border: solid 1px white;'sss>
          <tr>
          <th>Total</th>
     
       
         
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td>"  . $row['CountOf'] . "</td></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    
    
    
    ?>
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!--
  <script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>
/* session_start();
require_once('Connection.php');
    if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
                echo '<center><h2> List of Customers   </h2><center><br/>';
$sql = " SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.UName = '".$_SESSION['User']."' GROUP BY client.C_ID";
   if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
//You don't need a ; like you do in SQL 
    <th>ID</th> <td>" . $row['C_ID'] . "</td> 
    <th>Update</th>
    <td>". $row['<button type="button" name="update" id="'.$row["C_ID"].'" class="btn btn-warning btn-xs update">Update</button>'] ."</td>
    <table style='border: solid 1px white;'sss>
          <tr>
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
          <th>Category</th>
          <th>Award</th>
          <th>Expertise</th>
          </tr>
   
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "
        <table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
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
       <th class='th-sm'>Category</th>
          <th class='th-sm'>Award</th>
          <th class='th-sm'>Expertise</th>
    </tr>
  </thead>
              ";
            
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['C_origine'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Source'] . "   " . $row['Website'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Award'] . "</td><td>" . $row['Expertise'] . "</td></tr>"; 
        //$row['index'] the index here is a field name
} 
  echo "</table>";
}
    else {
    echo "0 results";
}
    $con->close();

          */ 
-->
 </body>
</html>
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  