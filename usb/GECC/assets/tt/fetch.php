  <?php  
 //fetch.php  
 $con = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["C_ID"]))  
 {  
      $query = "SELECT * FROM client WHERE C_ID = '".$_POST["C_ID"]."'";  
      $result = mysqli_query($con, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>