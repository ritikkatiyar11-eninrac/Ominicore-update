<?php require(APPPATH . 'views/frontend/header.php'); ?>

<div class="container-fluid">
    <section class="section ">
        <div class="row">
            <div class="col-md-6 col-sm-12 overflow-hidden">
                <div class="w-100 h-100 mb-3">
                    <!-- <img src="<?= base_url() ?>assets/images/dashboard-bg.png" style="object-fit: fill;" class="w-100 h-100" alt=""> -->
                    <div class="sectiontitle d-flex align-items-center mt-4   justify-content-start gap-4 mb-2 text-left text-darklight-800 border-bottom border-primary">
                        <h3 class="text-uppercase fs-14 fw-600 pb-3">Reach out to US</h3>
                    </div>
                    <div class="pt-4">
                        <p class="mb-3">
                            eninrac consulting has been consistently combining high aspirations and unique perspectives to enable client’s with difference margin”.
                        </p>
                        <p class="mb-3">Email: connect@eninrac.com</p>
                        <p class="mb-3">Phone: (+91) 9319048963</p>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2">
                                    <p><strong>Address: Noida</strong> <br> Eninrac Consulting Private Limited, 2nd Floor, B-130, B-Block, Sector 65, Noida - 201301, Uttar Pradesh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-2">
                        <h3 class="pt-2 fs-20 fw-bold mb-2">What You Get When Asking Your Question</h3>
                        <ul class="mb-3 fs-16" style="line-height: 1.5;">
                            <li>Less than 12-hour response to your question.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contactDetails  col-md-6 col-sm-12 mb-5">
                <form action="" id="omnicontactform">
                    <div class="sectiontitle d-flex align-items-center mt-4   justify-content-start gap-4 mb-2 text-left text-darklight-800 border-bottom border-primary">
                        <h3 class="text-uppercase fs-14 fw-600 pb-3">Your contact details</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3 ">
                                        <label for="" class="form-label fw-600 f fs-14">First Name</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="John" class="form-control py-2">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label fw-600 fs-14">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="dev" class="form-control py-2">
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="fs-14 form-label fw-600 ">Telephone</label>
                                        <input type="text" name="telephone" id="telephone" class="form-control py-2">
                                        <span class="error"></span>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label fw-600 fs-14">Business Email*</label>
                                        <input type="text" name="businessemail" id="businessemail" class="form-control py-2">
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label fw-600 fs-14">Job Title</label>
                                        <input type="text" name="jobtitle" id="jobtitle" class="form-control py-2">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label fw-600 fs-14">Company</label>
                                        <input type="text" name="companyname" id="companyname" class="form-control py-2">
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label fw-600 fs-14">Industry of interest*</label>
                                        <select id="industry" name="industryofInterest" class="form-control eninForm">
                                            <option value="">Select...</option>
                                            <option value="Agribusiness">Agribusiness</option>
                                            <option value="Autos">Autos</option>
                                            <option value="Banking &amp; Financial Services">Banking &amp; Financial Services</option>
                                            <option value="Commodities">Commodities</option>
                                            <option value="Consumer Electronics">Consumer Electronics</option>
                                            <option value="Country Risk">Country Risk</option>
                                            <option value="Defence &amp; Security">Defence &amp; Security</option>
                                            <option value="Energy">Energy</option>
                                            <option value="Food &amp; Drink">Food &amp; Drink</option>
                                            <option value="Freight Transport">Freight Transport </option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Infrastructure">Infrastructure</option>
                                            <option value="Insurance">Insurance</option>
                                            <option value="Investment &amp; Trade">Investment &amp; Trade</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Medical Devices">Medical Devices</option>
                                            <option value="Metals">Metals</option>
                                            <option value="Mining">Mining</option>
                                            <option value="Oil &amp; Gas">Oil &amp; Gas</option>
                                            <option value="Petrochemicals">Petrochemicals</option>
                                            <option value="Pharmaceuticals &amp; Healthcare">Pharmaceuticals &amp; Healthcare</option>
                                            <option value="Power">Power</option>
                                            <option value="Real Estate">Real Estate</option>
                                            <option value="Renewables">Renewables</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Shipping">Shipping</option>
                                            <option value="Telecommunications">Telecommunications</option>
                                            <option value="Tourism">Tourism</option>
                                        </select>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-3 ">
                                        <label for="" class="form-label fw-600 fs-14">Country / region</label>
                                        <select id="countryName" name="country" class="form-control eninForm">
                                            <option value="">Select...</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
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
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
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
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo, Republic of the">Congo, Republic of the</option>
                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaçao">Curaçao</option>
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
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
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
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong SAR">Hong Kong SAR</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="IRAN (ISLAMIC REPUBLIC OF)">IRAN (ISLAMIC REPUBLIC OF)</option>
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
                                            <option value="Kosovo">Kosovo</option>
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
                                            <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
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
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="North Korea">North Korea</option>
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
                                            <option value="Republic of Chad">Republic of Chad</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthélemy">Saint Barthélemy</option>
                                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
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
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="VIRGIN ISLANDS (U.S.)">VIRGIN ISLANDS (U.S.)</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <textarea class="form-control" id="queryMessage" rows="4" placeholder="Please add message" name="" id=""></textarea>
                                    <span class="error"></span>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <button class="btn btn-primary w-100" type="submit">Submit</button>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <span class="error"></span>
                                        <input type="checkbox" class="form-check-input" id="pp" data-gtm-form-interact-field-id="0">
                                        <label class="form-check-label" for="pp">I have read and understood our <a href="https://omnicore.com/omni/login">Privacy Policy</a> and <a href="https://omnicore.com/omni/login">Terms of Use </a>*</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script>
    document.querySelector('#omnicontactform').addEventListener('submit', function(e) {
        const fname = document.getElementById('firstname')
        const lname = document.getElementById('lastname')
        const bemail = document.getElementById('businessemail')
        const country = document.getElementById('countryName')
        const telephone = document.getElementById('telephone')
        const jobtitle = document.getElementById('jobtitle')
        const cname = document.getElementById('companyname')
        const industry = document.getElementById('industry')
        const pp = document.getElementById('pp')
        if (empty(fname, 'First Name is Required') ||
            empty(lname, 'Last Name is Required') ||
            empty(bemail, 'Business Email is Required') ||
            empty(country, 'Country is Required') ||
            empty(telephone, 'Telephone is Required') ||
            phonenumber(telephone, "phone number is not valid") ||
            empty(jobtitle, 'Job Title is Required') ||
            empty(cname, 'Company Name is Required') ||
            empty(industry, 'Industry is Required')) {
            pp.nextElementSibling.innerHTML = "Please accept the Privacy Policy"
            pp.nextElementSibling.style.color = "red"
            pp.nextElementSibling.classList.add("fs-14")
            return false

        } else {
            e.preventDefault()
            // const data = {
            //     firstName: fname,
            //     lastName: lname,
            //     businessEmail: bemail,
            //     country: country,
            //     telephone: telephone,
            //     jobTitle: jobtitle,
            //     companyName: cname,
            //     industry: industry
            // }

        }
    })

    function phonenumber(x, m) {
        var phoneno = /^\d{10}$/;
        if (x.value.match(phoneno)) {

            x.nextElementSibling.innerHTML = ""
            return true
        } else {
            x.nextElementSibling.innerHTML = m
            return false
        }
    }

    function empty(x, n) {
        if (x.value == "") {
            x.nextElementSibling.innerHTML = n
            x.nextElementSibling.style.color = "red"

            x.nextElementSibling.classList.add("fs-14")
            return false
        } else {
            x.nextElementSibling.innerHTML = ""
            return true
        }
    }
</script>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>