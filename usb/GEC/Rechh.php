<?php 
session_start();
require_once('Connection.php');
     if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 

$sql = " SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.UName = '".$_SESSION['User']."' GROUP BY client.C_ID";
    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }

      ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- DataTables CSS -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script href="js/addons/datatables.min.js" rel="stylesheet"></script>

<!-- DataTables Select CSS -->
<link href="css/addons/datatables-select.min.css" rel="stylesheet">
<!-- DataTables Select JS -->
<script href="js/addons/datatables-select.min.js" rel="stylesheet"></script>
    <style>
  /*
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439 no-repeat center top;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: white;
    margin-left:40%;
}*/
    </style>
</head>


<body>
    <script>
    // Material Design example
$('#dt-material-checkbox').dataTable({

columnDefs: [{
orderable: false,
className: 'select-checkbox',
targets: 0
}],
select: {
style: 'os',
selector: 'td:first-child'
}
});
});
    </script>
     
<table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
  <thead>
    <tr>
              <th class="th-sm">ID</th>
          <th class="th-sm">C_origine</th>
           <th class="th-sm">Email</th>
          <th class="th-sm">Source</th>
        <th class="th-sm">First_name</th>
          <th class="th-sm">Last_name</th>
          <th class="th-sm">Middle_Name</th>
          <th class="th-sm">Fonction</th>
          <th class="th-sm">Company</th>
          <th class="th-sm">Country</th>
          <th class="th-sm">Phone_Number</th>
          <th class="th-sm">Intéressé</th>
         <th class="th-sm">Date_Time</th>
          <th class="th-sm">Black_Liste</th>
          <th class="th-sm">Category</th>
          <th class="th-sm">Award</th>
          <th class="th-sm">Expertise</th>
          <th class="th-sm">Commercial</th>
</tr>
  </thead>
        
        <?php
    
    $result = $con->query($sql);
   
        
    while($row=$result->fetch_assoc()){

        $ID=$row['ID'];
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
        $Intéressé=$row['Intéressé'];
        $Date_Time=$row['Date_Time'];
        $Black_Liste=$row['Black_Liste'];
        $Category=$row['Category'];  
        $Award=$row['Award'];
        $Expertise=$row['Expertise'];
        $Commercial=$row['Commercial'];
        
        ?>
    <tbody>
        <tr>
           <td><?php echo  $ID ?></td>
           <td><?php echo $C_origine ?></td>
            <td><?php echo $Email ?></td>
            <td><?php echo $Source ?></td>
            <td><?php echo $First_name ?></td>
            <td><?php echo $Last_name ?></td>
            <td><?php echo $Middle_Name ?></td>
            <td><?php echo $Fonction ?></td>
            <td><?php echo $Company ?></td>
            <td><?php echo $Country ?></td>
            <td><?php echo $Phone_Number ?></td>
            <td><?php echo $Intéressé ?></td>
            <td><?php echo $Date_Time ?></td>
            <td><?php echo $Black_Liste ?></td>
            <td><?php echo $Category ?></td>
            <td><?php echo $Award ?></td>
            <td><?php echo $Expertise ?></td>
            <td><?php echo $Commercial ?></td>
           <!-- <td><a href="Edit.php?GetMatricule=<?php echo $Matricule ?>">Edit</a></td>
            <td><a href="Delete.php?Del=<?php echo $Matricule ?>">Delete</a></td> -->
        
        </tr></tbody>
        
       <?php 
    }
  ?>         
        
   </table>