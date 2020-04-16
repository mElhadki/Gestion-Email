
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM client WHERE E_ID = 7 GROUP BY C_ID";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>C_ID</th>  
                         <th>Email</th>  
                        
    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["C_ID"].'</td>  
                         <td>'.$row["Email"].'</td>  
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>