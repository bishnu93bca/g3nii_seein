&nbsp;
<div class="big_break"></div>
<br/><br/>
<div class="container" id="query-form">
    <div class="head_maintext text-center">Enquiry Form</div>
    <div class="text-center <?php echo $class; ?>"><?php echo $mail_remarks;?></div>
    <?php echo $this->Form->create("enquiry");?>
    <div class="small_break head_subtext">

    	<div class="head_maintext text-center">WHERE & WHEN</div>
    	<table class="table borderless">
    		<tr>
	    		<td class="text-right">DESTINATION</td>
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
	    		<td class="col-md-3">
			        <input type="text" id="departure" name="departure" required class="form-control"> &nbsp;
			        
	            </td>
	            <td class="text-left">
	            	<input type="checkbox" name="flexible_date" id="flexible_date" class="form-control"/><label for="flexible_date">I'm flexible on date</label>
	            </td>
	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">NUMBER OF NIGHTS</td>
	            <td class="col-md-3">
	            	<select name="nights" id="nights" required class="form-control">
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
			        <select name="adults" id="adults" required class="form-control">
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
	            	<input type="checkbox" id="children" name="children"><label for="children">Traveling with Children?</label>
	            	<br/><br/>
	            	<div id="child">
	            	<label>NUMBER OF CHILDREN</lablel>
			        <select name="no_of_children" id="no_of_children" required class="form-control">
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
			        <label>AGE GROUP</label>
			        <input type="checkbox" id="age_grup_1" name="children_age_grp_1"><label for="age_grup_1"> 0-02  </label>
			        <input type="checkbox" id="age_grup_2" name="children_age_grp_2"><label for="age_grup_2"> 03-06 </label>
			        <input type="checkbox" id="age_grup_3" name="children_age_grp_3"><label for="age_grup_3"> 07-12 </label>
			        </div>	           
	            </td>

	        </tr>

		</table>

		<div class="head_maintext text-center">TRAVEL STYLE</div>
	    <table class="table borderless">

	        <tr>
	    		<td class="col-md-4 text-right">TYPE OF TRAVEL</td>
	    		<td class="col-md-3">
			        <input type="checkbox" id="custom_spec" name="custom_spec"><label for="custom_spec"> Custom Trip Package </label>
			        <p class="head_microtext remarks">Be on your own schedule. Activities or day tours can be private or shared.</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="luxury_spec" name="luxury_spec"><label for="luxury_spec"> Pre-Packaged Group Tour</label>
			        <p class="head_microtext remarks">Join a scheduled, multi-day group tour.</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="cruise_spec" name="cruise_spec"><label for="cruise_spec"> Luxury Cruise </label>
			        <p class="head_microtext remarks">All inclusive travel by cruise ship.</p>

			        <div class="small_break"></div>
			        <input type="checkbox" id="suggest_spec" name="suggest_spec"><label for="suggest_spec"> According To My Consultant</label>
			        <p class="head_microtext remarks">I would like my Travel Specialists to make suggestions based on my interests.</p>


	            </td>
	        </tr> 
	    
	        <tr>
	    		<td class="col-md-4 text-right">LIST OF ACCOMMODATION<br/><br/>SERVICE NEEDED</td>
	    		<td class="col-md-8">
			        <input type="checkbox" id="star_5" name="star_5"><label for="star_5"> 5 Star </label>
			        <input type="checkbox" id="star_4" name="star_4"><label for="star_4"> 4 Star </label>
			        <input type="checkbox" id="star_3" name="star_3"><label for="star_3"> 3 Star </label>

			        <br/><br/>
			        <input type="checkbox" id="adventure_ser" name="adventure_ser"><label for="adventure_ser"> Activities, Tour Guides, & Unique experiences</label><br/>
			        <input type="checkbox" id="special_ser" name="special_ser"><label for="special_ser"> In-country Transportation</label><br/>
			        <input type="checkbox" id="other_ser" name="other_ser"><label for="other_ser"> International Flights</label>
	            </td>

	        </tr>

	    </table>

	    <div class="head_maintext text-center">YOUR BUDGET & INTERESTS</div>
	    <table class="table borderless">
	        <tr>
	    		<td class="col-md-4 text-right">PER PERSON BUDGET FOR THE ENTIRE TRIP</td>
	    		<td class="col-md-4">
	    			<input type="text" name="budget" id="budget" required class="form-control"/>
	            </td>
	            <td></td>


	        </tr>
	        <tr>
	    		<td class="col-md-4 text-right">INTERNATIONAL FLIGHT INCLUDED IN BUDGET</td>
	    		<td class="col-md-4">
	    			<input type="radio" name="international_flight" value="yes" id="yes"/><label for="yes"> Yes </label>
	    			<input type="radio" name="international_flight" value="no" id="no"/><label for="no"> No </label>
	            </td>
	            <td></td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">IS BUDGET FLEXIBLE</td>
	    		<td class="col-md-4">
	    			<input type="radio" name="budget_flex" value="yes" id="yes"/><label for="yes"> Yes </label>
	    			<input type="radio" name="budget_flex" value="no" id="no"/><label for="no"> No </label>
	            </td>
	            <td></td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">STAGE OF PLANNING</td>
	    		<td class="col-md-4">
	    			<select name="stage_of_planning" required class="form-control">
	            		<option data-hidden="true">-Select a value-</option>
	            		<option value="1">Still dreaming. Not sure if I'll go</option>
	            		<option value="2">I'm going. But not sure which country</option>
	            		<option value="3">I'm definitly going to this country</option>
	            	</select>
	            </td>
	            <td></td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right">WHAT WOULD YOU LIKE TO SEE & DO</td>
	    		<td class="col-md-4">
	    			<textarea class="form-control input-lg" name="what_would_you_like_to_see" id="what_would_you_like_to_see"></textarea>
	            </td>
	            <td></td>


	        </tr>
	    </table>
	    <div class="head_maintext text-center">TELL US WHO YOU ARE</div>
	    <table class="table borderless">

	        <tr>
	    		<td class="col-md-4 text-right">FIRSTNAME<br/><br/><br/><br/>LASTNAME<br/><br/><br/><br/>EMAIL<br/><br/><br/><br/>PHONE<br/><br/><br/><br/>ADDRESS</td>
	    		<td class="col-md-4">
	    			<input type="text" name="firstname" id="firstname" required class="form-control"/><br/><br/>
	    			<input type="text" name="lastname" id="lastname" required class="form-control"/><br/><br/>
	    			<input type="text" name="email" id="email" required class="form-control"/><br/><br/>
	    			<input type="text" name="phone" id="phone" required class="form-control"/><br/><br/>
	    			<textarea name="address"  class="form-control"></textarea>
	            </td>
	            <td></td>


	        </tr>
	    </table>
	    <table class="table borderless">
	        <tr>
	    		<td class="col-md-4 text-right"></td>
	    		<td class="col-md-8">
	    			<input type="checkbox" name="agree_tnc" id="agree_tnc" class="form-control"/><label for="flexible_date"><strong>Yes! I'd like to receive Seeingo's newsletter on travel news & specials.</strong><br/><div class="head_microtext">By clicking "Get My Trip Planned" below, I agree to the Terms of Use and Privacy Policy.</div></label>
	            </td>


	        </tr>

	        <tr>
	    		<td class="col-md-4 text-right"></td>
	    		<td class="col-md-4"><button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
	            </td>
	            <td></td>
	        </tr>
    	</table>
        
    </div>
    <?php echo $this->Form->end();?>
</div>

<script>
	$("document").ready(function(){
		$( "#departure" ).datepicker();
		$('#child').hide();
        
        $('#children').click(function(){
            if ($(this).is(':checked')) {
                $('#child').show();               
            }else{
                $('#child').hide();               
            }
        });
	});
</script>