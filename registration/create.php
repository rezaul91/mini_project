<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/countrySelect.min.css" />
        <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <header class="text-center">
            <div class="container"> 
                <!--<a href="logout.php" class="btn pull-right"><i class="fa fa-power-off"></i></a>-->
                <a href="index.php" ><img src="images/phonebook.jpg" alt="phonebook"></a>
                <h1>Registration</h1>
                <h3>Codeworiorer</h3>
            </div>
        </header>
        <?php
        
        if (isset($unsuccess)) {
            ?>
            <div class = "alert alert-danger">
                <button type = "button" class = "close" data-dismiss = "alert">
                    <i class = " fa fa-times"></i>
                </button>
                <p>
                    <strong>
                        <i class = "ace-icon fa fa-check"></i>
                        Sorry!
                    </strong>
                    <?php echo $unsuccess; ?>
                </p>
            </div>
            <?php
        }
        ?>
        <section>
            <div class="container">
                <form action="store.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">First Name <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="fname" id="inputEmail3" placeholder="First Name" required="requerd">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Last Name <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="lname"id="inputEmail3" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Nick Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nname"id="inputEmail3" placeholder="Nick Name">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label" required >Gender <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male   
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Image <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image_name"id="exampleInputFile" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Mobile <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="mobile"id="inputEmail3" placeholder="Mobile Number" maxlength="11" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Home Phone</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="home_phone" id="inputEmail3" placeholder="Home Phone" maxlength="11">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Work Phone</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="work_phone"id="inputEmail3" placeholder="Work Phonel" maxlength="11">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Address <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea name="address" id="" class="form-control m_bottom" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Country <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <!--<input type="text" class="form-control m_bottom" name="country"  id="country" placeholder="Country">-->
                                        <select id="countries" name="country" class="form-control m_bottom" requred>
                                            <option >.......Select Your Country.......</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland_Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American_Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua_And_Barbuda">Antigua and Barbuda</option>
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
                                            <option value="Bosnia_And_Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet_Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei_Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina_Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape_Verde">Cape Verde</option>
                                            <option value="Cayman_Islands">Cayman Islands</option>
                                            <option value="Central_African_Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas_Island">Christmas Island</option>
                                            <option value="Cocos_(Keeling)_Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo,_The_Democratic_Republic_Of_The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook_Islands">Cook Islands</option>
                                            <option value="Costa_Rica">Costa Rica</option>
                                            <option value="Cote_D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech_Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican_Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El_Salvador">El Salvador</option>
                                            <option value="Equatorial_Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland_Islands_(Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe_Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French_Guiana">French Guiana</option>
                                            <option value="French_Polynesia">French Polynesia</option>
                                            <option value="French_Southern_Territories">French Southern Territories</option>
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
                                            <option value="Heard_Island_And_Mcdonald_Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy_See_(Vatican_City_State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong_Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran,_Islamic_Republic_Of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle_Of_Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea,_Democratic_People's_Republic_Of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea,_Republic_Of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao_People's_Democratic_Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan_Arab_Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia,_The_Former_Yugoslav_Republic_Of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall_Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia,_Federated_States_Of">Micronesia, Federated States of</option>
                                            <option value="Moldova,_Republic_Of">Moldova, Republic of</option>
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
                                            <option value="Netherlands_Antilles">Netherlands Antilles</option>
                                            <option value="New_Caledonia">New Caledonia</option>
                                            <option value="New_Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk_Island">Norfolk Island</option>
                                            <option value="Northern_Mariana_Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian_Territory,_Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua_New_Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto_Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian_Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint_Helena">Saint Helena</option>
                                            <option value="Saint_Kitts_And_Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint_Lucia">Saint Lucia</option>
                                            <option value="Saint_Pierre_And_Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint_Vincent_And_The_Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San_Marino">San Marino</option>
                                            <option value="Sao_Tome_And_Principe">Sao Tome and Principe</option>
                                            <option value="Saudi_Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra_Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon_Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South_Africa">South Africa</option>
                                            <option value="South_Georgia_And_The_South_Sandwich_Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri_Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard_And_Jan_Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian_Arab_Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan,_Province_Of_China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania,_United_Republic_Of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad_And_Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks_And_Caicos_Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United_Arab_Emirates">United Arab Emirates</option>
                                            <option value="United_Kingdom">United Kingdom</option>
                                            <option value="United_States">United States</option>
                                            <option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet_Nam">Viet Nam</option>
                                            <option value="Virgin_Islands,_British">Virgin Islands, British</option>
                                            <option value="Virgin_Islands,_U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis_And_Futuna">Wallis and Futuna</option>
                                            <option value="Western_Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="inputEmail3" class="col-sm-4 control-label">City <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control m_bottom" name="city" id="inputEmail3" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Zip Code <span class="star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="zip_code" id="inputEmail3" placeholder="Zip Code" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label"></label>

                                    <div class="col-sm-8">
                                        <label class="checkbox-inline" class="col-sm-4 control-label">
                                            <input type="checkbox"  name="check" id="inlineCheckbox1" value="yes" required="required">All the information is Correct
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="upload" class="btn btn-primary"> <strong><i class="fa fa-floppy-o"></i> Save</strong></button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
        
        <footer class="text-center">
            <div class="container">
                <p>Copyright @ Developed by Codeworioer</p>
            </div>
        </footer>
    </body>
</html>