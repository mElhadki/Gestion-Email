<?php  
//index.php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM client ORDER BY C_ID DESC";
$result = mysqli_query($con, $query);
 ?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:700px;">  
   <h3 align="center">Insert Data Through Bootstrap Modal by using Ajax PHP</h3>  
   <br />  
   <div class="table-responsive">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th width="70%">Employee Email</th>  
       <th width="30%">View</th>
      </tr>
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
       <td><?php echo $row["Email"]; ?></td>
       <td><input type="button" name="view" value="view" id="<?php echo $row["C_ID"]; ?>" class="btn btn-info btn-xs view_data" /></td>
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  
  </div>
 </body>  
</html>  

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">PHP Ajax Insert Data in MySQL By Using Bootstrap Modal</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
                <label for="C_origine" class="control-label">contact origine</label>
                <select name="C_origine" class="form-control" autocomplete="off" > 
               <option>LinkedIn</option>
               <option> facebook</option>
               <option> website</option>
               </select> 
                <label for="email" class="control-label">Email</label>
                <input type="Email" name="Email" class="form-control" autocomplete="off" required>
                <label for="First_name" class="control-label">First name</label>
                <input type="First_name " name="First_name" class="form-control" autocomplete="off" >
                <label for="Last_name" class="control-label">Last name</label>
                <input type="Last_name " name="Last_name" class="form-control" autocomplete="off" >
                <label for="Middle_Name" class="control-label">Middle Name</label>
                <input type="Middle_Name" name="Middle_Name" class="form-control" autocomplete="off" >
                <label for="Fonction" class="control-label">Fonction</label>
                <input type="Fonction" name="Fonction" class="form-control" autocomplete="off" required>
                <label for="Company" class="control-label">Company</label>
                <input type="Company" name="Company" class="form-control" autocomplete="off" >
                <label for="Country" class="control-label">Country</label>     
                <select name="Country" class="form-control" autocomplete="off" >
                    <option value="Other">Other</option>
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
 <option value="USA"> Uganda</option>
<option value="USA">Ukraine</option>
<option value="USA">United Arab Emirates</option>
<option value="USA">United Kingdom</option>
<option value="USA">United States</option>
<option value="USA">Alabama</option>
<option value="USA">Alaska</option>
<option value="USA">Arizona</option>
<option value="USA">Arkansas</option>
<option value="USA">California</option>
<option value="USA">Colorado</option>
<option value="USA">Connecticut</option>
<option value="USA">Delaware</option>
<option value="USA">Florida</option>
<option value="USA">Georgia</option>
<option value="USA">Hawaii</option>
<option value="USA">Idaho</option>
<option value="USA">Illinois</option>
<option value="USA">Indiana</option>
<option value="USA">Iowa</option>
<option value="USA">Kansas</option>
<option value="USA">Kentucky</option>
<option value="USA">Louisiana</option>
<option value="USA">Maine</option>
<option value="USA">Maryland</option>
<option value="USA">Massachusetts</option>
<option value="USA">Michigan</option>
<option value="USA">Minnesota</option>
<option value="USA">Mississippi</option>
<option value="USA">Missouri</option>
<option value="USA">Montana</option>
<option value="USA">Nebraska</option>
<option value="USA">Nevada</option>
<option value="USA">New Hampshire</option>
<option value="USA">New Jersey</option>
<option value="USA">New Mexico</option>
<option value="USA">New York</option>
<option value="USA">North Carolina</option>
<option value="USA">North Dakota</option>
<option value="USA">Ohio</option>
<option value="USA">Oklahoma</option>
<option value="USA">Oregon</option>
<option value="USA">Pennsylvania</option>
<option value="USA">Rhode Island</option>
<option value="USA">South Carolina</option>
<option value="USA">South Dakota
<option value="USA">Tennessee</option>
<option value="USA">Texas</option>
<option value="USA">Utah</option>
<option value="USA">Vermont</option>
<option value="USA">Virginia</option>
<option value="USA">Washington</option>
<option value="USA">West Virginia</option>
<option value="USA">Wisconsin</option>
<option value="USA">Wyoming</option>
<option value="USA">Uruguay</option>
<option value="USA">Uzbekistan</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
</select><br>
                <label for="Phone_Number" class="control-label">Phone Number</label>
                <input type="Phone_Number" name="Phone_Number" class="form-control" value="+212" autocomplete="off" ><br>
                <label for="Source" class="control-label">	Source </label>  <br>    
                <input class="form-control" autocomplete="off" list="browsers" id="myBrowser" name="Source" />
                <datalist id="browsers" value="linkedin.com/in/">
  <option value="linkedin.com/in/">
  <option value="facebook.com/">
    <option value="Web">
    <option value="Opera">
    <option value="Safari">
  <option value="Microsoft Edge">
</datalist><br>
                <label for="interesse" class="control-label"> Interested : </label> 
                <select name="interesse" class="form-control" autocomplete="off" > 
               <option>Commercial</option>
               <option> MANOUNIE</option>
               <option> RAGUIGUE</option>
               <option> SEMKALI</option>
               <option> SAADOUNE</option>
               <option> HATAB</option>
               <option> HAKMI</option>
                <option> HADGUEL</option>
               </select>
                <label for="Black_Liste" class="control-label"> Black Liste : </label> 
                <select name="Black_Liste" class="form-control" autocomplete="off" > 
               <option>Non</option>
               <option> Oui</option>
               </select>
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
   <!--      ***************************************************************  **************************************************************
    <label>Enter Employee Email</label>
     <input type="text" name="Email" id="Email" class="form-control" />
     <br />
     <label>Enter Employee Address</label>
     <textarea name="address" id="address" class="form-control"></textarea>
     <br />
     <label>Select Gender</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Male">Male</option>  
      <option value="Female">Female</option>
     </select>
     <br />  
     <label>Enter Designation</label>
     <input type="text" name="designation" id="designation" class="form-control" />
     <br />  
     <label>Enter Age</label>
     <input type="text" name="age" id="age" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
-->
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Employee Details</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#Email').val() == "")  
  {  
   alert("Email is required");  
  }  
      else if($('#C_origine').val() == '')  
  {  
   alert("C_origine is required");  
  }  
  else if($('#First_name').val() == '')
  {  
   alert("First_name is required");  
  } else if($('#Last_name').val() == '')  
  {  
   alert("Last_name is required");  
  }  
  else if($('#Middle_Name').val() == '')
  {  
   alert("Middle_Name is required");  
  } else if($('#Fonction').val() == '')  
  {  
   alert("Fonction is required");  
  }  
  else if($('#Company').val() == '')
  {  
   alert("Company is required");  
  }
  else if($('#Country').val() == '')  
  {  
   alert("Country is required");  
  }  
  else if($('#Phone_Number').val() == '')
  {  
   alert("Phone_Number is required");  
  }
   else if($('#Source').val() == '')
  {  
   alert("Source is required");  
  }
     else if($('#interesse').val() == '')
  {  
   alert("interesse is required");  
  }
     else if($('#Black_Liste').val() == '')
  {  
   alert("Black_Liste is required");  
  }
  else  {  
   $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });
 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var C_ID = $(this).attr("C_ID");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{C_ID:C_ID},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
});  
 </script>
