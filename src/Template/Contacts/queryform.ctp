&nbsp;
<div class="big_break"></div>
<br/><br/>
<div class="container" id="query-form">
    <div class="head_maintext text-center">Enquiry Form</div>
    <div class="text-center <?php echo $class; ?>"><?php echo $mail_remarks;?></div>
    <?php echo $this->Form->create("enquiry");?>
    <div class="small_break head_subtext">

    	<table class="table borderless">
    		<tr>
	    		<td class="text-right">WHERE TO</td>
	    		<td>
	    			<select id="destination" name="destination" required>
	    				<option data-hidden="true">-Select a value-</option>
	            		<option value="AF">Afghanistan</option>
						<option value="AX">Åland Islands</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua and Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaijan</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrain</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BZ">Belize</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermuda</option>
						<option value="BT">Bhutan</option>
						<option value="BO">Bolivia, Plurinational State of</option>
						<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BV">Bouvet Island</option>
						<option value="BR">Brazil</option>
						<option value="IO">British Indian Ocean Territory</option>
						<option value="BN">Brunei Darussalam</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="KH">Cambodia</option>
						<option value="CM">Cameroon</option>
						<option value="CA">Canada</option>
						<option value="CV">Cape Verde</option>
						<option value="KY">Cayman Islands</option>
						<option value="CF">Central African Republic</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CX">Christmas Island</option>
						<option value="CC">Cocos (Keeling) Islands</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comoros</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, the Democratic Republic of the</option>
						<option value="CK">Cook Islands</option>
						<option value="CR">Costa Rica</option>
						<option value="CI">Côte d'Ivoire</option>
						<option value="HR">Croatia</option>
						<option value="CU">Cuba</option>
						<option value="CW">Curaçao</option>
						<option value="CY">Cyprus</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="DO">Dominican Republic</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egypt</option>
						<option value="SV">El Salvador</option>
						<option value="GQ">Equatorial Guinea</option>
						<option value="ER">Eritrea</option>
						<option value="EE">Estonia</option>
						<option value="ET">Ethiopia</option>
						<option value="FK">Falkland Islands (Malvinas)</option>
						<option value="FO">Faroe Islands</option>
						<option value="FJ">Fiji</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="GF">French Guiana</option>
						<option value="PF">French Polynesia</option>
						<option value="TF">French Southern Territories</option>
						<option value="GA">Gabon</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="DE">Germany</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GR">Greece</option>
						<option value="GL">Greenland</option>
						<option value="GD">Grenada</option>
						<option value="GP">Guadeloupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GG">Guernsey</option>
						<option value="GN">Guinea</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="GY">Guyana</option>
						<option value="HT">Haiti</option>
						<option value="HM">Heard Island and McDonald Islands</option>
						<option value="VA">Holy See (Vatican City State)</option>
						<option value="HN">Honduras</option>
						<option value="HK">Hong Kong</option>
						<option value="HU">Hungary</option>
						<option value="IS">Iceland</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IR">Iran, Islamic Republic of</option>
						<option value="IQ">Iraq</option>
						<option value="IE">Ireland</option>
						<option value="IM">Isle of Man</option>
						<option value="IL">Israel</option>
						<option value="IT">Italy</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japan</option>
						<option value="JE">Jersey</option>
						<option value="JO">Jordan</option>
						<option value="KZ">Kazakhstan</option>
						<option value="KE">Kenya</option>
						<option value="KI">Kiribati</option>
						<option value="KP">Korea, Democratic People's Republic of</option>
						<option value="KR">Korea, Republic of</option>
						<option value="KW">Kuwait</option>
						<option value="KG">Kyrgyzstan</option>
						<option value="LA">Lao People's Democratic Republic</option>
						<option value="LV">Latvia</option>
						<option value="LB">Lebanon</option>
						<option value="LS">Lesotho</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libya</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MO">Macao</option>
						<option value="MK">Macedonia, the former Yugoslav Republic of</option>
						<option value="MG">Madagascar</option>
						<option value="MW">Malawi</option>
						<option value="MY">Malaysia</option>
						<option value="MV">Maldives</option>
						<option value="ML">Mali</option>
						<option value="MT">Malta</option>
						<option value="MH">Marshall Islands</option>
						<option value="MQ">Martinique</option>
						<option value="MR">Mauritania</option>
						<option value="MU">Mauritius</option>
						<option value="YT">Mayotte</option>
						<option value="MX">Mexico</option>
						<option value="FM">Micronesia, Federated States of</option>
						<option value="MD">Moldova, Republic of</option>
						<option value="MC">Monaco</option>
						<option value="MN">Mongolia</option>
						<option value="ME">Montenegro</option>
						<option value="MS">Montserrat</option>
						<option value="MA">Morocco</option>
						<option value="MZ">Mozambique</option>
						<option value="MM">Myanmar</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NL">Netherlands</option>
						<option value="NC">New Caledonia</option>
						<option value="NZ">New Zealand</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Niger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk Island</option>
						<option value="MP">Northern Mariana Islands</option>
						<option value="NO">Norway</option>
						<option value="OM">Oman</option>
						<option value="PK">Pakistan</option>
						<option value="PW">Palau</option>
						<option value="PS">Palestinian Territory, Occupied</option>
						<option value="PA">Panama</option>
						<option value="PG">Papua New Guinea</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Peru</option>
						<option value="PH">Philippines</option>
						<option value="PN">Pitcairn</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="RE">Réunion</option>
						<option value="RO">Romania</option>
						<option value="RU">Russian Federation</option>
						<option value="RW">Rwanda</option>
						<option value="BL">Saint Barthélemy</option>
						<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="KN">Saint Kitts and Nevis</option>
						<option value="LC">Saint Lucia</option>
						<option value="MF">Saint Martin (French part)</option>
						<option value="PM">Saint Pierre and Miquelon</option>
						<option value="VC">Saint Vincent and the Grenadines</option>
						<option value="WS">Samoa</option>
						<option value="SM">San Marino</option>
						<option value="ST">Sao Tome and Principe</option>
						<option value="SA">Saudi Arabia</option>
						<option value="SN">Senegal</option>
						<option value="RS">Serbia</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leone</option>
						<option value="SG">Singapore</option>
						<option value="SX">Sint Maarten (Dutch part)</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="SB">Solomon Islands</option>
						<option value="SO">Somalia</option>
						<option value="ZA">South Africa</option>
						<option value="GS">South Georgia and the South Sandwich Islands</option>
						<option value="SS">South Sudan</option>
						<option value="ES">Spain</option>
						<option value="LK">Sri Lanka</option>
						<option value="SD">Sudan</option>
						<option value="SR">Suriname</option>
						<option value="SJ">Svalbard and Jan Mayen</option>
						<option value="SZ">Swaziland</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="SY">Syrian Arab Republic</option>
						<option value="TW">Taiwan, Province of China</option>
						<option value="TJ">Tajikistan</option>
						<option value="TZ">Tanzania, United Republic of</option>
						<option value="TH">Thailand</option>
						<option value="TL">Timor-Leste</option>
						<option value="TG">Togo</option>
						<option value="TK">Tokelau</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad and Tobago</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
						<option value="TM">Turkmenistan</option>
						<option value="TC">Turks and Caicos Islands</option>
						<option value="TV">Tuvalu</option>
						<option value="UG">Uganda</option>
						<option value="UA">Ukraine</option>
						<option value="AE">United Arab Emirates</option>
						<option value="GB">United Kingdom</option>
						<option value="US">United States</option>
						<option value="UM">United States Minor Outlying Islands</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistan</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela, Bolivarian Republic of</option>
						<option value="VN">Viet Nam</option>
						<option value="VG">Virgin Islands, British</option>
						<option value="VI">Virgin Islands, U.S.</option>
						<option value="WF">Wallis and Futuna</option>
						<option value="EH">Western Sahara</option>
						<option value="YE">Yemen</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabwe</option>
	            	</select>
	            </td>
	            <td></td>
	        </tr>

	        <tr>
	    		<td class="text-right">DEPARTURE DATE</td>
	    		<td>
			        <input type="text" id="departure" name="departure" required>
	            </td>
	            <td></td>
	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">TRIP DURATION</td>
	            <td class="col-md-3">
	            	<select name="nights" required>
	            		<option data-hidden="true">-Select a value-</option>
	            		<option value="1">1 Nights</option>
	            		<option value="2">2 Nights</option>
	            		<option value="3">3 Nights</option>
	            		<option value="4">4 Nights</option>
	            		<option value="5">5 Nights</option>
	            		<option value="6">6 Nights</option>
	            		<option value="7">7 Nights</option>
			        	<option value="8">8 Nights</option>
			        	<option value="9">9 Nights</option>
			        	<option value="10">10 Nights</option>
			        	<option value="11">11 Nights</option>
			        	<option value="12">12 Nights</option>
			        	<option value="13">13 Nights</option>
			        	<option value="14">14 Nights</option>
			        	<option value="3">3 Weeks</option>
			        	<option value="4">4 Weeks</option>
			        	<option value="5">5 Weeks</option>
			        	<option value="6">6 Weeks</option>
			        	<option value="over_6_weeks">Over 6 Weeks</option>
			        </select>
	            </td>
	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">NUMBER OF ADULTS<br/><br/>AGE GROUP</td>
	    		<td class="col-md-3">
			        <select name="adults" id="adult" onchange="" required>
			        	<option data-hidden="true">-Select a value-</option>
			        	<option value="1">1</option>
			        	<option value="2">2</option>
			        	<option value="3">3</option>
			        	<option value="4">4</option>
			        	<option value="5">5</option>
			        	<option value="6">6</option>
			        	<option value="7">7</option>
			        	<option value="8">8</option>
			        	<option value="9">9</option>
			        </select>
			        <br/><br/>
			        <input type="checkbox" id="age_grp_1" name="age_grp_1"><label for="age_grp_1"> 18-30 </label>
			        <input type="checkbox" id="age_grp_2" name="age_grp_2"><label for="age_grp_2"> 31-50 </label>
			        <input type="checkbox" id="age_grp_3" name="age_grp_3"><label for="age_grp_3"> 51-65 </label>
			        <input type="checkbox" id="age_grp_4" name="age_grp_4"><label for="age_grp_4"> 65+ </label>
	            </td>
	            <td class="col-md-5 text-left">
	            	<input type="checkbox" id="children" name="children"><label for="children">Travelling with Children?</label>
	            	<br/><br/>
	            	<div id="child">
	            	<label>NUMBER OF CHILDREN</lablel>
			        <select name="no_of_children" id="adults">
			        	<option >-Select a value-</option>
			        	<option value="1">1</option>
			        	<option value="2">2</option>
			        	<option value="3">3</option>
			        	<option value="4">4</option>
			        	<option value="5">5</option>
			        	<option value="6">6</option>
			        	<option value="7">7</option>
			        	<option value="8">8</option>
			        	<option value="9">9</option>
			        </select>
			        <br/><br/>
			        <dir id="child_1">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup_1" name="children_age_grp1_1"><label for="age_grup_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup_2" name="children_age_grp1_2"><label for="age_grup_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup_3" name="children_age_grp1_3"><label for="age_grup_3"> 07-12 </label>
			        </dir>
			        <dir id="child_2">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup2_1" name="children_age_grp2_1"><label for="age_grup2_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup2_2" name="children_age_grp2_2"><label for="age_grup2_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup2_3" name="children_age_grp2_3"><label for="age_grup2_3"> 07-12 </label>
			        </dir>
			        <dir id="child_3">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup3_1" name="children_age_grp3_1"><label for="age_grup3_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup3_2" name="children_age_grp3_2"><label for="age_grup3_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup3_3" name="children_age_grp3_3"><label for="age_grup3_3"> 07-12 </label>
			        </dir>
			        <dir id="child_4">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup4_1" name="children_age_grp4_1"><label for="age_grup4_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup4_2" name="children_age_grp4_2"><label for="age_grup4_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup4_3" name="children_age_grp4_3"><label for="age_grup4_3"> 07-12 </label>
			        </dir>
			        <dir id="child_5">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup5_1" name="children_age_grp5_1"><label for="age_grup5_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup5_2" name="children_age_grp5_2"><label for="age_grup5_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup5_3" name="children_age_grp5_3"><label for="age_grup5_3"> 07-12 </label>
			        </dir>
			        <dir id="child_6">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup6_1" name="children_age_grp6_1"><label for="age_grup6_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup6_2" name="children_age_grp6_2"><label for="age_grup6_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup6_3" name="children_age_grp6_3"><label for="age_grup6_3"> 07-12 </label>
			        </dir>
			        <dir id="child_7">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup7_1" name="children_age_grp7_1"><label for="age_grup7_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup7_2" name="children_age_grp7_2"><label for="age_grup7_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup7_3" name="children_age_grp7_3"><label for="age_grup7_3"> 07-12 </label>
			        </dir>
			        <dir id="child_8">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup8_1" name="children_age_grp8_1"><label for="age_grup8_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup8_2" name="children_age_grp8_2"><label for="age_grup8_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup8_3" name="children_age_grp8_3"><label for="age_grup8_3"> 07-12 </label>
			        </dir>
			        <dir id="child_9">
				        <label>AGE GROUP</label>
				        <input type="checkbox" id="age_grup9_1" name="children_age_grp9_1"><label for="age_grup9_1"> 0-02  </label>
				        <input type="checkbox" id="age_grup9_2" name="children_age_grp9_2"><label for="age_grup9_2"> 03-06 </label>
				        <input type="checkbox" id="age_grup9_3" name="children_age_grp9_3"><label for="age_grup9_3"> 07-12 </label>
			        </dir>

			        </div>	           
	            </td>

	        </tr>

		</table>
	    <table class="table borderless">

	        <tr>
	    		<td class="col-md-4 text-right">TRIP SPECIFICATION</td>
	    		<td class="col-md-3">
			        <input type="checkbox" id="custom_spec" name="custom_spec"><label for="custom_spec"> Customized package </label>
			        <p class="head_microtext remarks">Create your own specification</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="luxury_spec" name="luxury_spec"><label for="luxury_spec"> Luxury holidays </label>
			        <p class="head_microtext remarks">Select any luxury package</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="cruise_spec" name="cruise_spec"><label for="cruise_spec"> Cruise liner </label>
			        <p class="head_microtext remarks">My trip should include one cruise liner</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="preplan_spec" name="preplan_spec"><label for="preplan_spec"> Pre planned holiday package </label>
			        <p class="head_microtext remarks">It's a pre planned holiday package</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="suggest_spec" name="suggest_spec"><label for="suggest_spec"> Suggestions from travel consultant based on my package </label>
			        <p class="head_microtext remarks">Got the best suggestion from my consultant</p>


	            </td>
	        </tr> 
	    
	        <tr>
	    		<td class="col-md-4 text-right">ACCOMMODATION PREFERENCE<br/><br/>EXTRA SERVICE REQUIREMENTS</td>
	    		<td class="col-md-8">
			        <input type="checkbox" id="star_5" name="star_5"><label for="star_5"> 5 Star </label>
			        <input type="checkbox" id="star_4" name="star_4"><label for="star_4"> 4 Star </label>
			        <input type="checkbox" id="star_3" name="star_3"><label for="star_3"> 3 Star </label>
			        <input type="checkbox" id="economy" name="economy"><label for="economy"> Economy </label>
			        <input type="checkbox" id="villa" name="villa"><label for="villa"> Villa </label>
			        <input type="checkbox" id="resort" name="resort"><label for="resort"> Resort </label>
			        <input type="checkbox" id="camping" name="camping"><label for="camping"> Capming </label>

			        <br/><br/>
			        <input type="checkbox" id="adventure_ser" name="adventure_ser"><label for="adventure_ser"> Adventure activities / Guided tours & exploring the place differently </label>
			        <input type="checkbox" id="special_ser" name="special_ser"><label for="special_ser"> Special occassion preparation / celebration </label>
			        <input type="checkbox" id="other_ser" name="other_ser"><label for="other_ser"> Other transportation </label>
	            </td>

	        </tr>


	        <tr>
	    		<td class="col-md-4 text-right">BUDGET RANGE PER PERSON</td>
	    		<td class="col-md-8">
	    			<input type="text" name="budget" id="budget" required/>
	            </td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">IS YOUR BUDGET FLEXIBLE</td>
	    		<td class="col-md-8">
	    			<input type="radio" name="budget_flex" value="yes" id="yes"/><label for="yes"> Yes </label>
	    			<input type="radio" name="budget_flex" value="no" id="no"/><label for="no"> No </label>
	            </td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">FIRSTNAME<br/><br/>LASTNAME<br/><br/><br/>EMAIL<br/><br/>PHONE<br/><br/>ADDRESS</td>
	    		<td class="col-md-8">
	    			<input type="text" name="firstname" id="firstname" required/><br/><br/>
	    			<input type="text" name="lastname" id="lastname" required/><br/><br/>
	    			<input type="text" name="email" id="email" required/><br/><br/>
	    			<input type="text" name="phone" id="phone" required/><br/><br/>
	    			<textarea name="address"></textarea>
	            </td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right"></td>
	    		<td class="col-md-8"><button type="submit" class="btn btn-warning">Submit</button>
	            </td>
	        </tr>
    	</table>
        
    </div>
    <?php echo $this->Form->end();?>
</div>

<script>
	$("document").ready(function(){
		$( "#departure" ).datepicker();
		$('#child').hide();
		$('#child_1').hide();
		$('#child_2').hide();
		$('#child_3').hide();
		$('#child_4').hide();
		$('#child_5').hide();
		$('#child_6').hide();
		$('#child_7').hide();
		$('#child_8').hide();
		$('#child_9').hide();
		
        
        $('#children').click(function(){
            if ($(this).is(':checked')) {
                $('#child').show();               
            }else{
                $('#child').hide();               
            }
        });
        $('#adults').change(function(){
       var x=$('#adults').val();
        console.log(x);
            if(x==1){ 
				$('#child_1').show();
				$('#child_2').hide();
				$('#child_3').hide();
				$('#child_4').hide();
				$('#child_5').hide();
				$('#child_6').hide();
				$('#child_7').hide();
				$('#child_8').hide();
				$('#child_9').hide();
					
			}else if(x==2){ 
				$('#child_1').show();
				$('#child_2').show();
				$('#child_3').hide();
				$('#child_4').hide();
				$('#child_5').hide();
				$('#child_6').hide();
				$('#child_7').hide();
				$('#child_8').hide();
				$('#child_9').hide();
			}else if(x==3){
				
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').hide();
					$('#child_5').hide();
					$('#child_6').hide();
					$('#child_7').hide();
					$('#child_8').hide();
					$('#child_9').hide();
						
				
			}else if(x==4){ 
				
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').show();
					$('#child_5').hide();
					$('#child_6').hide();
					$('#child_7').hide();
					$('#child_8').hide();
					$('#child_9').hide();
						
			}else if(x==5){ 
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').show();
					$('#child_5').show();
					$('#child_6').hide();
					$('#child_7').hide();
					$('#child_8').hide();
					$('#child_9').hide();
						
				}else if(x==6){ 
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').show();
					$('#child_5').show();
					$('#child_6').show();
					$('#child_7').hide();
					$('#child_8').hide();
					$('#child_9').hide();
						
				}else if(x==7){ 
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').show();
					$('#child_5').show();
					$('#child_6').show();
					$('#child_7').show();
					$('#child_8').hide();
					$('#child_9').hide();
						
					
				}else if(x==8){ 
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').show();
					$('#child_5').show();
					$('#child_6').show();
					$('#child_7').show();
					$('#child_8').show();
					$('#child_9').hide();
					
				}else if(x==9){ 
					$('#child_1').show();
					$('#child_2').show();
					$('#child_3').show();
					$('#child_4').show();
					$('#child_5').show();
					$('#child_6').show();
					$('#child_7').show();
					$('#child_8').show();
					$('#child_9').show();	
			}
        });
	});
</script>

