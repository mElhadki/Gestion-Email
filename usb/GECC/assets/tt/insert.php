<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(!empty($_POST))  
 {  $output = '';  
      $message = ''; 
      $C_origine = mysqli_real_escape_string($con, $_POST["C_origine"]);  
      $Email = mysqli_real_escape_string($con, $_POST["Email"]);  
      $First_name = mysqli_real_escape_string($con, $_POST["First_name"]);  
      $Last_name = mysqli_real_escape_string($con, $_POST["Last_name"]);  
      $Middle_Name = mysqli_real_escape_string($con, $_POST["Middle_Name"]);
      $Fonction = mysqli_real_escape_string($con, $_POST["Fonction"]);  
      $Company = mysqli_real_escape_string($con, $_POST["Company"]);  
      $Country = mysqli_real_escape_string($con, $_POST["Country"]);  
      $Source = mysqli_real_escape_string($con, $_POST["Source"]);  
      $Website = mysqli_real_escape_string($con, $_POST["Website"]);
      $interesse = mysqli_real_escape_string($con, $_POST["interesse"]);  
      $Phone_Number = mysqli_real_escape_string($con, $_POST["Phone_Number"]);  
      $Category = mysqli_real_escape_string($con, $_POST["Category"]);  
      $Advanced_diploma = mysqli_real_escape_string($con, $_POST["Advanced_diploma"]);
      $Foundation_diploma = mysqli_real_escape_string($con, $_POST["Foundation_diploma"]);  
      $Certificate = mysqli_real_escape_string($con, $_POST["Certificate"]);  
      $training_lang = mysqli_real_escape_string($con, $_POST["training_lang"]);  
      $Black_Liste = mysqli_real_escape_string($con, $_POST["Black_Liste"]); 
************************************************************************************************
    /*  $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $address = mysqli_real_escape_string($connect, $_POST["address"]);  
      $gender = mysqli_real_escape_string($connect, $_POST["gender"]);  
      $designation = mysqli_real_escape_string($connect, $_POST["designation"]);  
      $age = mysqli_real_escape_string($connect, $_POST["age"]);  */
      if($_POST["C_ID"] != '')  
      {  
         /*  $query = "  
           UPDATE tbl_employee   
           SET name='$name',   
           address='$address',   
           gender='$gender',   
           designation = '$designation',   
           age = '$age'   
           
           
         
           
           WHERE id='".$_POST["employee_id"]."'";  */
          
       $query =   "UPDATE client SET
                  C_origine = '$C_origine',
                  First_name = '$First_name',
                  Last_name = '$Last_name',
                  Middle_Name = '$Middle_Name',
                  Fonction = '$Fonction',
                  Company = '$Company',
                  Country = '$Country',
                  Phone_Number = '$Phone_Number',
                  interesse = '$interesse',
                  Source = '$Source',
                  Email =  $_POST["Email"],
                  Category = '$Category',
                  Advanced_diploma = '$Advanced_diploma ',
                  Foundation_diploma = '$Foundation_diploma ',
                  Certificate = '$Certificate ',
                  training_lang = '$training_lang ',
                  Black_Liste ='$Black_Liste'
                  WHERE C_ID ='".$_POST["C_ID"]"'";
          
          
           $message = 'Data Updated';  
      }  
      else  
      {  
         $query =  "INSERT INTO client(C_origine, Email, First_name, Last_name, Middle_Name, Fonction, Company, Country, Source,Website, interesse, Phone_Number, Category, Advanced_diploma, Foundation_diploma, Certificate, training_lang, Date_Inscr, Black_Liste)
           VALUES(`$C_origine`, `$Email`, `$First_name`, `$Last_name`, `$Middle_Name`, `$Fonction`, `$Company`, `$Country`, `$Source`, `$Website`, `$interesse`, `$Phone_Number`, `$Category`, `$Advanced_diploma`, `$Foundation_diploma`, `$Certificate`, `$training_lang`, `$Date_Inscr`, `$Black_Liste`)";  
           
           
          /* $query = "  
           INSERT INTO client(name, address, gender, designation, age)  
           VALUES('$name', '$address', '$gender', '$designation', '$age');  
           ";  */
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($con, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM client ORDER BY C_ID DESC";  
           $result = mysqli_query($con, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Employee Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["Email"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["C_ID"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["C_ID"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 