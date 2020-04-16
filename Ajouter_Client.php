
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        a{
            color: black;
        }
       body{
            background-color: #90caf9 ;
            color: black;
        }
       label{
            color : black;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Welcome.php">GEC</a>
    </div>
   <ul class="nav navbar-nav">
      <li ><a href="Welcome.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact<span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="ListeClient_Commercial.php">List </a></li>
    <li><a href="Ajouter_Client.php">Add New  </a></li>
    <li><a href="Rechercher_Client.php">Email search </a></li>
    <li><a href="Rechercher_Country.php">Country search </a></li>
     </ul>
      </li> 
         <li><a href="Black_Liste.php">Black_List </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
    </ul>
  </div>
</nav> 
<div class="container">
<?php
    session_start();
    if(isset($_SESSION['User'])) {
        echo '<center> <strong>  ' . $_SESSION['User'].'</strong><center><br/>';
        echo '<center><a href="logout.php?logout">Logout</a><center>';
    }
    else  {
        header("location:index.php"); }?>
    <div class="container">
        <div style="width: 500px; margin: 50px auto;">
            <form method="post" action="Fonction_Ajouter_Client.php" autocomplete="off">
                <center><h2>Register a Customer </h2></center>
                <hr/>
           <div class="form-group">
                  <label for="C_origine" class="control-label">Contact Origin</label>
 <select id="ddl" name="C_origine" class="form-control" > 
        <option value="LinkedIn">LinkedIn</option>
        <option value="facebook">facebook</option>
        <option value="Website">Website</option>
     <option value="Other">Other</option>
    </select>
              <label for="email" class="control-label">Email</label>       
              <input type="Email" name="Email" class="form-control" autocomplete="off" required>
              <label for="First_name" class="control-label">First name</label>  
               <input type="text" name="First_name" class="form-control" autocomplete="off" >
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
            </select>               <br>
              <label for="Phone_Number" class="control-label">Phone Number</label>
               <input type="Phone_Number" name="Phone_Number" class="form-control" value="+212" autocomplete="off" >
               <label for="interesse" class="control-label"> Interested : </label> 
               
               <label for="Source" class="control-label">	Source </label>  <br>    
               <input list="browsers" name="Source" class="form-control" >
  <datalist id="browsers">
   <option value="https://www.linkedin.com/in/">
  <option value="https://www.facebook.com/">
  </datalist><br>
            <!--    <select name="Website" class="form-control"> 
               <option>-----------</option>
               <option> Contact request</option>
               <option> Download a program Brochure</option>
               <option> Request from a progg</option>
               <option> Contact a program consultant </option>
               </select> -->
               
  <select  id="inputToDisplay" style="display:none"  name="Website" class="form-control"> 
               <option></option>
               <option> Contact request</option>
               <option> Download a program Brochure</option>
               <option> Request from a progg</option>
               <option> Contact a program consultant </option>
               </select>
    <script>
        var select = document.getElementById( "ddl" )
        select.addEventListener( "change", function ( e )
        {
            var input = document.getElementById( "inputToDisplay" )
 
            if ( e.target.value == "Website" )
                input.style.display = "inline-block"
            else
                input.style.display = "none"
        } )
    </script>
               
               <select id="ddll" name="interesse" class="form-control" autocomplete="off" >
               <option value="Non">Non</option>
               <option value="Yes"> Yes</option>
               </select>

<select id="inputToDispla" style="display:none" name="Category" class="form-control">
           <option> - Select Category -</option>
           <option> Cargo Surveying Training </option>
           <option> Marine Surveying Training </option>
           <option> Shipping Management Training </option>
           <option> SMS / QSHE Standards Training </option>
          <option> Classification and Statutory Training</option>
    </select>
         <script>
        var select = document.getElementById( "ddll" )
        select.addEventListener( "change", function ( e )
        {
            var input = document.getElementById( "inputToDispla" )
            if ( e.target.value == "Yes" )
                input.style.display = "inline-block"
            else
                input.style.display = "none"
        } )
    </script>     
  
<select id="inputToDispla" style="display:none" name="Award" name="Award" class="form-control">
           <option> - Select Award -</option>
           <option> Advanced diploma </option>
           <option> Foundation diploma</option>
           <option> Certificate </option>
    </select>
               
 <!--

<label for="Award" class="control-label" > Award  </label>
<select name="Award" class="form-control">
           <option> - Select Award -</option>
           <option> Advanced diploma </option>
           <option> Foundation diploma</option>
           <option> Certificate </option>
    </select>
<label for="Expertise" class="control-label" > Expertise  </label>
 <select name="Expertise" class="form-control">
               <optgroup label="Advanced diploma">
                 <option>  Draught Surveying</option>
                 <option>  Dry Bulk Cargoes Surveying</option>
                 <option>  Containers Cargoes Surveying</option>
                 <option>  Chemical Cargoes Surveying</option>
                 <option>    Petroleum Products Surveying</option>
             <option>  Refrigerated Cargoes Surveying</option>
             <option>  LNG & LPG Cargoes Surveying</option>
             <option>  General Cargoes Surveying</option>
             <option>  Heavy Lift & Project Cargoes</option>
             <option>  Cargo Lashing and Securing</option>
                   <option>  Cargo Damage Claims</option>
                 <option>  Hulls and Machine Damage Claims Surveying</option>
                 <option>  Flag State Ship Inspection</option>
                 <option>  Marine Engineering</option>
                   <option>  Ship Chartering and Agency</option>
                 <option>  Shipbroking and Chartered Vessel Operations</option>
                 <option>  Logistic and Shipping Management</option>
                 <option>  Shipping Operations and Port Management</option>
                 <option>  Maritime and Offshore Management</option>
             <option> International Maritime Law</option>
               </optgroup>
                 <optgroup label="Foundation diploma">
                 <option>  Draught Surveying</option>
                 <option>  Dry Bulk Cargoes Surveying</option>
                 <option>  Containers Cargoes Surveying</option>
                 <option>  Chemical Cargoes Surveying</option>
                 <option>  Petroleum Products Surveying</option>
             <option>  Refrigerated Cargoes Surveying</option>
             <option>  LNG & LPG Cargoes Surveying</option>
             <option>  General Cargoes Surveying</option>
             <option>  Heavy Lift & Project Cargoes</option>
             <option>  Cargo Lashing and Securing</option>
                  <option> Heavy Lift & Project Cargoes</option>  
                  <option> Ship Chartering and Agency</option>
                 <option>  Shipbroking and Chartered Vessel Operations</option>
                 <option>  Logistic and Shipping Management</option>
                 <option>  Shipping Operations and Port Management</option>
                 <option>  Maritime and Offshore Management</option>
             <option> International Maritime Law</option>
                  <option>  Oil, Gas & Petrochemicals Shipping</option> 
                   </optgroup>
                   <optgroup label="Certificate">
                 
                 <option> Draught Surveying</option>
                 <option>  Dry Bulk Cargoes Surveying</option>
                 <option>  Containers Cargoes Surveying</option>
                 <option>  Chemical Cargoes Surveying</option>
                 <option>  Petroleum Products Surveying</option>
             <option>  Refrigerated Cargoes Surveying</option>
             <option>  LNG & LPG Cargoes Surveying</option>
             <option>  General Cargoes Surveying</option>
             <option>  Heavy Lift & Project Cargoes</option>
                 <option>  Naval Architecture & Ship Stability</option>
                 <option>  Reports and Report Writing</option>
                 <option>  Hulls & Machine Damage Claims</option>
                 <option>  Essential Marine Surveying Law</option>
                 <option>  Marine Insurance</option>
                 <option>  Principles of Shipping Operations & Practices</option>
                 <option> Principles of Shipping Documentation & Practices</option>
                 <option>  Import/Export Techniques and Documentation</option>
                 <option>  Principles of Shipbroking & Chartering</option>
                 <option>  Shipping Law & Disputes</option>
             <option>  Port Management</option>
             <option>  Maritime Law and Insurance</option>
             <option>  Shipbroking and Chartered Vessel Operations</option>
             <option>  Maritime Economic and Shipbroking</option>
                   <option>  Ship Management and Offshore</option>
                   <option>  Shipping Business and Operation</option>
                   <option>  Ship Management and Finance</option>
                   <option>  Logistics & Multi-modal Transport</option>
                   <option>  Introduction To Shipping</option>
                   <option>  Tanker Operation</option>
                 <option>  Maritime Auditor Training Course (ISO 9001, ISO 14001 and BS OHSAS 18001)</option>
                 <option>  Maritime Auditor Training Course (ISM - ISPS - MLC)</option>
                 <option>  ILO MLC Awareness</option>
                 <option>  MLC Vessel Preparation & Audit</option>
                 <option>  Risk Management & Incident Investigation</option>
             <option>  Risk Management</option>
             <option>  Incident Investigation</option>
             <option>  Casualty Investigation</option>
             <option>  Crisis Management & Social Media Handling</option>
                   <option> TMSA Awareness</option>
                   <option> Management of Change</option>
                   <option>  Dry Bulk Vetting (Rightship Requirements)</option>
                   <option>  Environmental Compliance</option>
                   <option>  EPA Vessel General Permit (VGP)</option>
                   <option>  Energy Efficiency Awareness</option>
                  <option>  Marine Environment Awareness</option>
                   <option>  Ballast Water Management</option>
                   <option>  ISO 50001 Awareness</option>
                   <option>  Root Cause Analysis</option>
                   <option>  Designated Person Ashore (DPA)</option>
                   <option>  Port State Control</option>
                   <option>  Ship Safety Officer</option>
                   <option>  Train the Trainer</option>
                   <option>  Crew Management</option>
                   <option>  STCW 2010 and new amendments</option>
                        <option> Statutory Surveys and Classifications</option>
                       <option>  Module 2A - Hull Structure</option> 
                       <option>  Module 2B - Machinery Systems</option>
                       <option>  Module 2C - Subdivision And Stability</option>
                        <option>  Module 2D - Load Line</option> 
                       <option>  Module 2E - Tonnage</option> 
                       <option>  Module 2F - Structural Fire Protection</option> 
                       <option>  Module 2G - Safety Equipment</option> 
                       <option>  Module 2H - Oil Pollution Prevention</option>
                       <option>  Module 2I - Noxious Liquid Substances Pollution Prevention</option>
                       <option>  Module 2J - Radio Equipment", 
                       <option>  Module 2K - Carriage of Dangerous Chemicals in Bulk</option>
                       <option>  Module 2L - Carriage of Liquefied Gases in Bulk</option>
    </optgroup>
               </select>
           
            
             <label for="training_lang" class="control-label" > Languages:  </label> 
<select name="training_lang" class="form-control">
                    <option>- English -</option>           
                    <option>- French -</option>     
</select>
               
               -->
<label for="Black_Liste" class="control-label"> Black_List : </label> 
               <select name="Black_Liste" class="form-control" autocomplete="off" > 
               <option>Non</option>
               <option> Oui</option>
               </select>
<center><input type="submit" name="btn-login" value="Add" class="btn btn-primary"></center>    
                <hr/>
                 </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html> 