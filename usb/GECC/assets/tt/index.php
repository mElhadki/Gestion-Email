<?php  
 $con = mysqli_connect("localhost", "root", "", "test");  
 $query = "SELECT * FROM client  GROUP BY C_ID";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Mis A Jour </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Mis A Jour </h3>  
                <br />  
                <div class="table-responsive">  
                     <div align="right">  
             <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
                     </div>  
                     <br />  
                     <div id="client_Table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">Client Name</th>  
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["Email"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["C_ID"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
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
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form"> 
                          <label for="C_origine" class="control-label">Contact Origin</label>
               <select id="ddl" name="C_origine" class="form-control" > 
        <option value="LinkedIn">LinkedIn</option>
        <option value="facebook">facebook</option>
        <option value="Website">Website</option>
    </select>
                          <label>Enter Client Email</label>  
                          <input type="text" name="Email" id="Email" class="form-control" />  
                          <br />  
                          <label>Enter Client First_name</label>  
                          <input type="text" name="First_name" id="First_name" class="form-control" />  
                            <label>Enter Client Last_name</label>  
                          <input type="text" name="Last_name" id="Last_name" class="form-control" />  
                          <label>Enter Client Middle_Name</label>  
                          <input type="text" name="Middle_Name" id="Middle_Name" class="form-control" />  
                          <label>Enter Client Fonction</label>  
                          <input type="text" name="Fonction" id="Fonction" class="form-control" />  
                          <label>Enter Client Company</label>  
                          <input type="text" name="Company" id="Company" class="form-control" />  
                          <label>Enter Client Country</label>  
                         <select id="Country" name="Country" class="form-control">
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
                          <label>Enter Client Phone_Number</label>  
                          <input type="text" name="Phone_Number" id="Phone_Number" class="form-control" /> 
                          <label>Interested</label>  
               <select id="interesse" name="interesse" class="form-control" autocomplete="off" > 
               <option>Non</option>
               <option> MANOUNIE</option>
               <option> RAGUIGUE</option>
               <option> SEMKALI</option>
               <option> SAADOUNE</option>
               <option> HATAB</option>
               <option> HAKMI</option>
                <option> HADGUEL</option>
               </select>
                          <label>Enter Client Source</label>  
<input id="Source" list="browsers" name="Source" class="form-control">
<datalist id="browsers">
   <option value="linkedin.com/in/">
  <option value="facebook.com/">
    <option value="Web">
    <option value="Opera">
    <option value="Safari">
  <option value="Microsoft Edge">
</datalist>  
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
                         <label>Enter Client Category</label>  
                         <select name="Category" id="Category" class="form-control">
           <option> - Select Category -</option>
           <option> Cargo Surveying Training </option>
           <option> Marine Surveying Training </option>
           <option> Shipping Management Training </option>
           <option> SMS / QSHE Standards Training </option>
          <option> Classification and Statutory Training</option>
    </select>
                          <br />  
                          <label>Select Advanced_diploma</label>  
                            <select name="Advanced_diploma" id="Advanced_diploma" class="form-control">
             <optgroup label="Advanced diploma">
                 <option> - Select Advanced diploma -</option>
                 <option> -AD- Draught Surveying</option>
                 <option> -AD- Dry Bulk Cargoes Surveying</option>
                 <option> -AD- Containers Cargoes Surveying</option>
                 <option> -AD- Chemical Cargoes Surveying</option>
                 <option> -AD-  -AD- Petroleum Products Surveying</option>
             <option> -AD- Refrigerated Cargoes Surveying</option>
             <option> -AD- LNG & LPG Cargoes Surveying</option>
             <option> -AD- General Cargoes Surveying</option>
             <option> -AD- Heavy Lift & Project Cargoes</option>
             <option> -AD- Cargo Lashing and Securing</option>
             </optgroup>
             <optgroup label="Advanced diploma">
                 <option> -AD- Cargo Damage Claims</option>
                 <option> -AD- Hulls and Machine Damage Claims Surveying</option>
                 <option> -AD- Flag State Ship Inspection</option>
                 <option> -AD- Marine Engineering</option>
             </optgroup>
             <optgroup label="Advanced diploma">
                 <option> -AD- Ship Chartering and Agency</option>
                 <option> -AD- Shipbroking and Chartered Vessel Operations</option>
                 <option> -AD- Logistic and Shipping Management</option>
                 <option> -AD- Shipping Operations and Port Management</option>
                 <option> -AD- Maritime and Offshore Management</option>
             <option> -AD- International Maritime Law</option>
             </optgroup>
</select>
                          <br />  
                          <label>Enter Foundation_diploma</label>  
                    <select name="Foundation_diploma" id="Foundation_diploma" class="form-control">
             <optgroup label="Foundation diploma">
                 <option> - Select Foundation diploma -</option>
                 <option> -FD- Draught Surveying</option>
                 <option> -FD- Dry Bulk Cargoes Surveying</option>
                 <option> -FD- Containers Cargoes Surveying</option>
                 <option> -FD- Chemical Cargoes Surveying</option>
                 <option> -FD- Petroleum Products Surveying</option>
             <option> -FD- Refrigerated Cargoes Surveying</option>
             <option> -FD- LNG & LPG Cargoes Surveying</option>
             <option> -FD- General Cargoes Surveying</option>
             <option> -FD- Heavy Lift & Project Cargoes</option>
             <option> -FD- Cargo Lashing and Securing</option>
                  <option> -FD- Heavy Lift & Project Cargoes</option>
             </optgroup>
             <optgroup label="Foundation diploma">
                <option> -FD- Ship Chartering and Agency</option>
                 <option> -FD- Shipbroking and Chartered Vessel Operations</option>
                 <option> -FD- Logistic and Shipping Management</option>
                 <option> -FD- Shipping Operations and Port Management</option>
                 <option> -FD- Maritime and Offshore Management</option>
             <option> -FD- International Maritime Law</option>
                  <option> -FD- Oil, Gas & Petrochemicals Shipping</option>
             </optgroup>
</select>
                          <br />  
                          <label>Enter Certificate</label>  
                         <select name="Certificate" id="Certificate" class="form-control">
             <optgroup label="Certificate">
                 <option>- Select Certificate -</option>
                 <option> -C- Draught Surveying</option>
                 <option> -C- Dry Bulk Cargoes Surveying</option>
                 <option> -C- Containers Cargoes Surveying</option>
                 <option> -C- Chemical Cargoes Surveying</option>
                 <option> -C- Petroleum Products Surveying</option>
             <option> -C- Refrigerated Cargoes Surveying</option>
             <option> -C- LNG & LPG Cargoes Surveying</option>
             <option> -C- General Cargoes Surveying</option>
             <option> -C- Heavy Lift & Project Cargoes</option>
             </optgroup>
             <optgroup label="Certificate">
                 <option> -C- Naval Architecture & Ship Stability</option>
                 <option> -C- Reports and Report Writing</option>
                 <option> -C- Hulls & Machine Damage Claims</option>
                 <option> -C- Essential Marine Surveying Law</option>
                 <option> -C- Marine Insurance</option>
             </optgroup>
             <optgroup label="Certificate">
                 <option> -C- Principles of Shipping Operations & Practices</option>
                 <option> -C- Principles of Shipping Documentation & Practices</option>
                 <option> -C- Import/Export Techniques and Documentation</option>
                 <option> -C- Principles of Shipbroking & Chartering</option>
                 <option> -C- Shipping Law & Disputes</option>
             <option> -C- Port Management</option>
             <option> -C- Maritime Law and Insurance</option>
             <option> -C- Shipbroking and Chartered Vessel Operations</option>
             <option> -C- Maritime Economic and Shipbroking</option>
                   <option> -C- Ship Management and Offshore</option>
                   <option> -C- Shipping Business and Operation</option>
                   <option> -C- Ship Management and Finance</option>
                   <option> -C- Logistics & Multi-modal Transport</option>
                   <option> -C- Introduction To Shipping</option>
                   <option> -C- Tanker Operation</option>
             </optgroup>
             <optgroup label="Certificate">
                 <option> -C- Maritime Auditor Training Course (ISO 9001, ISO 14001 and BS OHSAS 18001)</option>
                 <option> -C- Maritime Auditor Training Course (ISM - ISPS - MLC)</option>
                 <option> -C- ILO MLC Awareness</option>
                 <option> -C- MLC Vessel Preparation & Audit</option>
                 <option> -C- Risk Management & Incident Investigation</option>
             <option> -C- Risk Management</option>
             <option> -C- Incident Investigation</option>
             <option> -C- Casualty Investigation</option>
             <option> -C- Crisis Management & Social Media Handling</option>
                   <option> -C- TMSA Awareness</option>
                   <option> -C- Management of Change</option>
                   <option> -C- Dry Bulk Vetting (Rightship Requirements)</option>
                   <option> -C- Environmental Compliance</option>
                   <option> -C- EPA Vessel General Permit (VGP)</option>
                   <option> -C- Energy Efficiency Awareness</option>
                  <option> -C- Marine Environment Awareness</option>
                   <option> -C- Ballast Water Management</option>
                   <option> -C- ISO 50001 Awareness</option>
                   <option> -C- Root Cause Analysis</option>
                   <option> -C- Designated Person Ashore (DPA)</option>
                   <option> -C- Port State Control</option>
                   <option> -C- Ship Safety Officer</option>
                   <option> -C- Train the Trainer</option>
                   <option> -C- Crew Management</option>
                   <option> -C- STCW 2010 and new amendments</option>
             </optgroup>
             <optgroup label="Certificate">
                        <option> -C- Statutory Surveys and Classifications</option>
                       <option> -C- Module 2A - Hull Structure</option> 
                       <option> -C- Module 2B - Machinery Systems</option>
                       <option> -C- Module 2C - Subdivision And Stability</option>
                        <option> -C- Module 2D - Load Line</option> 
                       <option> -C- Module 2E - Tonnage</option> 
                       <option> -C- Module 2F - Structural Fire Protection</option> 
                       <option> -C- Module 2G - Safety Equipment</option> 
                       <option> -C- Module 2H - Oil Pollution Prevention</option>
                       <option> -C- Module 2I - Noxious Liquid Substances Pollution Prevention</option>
                       <option> -C- Module 2J - Radio Equipment", 
                       <option> -C- Module 2K - Carriage of Dangerous Chemicals in Bulk</option>
                       <option> -C- Module 2L - Carriage of Liquefied Gases in Bulk</option>
    </optgroup>
</select>  
                         
                          <br />  
                         <label>Enter Languages</label>  
                            <label for="training_lang" class="control-label" > Languages:  </label> 
<select name="training_lang" id="Certificate"  class="form-control">
                    <option>- English -</option>           
                    <option>- French -</option>     
</select>
                             <label> Black_List : </label> 
<select name="Black_Liste" id="Black_Liste" class="form-control" autocomplete="off" > 
               <option>Non</option>
               <option> Oui</option>
               </select>
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                                <br>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var C_ID = $(this).attr("C_ID");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{C_ID:C_ID},  
                dataType:"json",  
                success:function(data){  
                     $('#C_origine').val(data.C_origine);  
                     $('#Email').val(data.Email);  
                     $('#First_name').val(data.First_name);  
                     $('#Last_name').val(data.Last_name);  
                     $('#Middle_Name').val(data.Middle_Name);  
                     $('#C_ID').val(data.C_ID);  
                     $('#Fonction').val(data.Fonction);  
                     $('#Company').val(data.Company);
                     $('#Country').val(data.Country);  
                     $('#Source').val(data.Source);  
                     $('#Website').val(data.Website);  
                     $('#interesse').val(data.interesse); 
                     $('#Phone_Number').val(data.Phone_Number);  
                     $('#Category').val(data.Category);  
                     $('#Advanced_diploma').val(data.Advanced_diploma);  
                     $('#Foundation_diploma').val(data.Foundation_diploma);  
                     $('#Certificate').val(data.Certificate);  
                     $('#training_lang').val(data.training_lang); 
                    $('#Date_Inscr').val(data.Date_Inscr);  
                     $('#Black_Liste').val(data.Black_Liste); 
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }    });     });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#C_origine').val() == "")  
           {  
                alert("C_origine is required");  
           }  
          if($('#Email').val() == "")  
           {  
                alert("Email is required");  
           } 
           else if($('#First_name').val() == '')  
           {  
                alert("First_name is required");  
           }  
           else if($('#Last_name').val() == '')  
           {  
                alert("Last_name is required");  
           }  
           else if($('#Middle_Name').val() == '')  
           {  
                alert("Middle_Name is required");  
           }  
          else if($('#Fonction').val() == '')  
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
          
          else if($('#Source').val() == '')  
           {  
                alert("Source is required");  
           }  
          else if($('#Website').val() == '')  
           {  
                alert("Website is required");  
           }  
           else if($('#interesse').val() == '')  
           {  
                alert("interesse is required");  
           }  
          else if($('#Phone_Number').val() == '')  
           {  
                alert("Phone_Number is required");  
           } 
           else if($('#Category').val() == '')  
           {  
                alert("Category is required");  
           }  
          else if($('#Advanced_diploma').val() == '')  
           {  
                alert("Advanced_diploma is required");  
           } 
           else if($('#Foundation_diploma').val() == '')  
           {  
                alert("Foundation_diploma is required");  
           }  
          else if($('#Certificate').val() == '')  
           {  
                alert("	Certificate is required");  
           } 
           else if($('#training_lang').val() == '')  
           {  
                alert(" training_lang is required");  
           } 
           else if($('#Date_Inscr').val() == '')  
           {  
                alert("	Date_Inscr is required");  
           } 
           else if($('#Black_Liste').val() == '')  
           {  
                alert("	Black_Liste is required");  
           } 
           else  
           {  
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
           var C_ID = $(this).attr("C_ID");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{C_ID:C_ID},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>
 