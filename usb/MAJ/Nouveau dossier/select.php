<?php  
//select.php  
if(isset($_POST["C_ID"]))
{
 $output = '';
 $con = mysqli_connect("localhost", "root", "", "test");
 $query = "SELECT * FROM client WHERE C_ID = '".$_POST["C_ID"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>C_ID</label></td>  
            <td width="70%">'.$row["C_ID"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>C_origine</label></td>  
            <td width="70%">'.$row["C_origine"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>First_name</label></td>  
            <td width="70%">'.$row["First_name"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Last_name</label></td>  
            <td width="70%">'.$row["Last_name"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Middle_Name</label></td>  
            <td width="70%">'.$row["Middle_Name"].'</td>  
        </tr>
          <tr>  
            <td width="30%"><label>Fonction</label></td>  
            <td width="70%">'.$row["Fonction"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Company</label></td>  
            <td width="70%">'.$row["Company"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Country</label></td>  
            <td width="70%">'.$row["Country"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Email</label></td>  
            <td width="70%">'.$row["Email"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Source</label></td>  
            <td width="70%">'.$row["Source"].'</td>  
        </tr>
          <tr>  
            <td width="30%"><label>Phone_Number</label></td>  
            <td width="70%">'.$row["Phone_Number"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Linkden</label></td>  
            <td width="70%">'.$row["Linkden"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>interesse</label></td>  
            <td width="70%">'.$row["interesse"].'</td>  
        </tr>
           <tr>  
            <td width="30%"><label>Date_Inscr</label></td>  
            <td width="70%">'.$row["Date_Inscr"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Black_Liste</label></td>  
            <td width="70%">'.$row["Black_Liste"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>E_ID</label></td>  
            <td width="70%">'.$row["E_ID"].'</td>  
        </tr>
     ';
        
      
            
            
    }
    $output .= '</table></div>';
    echo $output;
}
?>
