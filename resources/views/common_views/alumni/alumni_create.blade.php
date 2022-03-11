@extends('layouts.dashboard_layout')

@section('content')




    <div class="container-fluid px-lg-4">
        <div class="row mt-3">
            <div class="col-11 mx-auto my-4">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-center">
                        <h3 class="card-title text-center">Alumni Form</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('manage_alumni.store')}}"
                              enctype="multipart/form-data" class="form">
                            @csrf

                            <input name="user_id" type="hidden" value="{{\Illuminate\Support\Facades\Auth::id()}}">

                            <div class="form-row">

                                <div class="col-12 col-sm-12">
                                    <div class="form-group alert-success text-center">
                                        <h4 class="text-white">Personal Information</h4>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="buet_id">BUET ID <span class="text-danger font-weight-bold">*</span></label>
                                        <input type="number" id="buet_id" class="form-control" name="buet_id" value="{{\Illuminate\Support\Facades\Auth::user()->buet_id}}">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="batch">Batch <span class="badge badge-warning">(HSC Passing Year)</span><span class="text-danger font-weight-bold">*</span></label>
                                        <select id="batch" class="form-control" name="batch">
                                            <option>Year</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="department">Department <span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select id="department" name="department" class="form-select form-control" aria-label="Default select example">
                                            <option selected>Select Department</option>
                                            <option value="1">Department 1</option>
                                            <option value="2">Department 2</option>
                                            <option value="3">Department 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="hall">Hall <span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select id="hall" name="hall" class="form-select form-control" aria-label="Default select example">
                                            <option selected>Select Hall</option>
                                            <option value="1">Hall 1</option>
                                            <option value="2">Hall 2</option>
                                            <option value="3">Hall 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth <span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <input type="date" id="dob" class="form-control" name="dob">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender <span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select name="gender" class="form-control" id="gender">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="phone2">Phone (Secondary)</label>
                                        <input id="phone2" class="form-control" type="number" name="phone2"
                                                autofocus
                                               placeholder="Enter Your Secondary Phone"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="blood_group">Blood Group *</label>
                                        <select name="blood_group" class="form-control" id="blood_group" required>

                                            <option value="">Select</option>
                                            @php
                                                $blood_groups = \App\Models\BloodGroup::all();
                                            @endphp
                                            @if(!$blood_groups->isEmpty())
                                                @foreach($blood_groups as $blood_group)
                                                    <option
                                                        value="{{$blood_group->blood_group_name}}">{{$blood_group->blood_group_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-12">
                                    <div class="form-group alert-success text-center">
                                        <h4 class="text-white">Social Information</h4>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="facebook_id">Facebook ID</label>
                                        <input id="facebook_id" class="form-control" type="text" name="facebook_id"
                                                placeholder="www.facebook.com/user-name"
                                               autofocus/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="linkedin_id">Linkedin ID</label>
                                        <input id="linkedin_id" class="form-control" type="text" name="linkedin_id"
                                                placeholder="www.linkedin.com/user-name"
                                               autofocus/>
                                    </div>
                                </div>
                                {{--                    <div class="col-12 col-sm-6">--}}
                                {{--                        <div class="form-group">--}}
                                {{--                            <label for="profession_type">Profession Type</label><br>--}}
                                {{--                            <div class="form-check form-check-inline">--}}
                                {{--                                <input class="form-check-input" type="checkbox" id="profession_type" value="Job" name="profession_type">--}}
                                {{--                                <label class="form-check-label" for="inlineCheckbox1">Job</label>--}}
                                {{--                            </div>--}}
                                {{--                            <div class="form-check form-check-inline">--}}
                                {{--                                <input class="form-check-input" type="checkbox" id="profession_type" value="Business" name="profession_type">--}}
                                {{--                                <label class="form-check-label" for="inlineCheckbox2">Business</label>--}}
                                {{--                            </div>--}}
                                {{--                            <div class="form-check form-check-inline">--}}
                                {{--                                <input class="form-check-input" type="checkbox" id="profession_type" value="Both" name="profession_type">--}}
                                {{--                                <label class="form-check-label" for="inlineCheckbox3">Both</label>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                    </div>--}}

                                <div class="col-12 col-sm-12">
                                    <div class="form-group alert-success text-center">
                                        <h4 class="text-white">Professional Information</h4>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="profession_type">Profession Type <span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select name="profession_type" class="form-control" id="profession_type">
                                            <option value="">Select</option>
                                            <option value="Job">Job</option>
                                            <option value="Business">Business</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input id="designation" class="form-control" type="text" name="designation"
                                                autofocus/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="working_company_name">Company Name</label>
                                        <input id="working_company_name" class="form-control" type="text" name="working_company_name"  autofocus/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="batch_mate_reference">Batchmate Reference <span class="badge badge-warning">Batchmate ID</span></label>
                                        <input class="form-control" id="batch_mate_reference" name="batch_mate_reference" placeholder="Batchmate ID"  required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="area_of_expertise">Area of Expertise</label>
                                        <input id="area_of_expertise" class="form-control" type="text" name="area_of_expertise" value="" autofocus/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="area_of_interest">Area of Interest</label>
                                        <input id="area_of_interest" class="form-control" type="text" name="area_of_interest" value="" autofocus/>
                                    </div>
                                </div>
                                {{--                                <div class="col-12 col-sm-6">--}}
                                {{--                                    <div class="form-group"></div>--}}
                                {{--                                </div>--}}
                            </div>
                            {{--                            <hr style="border-top: 1px dashed #0cbdff; margin: 50px 0px 50px 0px;">--}}

                            <div class="col-12 col-sm-12">
                                <div class="form-group alert-success text-center">
                                    <h4 class="text-white">Residence Information</h4>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="country">Country <span class="badge badge-warning">(Currently Residing)</span><span class="text-danger font-weight-bold">*</span></label>
                                        <select id="country" name="country" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="area">Area<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <textarea class="form-control" id="area" rows="3" name="area"
                                                  placeholder="Enter Your Area" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="city">City<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <textarea class="form-control" id="city" rows="3" name="city"
                                                  placeholder="Enter Your city" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address <span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <textarea class="form-control" id="permanent_address" rows="3"
                                                  name="permanent_address" placeholder="Enter Your Permanent Address"
                                                  required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="professional_address">Profession & Professional Address</label>
                                        <textarea class="form-control" id="professional_address" rows="3"
                                                  name="professional_address"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-12 col-sm-12 alert">
                                    <div class="form-group alert-success text-center">
                                        <h4 class="text-white">Marital Information</h4>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="marital_status">Marital Status</label>
                                        <select name="marital_status" class="form-control" id="marital_status">
                                            <option value="">Select</option>
                                            <option value="Married">Married</option>
                                            <option value="Unmarried">Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="spouse_name">Spouse Name</label>
                                        <input id="spouse_name" class="form-control" type="text" name="spouse_name"
                                                autofocus/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="number_of_child">Number of Child</label>
                                        {{--                                        <select name="number_of_child" class="form-control" id="number_of_child">--}}
                                        {{--                                            <option value="">Select</option>--}}
                                        {{--                                            @php--}}
                                        {{--                                                $no_of_children = \App\Models\NumberOfChildren::all();--}}
                                        {{--                                            @endphp--}}
                                        {{--                                            @if(!$no_of_children->isEmpty())--}}
                                        {{--                                                @foreach($no_of_children as $num_child)--}}
                                        {{--                                                    <option--}}
                                        {{--                                                        value="{{$num_child->number_of_children}}">{{$num_child->number_of_children}}</option>--}}
                                        {{--                                                @endforeach--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </select>--}}
                                        <input id="number_of_child" class="form-control" type="number" name="number_of_child"
                                                autofocus/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="spouse_professional_address">Spouse Profession & Professional
                                            Address</label>
                                        <input class="form-control" id="spouse_professional_address"
                                               name="spouse_professional_address" />
                                    </div>
                                </div>


                                <hr>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary my-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra_js')

    <script>

        $(window).on('load', function () {
            document.getElementById("batch").value = "{{\Illuminate\Support\Facades\Auth::user()->batch}}";
            document.getElementById("department").value = "{{\Illuminate\Support\Facades\Auth::user()->department}}";
        });

    </script>
@endsection
