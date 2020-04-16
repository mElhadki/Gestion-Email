<?php
require_once('Connection.php');
          if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
        
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