<?php
//insert.php  
$con = mysqli_connect("localhost", "root", "", "test");
if(!empty($_POST))
{
 $output = '';
    $C_origine = mysqli_real_escape_string($con, $_POST["C_origine"]);  
    $First_name = mysqli_real_escape_string($con, $_POST["First_name"]);  
    $Last_name = mysqli_real_escape_string($con, $_POST["Last_name"]);  
    $Middle_Name = mysqli_real_escape_string($con, $_POST["Middle_Name"]);  
    $Fonction = mysqli_real_escape_string($con, $_POST["Fonction"]);
    $Company = mysqli_real_escape_string($con, $_POST["Company"]);  
    $Country = mysqli_real_escape_string($con, $_POST["Country"]);  
    $Email = mysqli_real_escape_string($con, $_POST["Email"]);  
    $Source = mysqli_real_escape_string($con, $_POST["Source"]);  
    $Phone_Number = mysqli_real_escape_string($con, $_POST["Phone_Number"]);  
    $interesse = mysqli_real_escape_string($con, $_POST["interesse"]);  
    $Black_Liste = mysqli_real_escape_string($con, $_POST["Black_Liste"]);
    $query = "
INSERT INTO client(C_origine,First_name,Last_name,Middle_Name,Fonction,Company,Country,Email,Source,
Phone_Number,interesse,Black_Liste)  
VALUES('$C_origine', '$First_name', '$Last_name', '$Middle_Name', '$Fonction', '$Company', '$Country', '$Email', '$Source','$Phone_Number','$interesse','$Black_Liste')";
    if(mysqli_query($con, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';
     $select_query = "SELECT * FROM client ORDER BY C_ID DESC";
     $result = mysqli_query($con, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="70%">Employee Name</th>  
                         <th width="30%">View</th>  
                    </tr> ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["Email"] . '</td>  
      <td><input type="button" name="view" value="view" C_ID="' . $row["C_ID"] . '" class="btn btn-info btn-xs view_data" /></td>  
                    </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}
?>
