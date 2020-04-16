<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
   
       body{
            background-color: #90caf9 ;
            color: black;
        }
        a{
                    color: black;

        }
         label{
        text-align: center;
                     color: black;

    }
 table{
             margin-left: inherit;
             font-size: 10px;
         }
   
        .container{
               margin-left:10px;
         }
    th{
        text-align: center;
        border: 1px solid #414A4C;
  font-size: 13px;
    }
    td{
        text-align: center;
        border: 2px solid #414A4C;
         padding: 0.5px;
          font-size: 11px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GCC</a>
    </div>
   <ul class="nav navbar-nav">
      <li><a href="Home.php">Home</a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Commercial<span class="caret"></span></a>
        <ul class="dropdown-menu">
<li><a href="MANOUNIE.php">MANOUNIE</a></li>
<li><a href="RAGUIGUR.php"> RAGUIGUE  </a></li>
<li><a href="SEMKALI.php"> SEMKALI </a></li>
<li><a href="SAADOUNE.php"> SAADOUNE  </a></li>
<li><a href="HATAB.php">HATAB</a></li>
<li><a href="HAKMI.php"> HAKMI   </a></li>
<li><a href="HADGUEL.php"> HADGUEL  </a></li>
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
<li class="active"><a href="Liste.php"> Search customers  </a></li>
       <li><a href="Effacer_Client.php"> Clear Client </a></li>

</ul>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<?php
    session_start();
    if(isset($_SESSION['User']))
    {
        echo '<center> <strong>  ' . $_SESSION['User'].'</strong><center><br/>';
       // echo '<center><a href="logout.php?logout">Logout</a><center>';
    }
    else
    {
        header("location:index.php");
    }
?>
    <div style="width: 500px; margin: 50px auto;">
             <form method="post" action="" autocomplete="off">
                                 <center><h2> Customer search </h2></center>
    <div class="form-group">
                  <label for="C_origine" class="control-label">contact origine</label>
               <select name="C_origine" class="form-control" autocomplete="off" > 
               <option>Other </option>
                <option>LinkedIn</option>
               <option> facebook</option>
               <option> website</option>
               </select>
              <label for="email" class="control-label">Email</label>       
              <input type="Email" name="Email" class="form-control" autocomplete="off" >
              <label for="First_name" class="control-label">First name</label>  
               <input type="First_name " name="First_name" class="form-control" autocomplete="off" >
               <label for="Last_name" class="control-label">Last name</label>   
               <input type="Last_name " name="Last_name" class="form-control" autocomplete="off" >
            <label for="Middle_Name" class="control-label">Middle Name</label> 
               <input type="Middle_Name" name="Middle_Name" class="form-control" autocomplete="off" >
               <label for="Fonction" class="control-label">Fonction</label>    
               <input type="Fonction" name="Fonction" class="form-control" autocomplete="off" >
               <label for="Company" class="control-label">Company</label>    
               <input type="Company" name="Company" class="form-control" autocomplete="off" >
               <label for="Country" class="control-label">Country</label>    <br> 
	          <select name="Country" class="form-control">
                   <option></option>
                  <option value="Others">Others</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
               <optgroup label="United States">
<option>United States - Uganda</option>
<option>United States - Ukraine</option>
<option>United States - United Kingdom</option>
<option>United States - Alabama</option>
<option>United States - Alaska</option>
<option>United States - Arizona</option>
<option>United States - Arkansas</option>
<option>United States - California</option>
<option>United States - Colorado</option>
<option>United States - Connecticut</option>
<option>United States - Delaware</option>
<option>United States - Florida</option>
<option>United States - Georgia</option>
<option>United States - Hawaii</option>
<option>United States - Idaho</option>
<option>United States - Illinois</option>
<option>United States - Indiana</option>
<option>United States - Iowa</option>
<option>United States - Kansas</option>
<option>United States - Kentucky</option>
<option>United States - Louisiana</option>
<option>United States - Maine</option>
<option>United States - Maryland</option>
<option>United States - Massachusetts</option>
<option>United States - Michigan</option>
<option>United States - Minnesota</option>
<option>United States - Mississippi</option>
<option>United States - Missouri</option>
<option>United States - Montana</option>
<option>United States - Nebraska</option>
<option>United States - Nevada</option>
<option>United States - New Hampshire</option>
<option>United States - New Jersey</option>
<option>United States - New Mexico</option>
<option>United States - New York</option>
<option>United States - North Carolina</option>
<option>United States - North Dakota</option>
<option>United States - Ohio</option>
<option>United States - Oklahoma</option>
<option>United States - Oregon</option>
<option>United States - Pennsylvania</option>
<option>United States - Rhode Island</option>
<option>United States - South Carolina</option>
<option>United States - South Dakota
<option>United States - Tennessee</option>
<option>United States - Texas</option>
<option>United States - Utah</option>
<option>United States - Vermont</option>
<option>United States - Virginia</option>
<option>United States - Washington</option>
<option>United States - West Virginia</option>
<option>United States - Wisconsin</option>
<option>United States - Wyoming</option>
<option>United States - Uruguay</option>
<option>United States - Uzbekistan</option>
                </optgroup>    
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>               
         <!--       <label for="Phone_Number" class="control-label">Phone Number</label>
               <input type="Phone_Number" name="Phone_Number" class="form-control" value="+212" autocomplete="off" > -->
               <label for="interesse" class="control-label"> Interested : </label> 
     <select name="interesse" class="form-control" autocomplete="off" > 
               <option></option>
               <option>Non</option>
               <option> MANOUNIE</option>
               <option> RAGUIGUE</option>
               <option> SEMKALI</option>
               <option> SAADOUNE</option>
               <option> HATAB</option>
               <option> HAKMI</option>
                <option> HADGUEL</option>
               </select>
                  <label for="Source" class="control-label">	Source </label>  <br>    
               <input list="browsers" name="Source" class="form-control">
  <datalist id="browsers">
   <option value="linkedin.com/in/">
  <option value="facebook.com/">
    <option value="Web">
    <option value="Opera">
    <option value="Safari">
  <option value="Microsoft Edge">
  </datalist>
<label for="Black_Liste" class="control-label"> Black_List : </label> 
               <select name="Black_Liste" class="form-control" autocomplete="off" > 
                   <option></option>
               <option>Non</option>
               <option> Oui</option>
               </select>
               <hr/>
        <center><input type="submit" name="btn-login" value="search" class="btn btn-primary"></center>
            </div>
            </form></div>  
   
<?php
require_once('Connection.php');
          if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
if(isset($_POST['C_origine'],$_POST['Email'],$_POST['First_name'],$_POST['Last_name'],$_POST['Middle_Name'],$_POST['Fonction'],$_POST['First_name'],$_POST['Company'],$_POST['Country'],$_POST['interesse'],$_POST['Source'],$_POST['Country'])){
 if(empty($_POST['Black_Liste'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        //echo "Le champ C_origine est vide.";
    }
    elseif(empty($_POST['Email'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
      //  echo "Le champ Email est vide.";
    }
    elseif(empty($_POST['First_name'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ First_name est vide.";
    }
    elseif(empty($_POST['Last_name'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
     //   echo "Le champ Last_name est vide.";
    }
    elseif(empty($_POST['Middle_Name'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Middle_Name est vide.";
    }
    elseif(empty($_POST['Fonction'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        //echo "Le champ Fonction est vide.";
    }
    elseif(empty($_POST['Company'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['Country'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['interesse'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['Source'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
    elseif(empty($_POST['Black_Liste'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
       // echo "Le champ Company est vide.";
    }
 
     $sql = "SELECT DISTINCT client.*,employee.UName FROM `client`, `employee` WHERE client.E_ID = employee.E_ID AND client.C_origine = '".$_POST['C_origine']."' OR client.Email = '".$_POST['Email']."' OR client.First_name = '".$_POST['First_name']."' OR client.Last_name = '".$_POST['Last_name']."' OR client.Middle_Name = '".$_POST['Middle_Name']."' OR client.Fonction = '".$_POST['Fonction']."' OR client.Company = '".$_POST['Company']."' OR client.Country = '".$_POST['Country']."'  OR client.interesse = '".$_POST['interesse']."' OR client.Source = '".$_POST['Source']."' OR client.Black_Liste = '".$_POST['Black_Liste']."' GROUP BY client.C_ID ";
         
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table style='border: solid 1px white;'sss>
          <tr>
           <th>ID</th>
          <th>C_origine</th>
          <th>First_name</th>
          <th>Last_name</th>
          <th>Middle_Name</th>
          <th>Fonction</th>
          <th>Company</th>
          <th>Country</th>
          <th>Email</th>
          <th>Phone_Number</th>
          <th>Intéressé</th>
          <th>Source</th>
          <th>Date_Time</th>
          <th>Black_List</th>
          <th>Commercial</th>
          </tr>
          ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo  "<tr><td>" . $row['C_ID'] . "</td><td>" . $row['C_origine'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr>";  //$row['index'] the index here is a field name
}
  echo "</table>";
}
    else {
    echo "0 results";
}
$con->close();
    
   }
?> 
         </body>
</html>