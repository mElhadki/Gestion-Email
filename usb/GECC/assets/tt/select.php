<?php  
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
                     <td width="30%"><label>C_origine</label></td>  
                     <td width="70%">'.$row["C_origine"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["Email"].'</td>  
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
                     <td width="70%">'.$row["Middle_Name"].' Year</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Fonction</label></td>  
                     <td width="70%">'.$row["Fonction"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Company</label></td>  
                     <td width="70%">'.$row["Company"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Country</label></td>  
                     <td width="70%">'.$row["Country"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Source</label></td>  
                     <td width="70%">'.$row["Source"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Website</label></td>  
                     <td width="70%">'.$row["Website"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>interesse</label></td>  
                     <td width="70%">'.$row["interesse"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Phone_Number</label></td>  
                     <td width="70%">'.$row["Phone_Number"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Category</label></td>  
                     <td width="70%">'.$row["Category"].' Year</td>  
                </tr> 
                  <tr>  
                     <td width="30%"><label>Advanced_diploma</label></td>  
                     <td width="70%">'.$row["Advanced_diploma"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Foundation_diploma</label></td>  
                     <td width="70%">'.$row["Foundation_diploma"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Certificate</label></td>  
                     <td width="70%">'.$row["Certificate"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>training_lang</label></td>  
                     <td width="70%">'.$row["training_lang"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Date_Inscr</label></td>  
                     <td width="70%">'.$row["Date_Inscr"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Black_Liste</label></td>  
                     <td width="70%">'.$row["Black_Liste"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>E_ID</label></td>  
                     <td width="70%">'.$row["E_ID"].' Year</td>  
                </tr> 
              
                
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>






 