<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class ContactsController extends AppController{

	
    public function index(){
    	$this->viewBuilder()->layout('defaultview');

		 
		$this->paginate = [
            'contain' => ['Packages']
        ];
        $contacts = $this->paginate($this->Contacts->find('all'));

        $this->set(compact('contacts'));
        $this->set('_serialize', ['contacts']);
    }
    public function view($id){
    	$this->viewBuilder()->layout('defaultview');
		$Contacts = $this->Contacts->get($id, [
            'contain' => ['Packages']
        ]);

        $this->set('contacts', $Contacts);
        $this->set('_serialize', ['contacts']);

    }

    public function add($id){
	    // $this->viewBuilder()->layout('ajax');
	    $messages='';

	    $contacts = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
        	
            $this->request->data['is_active'] = 1;
            $contacts = $this->Contacts->patchEntity($contacts, $this->request->data);
            if ($this->Contacts->save($contacts)) {
            	$package_name=$this->Contacts->Packages->find('all')->select(['package_name'])->where(['id'=>$this->request->data['package_id']])->first();
            	
            	$to = "info@seeingo.com";
				$subject = "New Query,".$package_name['package_name'];
				$messages = $this->request->data['messages']."\n\n Name:".$this->request->data['name']."\n Email Id:".$this->request->data['email']."\n Mobile No:".$this->request->data['mobile']."\n Package Name:".$package_name['package_name'];
				$headers = "From:".$this->request->data['email'];

				if (mail($to, $subject, $messages,$headers)) {
            	
	                $messages='Your query has been sent. Someone will get back to you soon';
	               
	                return $this->set('messages',$messages);
            	}
            }
            $messages='Unable to send message. Please rectify the errors';
            $this->set('messages',$messages);
        }
   
		$packages = $this->Contacts->Packages->find('list', ['limit' => 200]);
        $search_val=AppController::filter($this->request->data);
        $result_val=json_decode($search_val,true);
        $filter=$result_val['filter'];
        $search=$result_val['search'];
        $this->set('search',$search);
        $this->set('filter',$filter);
        $this->set('messages',$messages);
		$this->set(compact('contacts', 'packages','id'));
		$this->set('_serialize', ['contacts']);

    }

    public function edit(){

    }

    public function delete(){

    }

    public function queryform(){
       $this->viewBuilder()->layout('menu'); 

       if($this->request->is('post')){
       
            $countries = array
            (
                'AF' => 'Afghanistan',
                'AX' => 'Aland Islands',
                'AL' => 'Albania',
                'DZ' => 'Algeria',
                'AS' => 'American Samoa',
                'AD' => 'Andorra',
                'AO' => 'Angola',
                'AI' => 'Anguilla',
                'AQ' => 'Antarctica',
                'AG' => 'Antigua And Barbuda',
                'AR' => 'Argentina',
                'AM' => 'Armenia',
                'AW' => 'Aruba',
                'AU' => 'Australia',
                'AT' => 'Austria',
                'AZ' => 'Azerbaijan',
                'BS' => 'Bahamas',
                'BH' => 'Bahrain',
                'BD' => 'Bangladesh',
                'BB' => 'Barbados',
                'BY' => 'Belarus',
                'BE' => 'Belgium',
                'BZ' => 'Belize',
                'BJ' => 'Benin',
                'BM' => 'Bermuda',
                'BT' => 'Bhutan',
                'BO' => 'Bolivia',
                'BA' => 'Bosnia And Herzegovina',
                'BW' => 'Botswana',
                'BV' => 'Bouvet Island',
                'BR' => 'Brazil',
                'IO' => 'British Indian Ocean Territory',
                'BN' => 'Brunei Darussalam',
                'BG' => 'Bulgaria',
                'BF' => 'Burkina Faso',
                'BI' => 'Burundi',
                'KH' => 'Cambodia',
                'CM' => 'Cameroon',
                'CA' => 'Canada',
                'CV' => 'Cape Verde',
                'KY' => 'Cayman Islands',
                'CF' => 'Central African Republic',
                'TD' => 'Chad',
                'CL' => 'Chile',
                'CN' => 'China',
                'CX' => 'Christmas Island',
                'CC' => 'Cocos (Keeling) Islands',
                'CO' => 'Colombia',
                'KM' => 'Comoros',
                'CG' => 'Congo',
                'CD' => 'Congo, Democratic Republic',
                'CK' => 'Cook Islands',
                'CR' => 'Costa Rica',
                'CI' => 'Cote D\'Ivoire',
                'HR' => 'Croatia',
                'CU' => 'Cuba',
                'CY' => 'Cyprus',
                'CZ' => 'Czech Republic',
                'DK' => 'Denmark',
                'DJ' => 'Djibouti',
                'DM' => 'Dominica',
                'DO' => 'Dominican Republic',
                'EC' => 'Ecuador',
                'EG' => 'Egypt',
                'SV' => 'El Salvador',
                'GQ' => 'Equatorial Guinea',
                'ER' => 'Eritrea',
                'EE' => 'Estonia',
                'ET' => 'Ethiopia',
                'FK' => 'Falkland Islands (Malvinas)',
                'FO' => 'Faroe Islands',
                'FJ' => 'Fiji',
                'FI' => 'Finland',
                'FR' => 'France',
                'GF' => 'French Guiana',
                'PF' => 'French Polynesia',
                'TF' => 'French Southern Territories',
                'GA' => 'Gabon',
                'GM' => 'Gambia',
                'GE' => 'Georgia',
                'DE' => 'Germany',
                'GH' => 'Ghana',
                'GI' => 'Gibraltar',
                'GR' => 'Greece',
                'GL' => 'Greenland',
                'GD' => 'Grenada',
                'GP' => 'Guadeloupe',
                'GU' => 'Guam',
                'GT' => 'Guatemala',
                'GG' => 'Guernsey',
                'GN' => 'Guinea',
                'GW' => 'Guinea-Bissau',
                'GY' => 'Guyana',
                'HT' => 'Haiti',
                'HM' => 'Heard Island & Mcdonald Islands',
                'VA' => 'Holy See (Vatican City State)',
                'HN' => 'Honduras',
                'HK' => 'Hong Kong',
                'HU' => 'Hungary',
                'IS' => 'Iceland',
                'IN' => 'India',
                'ID' => 'Indonesia',
                'IR' => 'Iran, Islamic Republic Of',
                'IQ' => 'Iraq',
                'IE' => 'Ireland',
                'IM' => 'Isle Of Man',
                'IL' => 'Israel',
                'IT' => 'Italy',
                'JM' => 'Jamaica',
                'JP' => 'Japan',
                'JE' => 'Jersey',
                'JO' => 'Jordan',
                'KZ' => 'Kazakhstan',
                'KE' => 'Kenya',
                'KI' => 'Kiribati',
                'KR' => 'Korea',
                'KW' => 'Kuwait',
                'KG' => 'Kyrgyzstan',
                'LA' => 'Lao People\'s Democratic Republic',
                'LV' => 'Latvia',
                'LB' => 'Lebanon',
                'LS' => 'Lesotho',
                'LR' => 'Liberia',
                'LY' => 'Libyan Arab Jamahiriya',
                'LI' => 'Liechtenstein',
                'LT' => 'Lithuania',
                'LU' => 'Luxembourg',
                'MO' => 'Macao',
                'MK' => 'Macedonia',
                'MG' => 'Madagascar',
                'MW' => 'Malawi',
                'MY' => 'Malaysia',
                'MV' => 'Maldives',
                'ML' => 'Mali',
                'MT' => 'Malta',
                'MH' => 'Marshall Islands',
                'MQ' => 'Martinique',
                'MR' => 'Mauritania',
                'MU' => 'Mauritius',
                'YT' => 'Mayotte',
                'MX' => 'Mexico',
                'FM' => 'Micronesia, Federated States Of',
                'MD' => 'Moldova',
                'MC' => 'Monaco',
                'MN' => 'Mongolia',
                'ME' => 'Montenegro',
                'MS' => 'Montserrat',
                'MA' => 'Morocco',
                'MZ' => 'Mozambique',
                'MM' => 'Myanmar',
                'NA' => 'Namibia',
                'NR' => 'Nauru',
                'NP' => 'Nepal',
                'NL' => 'Netherlands',
                'AN' => 'Netherlands Antilles',
                'NC' => 'New Caledonia',
                'NZ' => 'New Zealand',
                'NI' => 'Nicaragua',
                'NE' => 'Niger',
                'NG' => 'Nigeria',
                'NU' => 'Niue',
                'NF' => 'Norfolk Island',
                'MP' => 'Northern Mariana Islands',
                'NO' => 'Norway',
                'OM' => 'Oman',
                'PK' => 'Pakistan',
                'PW' => 'Palau',
                'PS' => 'Palestinian Territory, Occupied',
                'PA' => 'Panama',
                'PG' => 'Papua New Guinea',
                'PY' => 'Paraguay',
                'PE' => 'Peru',
                'PH' => 'Philippines',
                'PN' => 'Pitcairn',
                'PL' => 'Poland',
                'PT' => 'Portugal',
                'PR' => 'Puerto Rico',
                'QA' => 'Qatar',
                'RE' => 'Reunion',
                'RO' => 'Romania',
                'RU' => 'Russian Federation',
                'RW' => 'Rwanda',
                'BL' => 'Saint Barthelemy',
                'SH' => 'Saint Helena',
                'KN' => 'Saint Kitts And Nevis',
                'LC' => 'Saint Lucia',
                'MF' => 'Saint Martin',
                'PM' => 'Saint Pierre And Miquelon',
                'VC' => 'Saint Vincent And Grenadines',
                'WS' => 'Samoa',
                'SM' => 'San Marino',
                'ST' => 'Sao Tome And Principe',
                'SA' => 'Saudi Arabia',
                'SN' => 'Senegal',
                'RS' => 'Serbia',
                'SC' => 'Seychelles',
                'SL' => 'Sierra Leone',
                'SG' => 'Singapore',
                'SK' => 'Slovakia',
                'SI' => 'Slovenia',
                'SB' => 'Solomon Islands',
                'SO' => 'Somalia',
                'ZA' => 'South Africa',
                'GS' => 'South Georgia And Sandwich Isl.',
                'ES' => 'Spain',
                'LK' => 'Sri Lanka',
                'SD' => 'Sudan',
                'SR' => 'Suriname',
                'SJ' => 'Svalbard And Jan Mayen',
                'SZ' => 'Swaziland',
                'SE' => 'Sweden',
                'CH' => 'Switzerland',
                'SY' => 'Syrian Arab Republic',
                'TW' => 'Taiwan',
                'TJ' => 'Tajikistan',
                'TZ' => 'Tanzania',
                'TH' => 'Thailand',
                'TL' => 'Timor-Leste',
                'TG' => 'Togo',
                'TK' => 'Tokelau',
                'TO' => 'Tonga',
                'TT' => 'Trinidad And Tobago',
                'TN' => 'Tunisia',
                'TR' => 'Turkey',
                'TM' => 'Turkmenistan',
                'TC' => 'Turks And Caicos Islands',
                'TV' => 'Tuvalu',
                'UG' => 'Uganda',
                'UA' => 'Ukraine',
                'AE' => 'United Arab Emirates',
                'GB' => 'United Kingdom',
                'US' => 'United States',
                'UM' => 'United States Outlying Islands',
                'UY' => 'Uruguay',
                'UZ' => 'Uzbekistan',
                'VU' => 'Vanuatu',
                'VE' => 'Venezuela',
                'VN' => 'Viet Nam',
                'VG' => 'Virgin Islands, British',
                'VI' => 'Virgin Islands, U.S.',
                'WF' => 'Wallis And Futuna',
                'EH' => 'Western Sahara',
                'YE' => 'Yemen',
                'ZM' => 'Zambia',
                'ZW' => 'Zimbabwe',
            );

           $destination = $this->request->data['destination'];
           $departure = $this->request->data['departure'];
           $days = $this->request->data['days'];
           $nights = $this->request->data['nights'];
           $adults = $this->request->data['adults'];
           $children = $this->request->data['children'];
           $no_of_children = $this->request->data['no_of_children'];
           $children_age_grp1_1 = $this->request->data['children_age_grp1_1'];
           $children_age_grp1_2 = $this->request->data['children_age_grp1_2'];
           $children_age_grp1_3 = $this->request->data['children_age_grp1_3'];
           $children_age_grp2_1 = $this->request->data['children_age_grp2_1'];
           $children_age_grp2_2 = $this->request->data['children_age_grp2_2'];
           $children_age_grp2_3 = $this->request->data['children_age_grp2_3'];
           $children_age_grp3_1 = $this->request->data['children_age_grp3_1'];
           $children_age_grp3_2 = $this->request->data['children_age_grp3_2'];
           $children_age_grp3_3 = $this->request->data['children_age_grp3_3'];
           $children_age_grp4_1 = $this->request->data['children_age_grp4_1'];
           $children_age_grp4_2 = $this->request->data['children_age_grp4_2'];
           $children_age_grp4_3 = $this->request->data['children_age_grp4_3'];
           $children_age_grp5_1 = $this->request->data['children_age_grp5_1'];
           $children_age_grp5_2 = $this->request->data['children_age_grp5_2'];
           $children_age_grp5_3 = $this->request->data['children_age_grp5_3'];
           $children_age_grp6_1 = $this->request->data['children_age_grp6_1'];
           $children_age_grp6_2 = $this->request->data['children_age_grp6_2'];
           $children_age_grp6_3 = $this->request->data['children_age_grp6_3'];
           $children_age_grp7_1 = $this->request->data['children_age_grp7_1'];
           $children_age_grp7_2 = $this->request->data['children_age_grp7_2'];
           $children_age_grp7_3 = $this->request->data['children_age_grp7_3'];
           $children_age_grp8_1 = $this->request->data['children_age_grp8_1'];
           $children_age_grp8_2 = $this->request->data['children_age_grp8_2'];
           $children_age_grp8_3 = $this->request->data['children_age_grp8_3'];
           $children_age_grp9_1 = $this->request->data['children_age_grp9_1'];
           $children_age_grp9_2 = $this->request->data['children_age_grp9_2'];
           $children_age_grp9_3 = $this->request->data['children_age_grp9_3'];
           $age_grp_4 = $this->request->data['age_grp_4'];
           $age_grp_3 = $this->request->data['age_grp_3'];
           $age_grp_2 = $this->request->data['age_grp_2'];
           $age_grp_1 = $this->request->data['age_grp_1'];
           $custom_spec = $this->request->data['custom_spec'];
           $luxury_spec = $this->request->data['luxury_spec'];
           $cruise_spec = $this->request->data['cruise_spec'];
           $preplan_spec = $this->request->data['preplan_spec'];
           $suggest_spec = $this->request->data['suggest_spec'];
           $star_5 = $this->request->data['star_5'];
           $star_4 = $this->request->data['star_4'];
           $star_3 = $this->request->data['star_3'];
           $economy = $this->request->data['economy'];
           $villa = $this->request->data['villa'];
           $resort = $this->request->data['resort'];
           $camping = $this->request->data['camping'];
           $adventure_ser = $this->request->data['adventure_ser'];
           $special_ser = $this->request->data['special_ser'];
           $other_ser = $this->request->data['other_ser'];
           $budget = $this->request->data['budget'];
           $budget_flex = $this->request->data['budget_flex'];
           $firstname = $this->request->data['firstname'];
           $lastname = $this->request->data['lastname'];
           $email = $this->request->data['email'];
           $phone = $this->request->data['phone'];
           $address = $this->request->data['address'];
           if($children=='on'){
            $children_no .='Members:'.$no_of_children;
            $children_age .= "Age :";
             if($children_age_grp1_1=='on'){
                $children_age1 .="0-2 yrs <br/>";
              }
              if($children_age_grp1_2=='on'){
                $children_age1 .="3-6 yrs <br/>";
              }
              if($children_age_grp1_3=='on'){
                $children_age1 .="7-12 yrs <br/>";
              }
              if($children_age_grp2_1=='on'){
                $children_age2 .="0-2 yrs <br/>";
              }
              if($children_age_grp2_2=='on'){
                $children_age2 .="3-6 yrs <br/>";
              }
              if($children_age_grp2_3=='on'){
                $children_age2 .="7-12 yrs <br/>";
              }
              if($children_age_grp3_1=='on'){
                $children_age3 .="0-2 yrs <br/>";
              }
              if($children_age_grp3_2=='on'){
                $children_age3 .="3-6 yrs <br/>";
              }
              if($children_age_grp3_3=='on'){
                $children_age3 .="7-12 yrs <br/>";
              }
              if($children_age_grp4_1=='on'){
                $children_age4 .="0-2 yrs <br/>";
              }
              if($children_age_grp4_2=='on'){
                $children_age4 .="3-6 yrs <br/>";
              }
              if($children_age_grp4_3=='on'){
                $children_age4 .="7-12 yrs <br/>";
              }
              if($children_age_grp5_1=='on'){
                $children_age5 .="0-2 yrs <br/>";
              }
              if($children_age_grp5_2=='on'){
                $children_age5 .="3-6 yrs <br/>";
              }
              if($children_age_grp5_3=='on'){
                $children_age5 .="7-12 yrs <br/>";
              }
              if($children_age_grp6_1=='on'){
                $children_age6 .="0-2 yrs <br/>";
              }
              if($children_age_grp6_2=='on'){
                $children_age6 .="3-6 yrs <br/>";
              }
              if($children_age_grp6_3=='on'){
                $children_age6 .="7-12 yrs <br/>";
              }
              if($children_age_grp7_1=='on'){
                $children_age7 .="0-2 yrs <br/>";
              }
              if($children_age_grp7_2=='on'){
                $children_age7 .="3-6 yrs <br/>";
              }
              if($children_age_grp7_3=='on'){
                $children_age7 .="7-12 yrs <br/>";
              }
              if($children_age_grp8_1=='on'){
                $children_age8 .="0-2 yrs <br/>";
              }
              if($children_age_grp8_2=='on'){
                $children_age8 .="3-6 yrs <br/>";
              }
              if($children_age_grp8_3=='on'){
                $children_age8 .="7-12 yrs <br/>";
              }
              if($children_age_grp9_1=='on'){
                $children_age9 .="0-2 yrs <br/>";
              }
              if($children_age_grp9_2=='on'){
                $children_age9 .="3-6 yrs <br/>";
              }
              if($children_age_grp9_3=='on'){
                $children_age9 .="7-12 yrs <br/>";
              }
            }
           if($age_grp_1 == 'on'){
                $age .= "18-30 yrs<br/> ";
           }
           if($age_grp_2 == 'on'){
                $age .= " 31-50 yrs<br/> ";
           }
           if($age_grp_3 == 'on'){
                $age .= " 51-65 yrs<br/> ";
           }
           if($age_grp_4 == 'on'){
                $age .= " 65+ yrs";
           }


           if($custom_spec == 'on'){
                $spec .= "Customized package<br/>";
           }
           if($luxury_spec == 'on'){
                $spec .= "Luxury holidays<br/>";
           }
           if($cruise_spec == 'on'){
                $spec .= "Cruise liner<br/>";
           }
           if($preplan_spec == 'on'){
                $spec .= "Pre planned holiday package<br/>";
           }
           if($suggest_spec == 'on'){
                $spec .= "Suggestions from travel consultant based on my package<br/>";
           }


           if($star_5 == 'on'){
                $stay .= "5 Star<br/>";
           }
           if($star_4 == 'on'){
                $stay .= "4 Star<br/>";
           }
           if($star_3 == 'on'){
                $stay .= "3 Star<br/>";
           }
           if($economy == 'on'){
                $stay .= "Economy<br/>";
           }
           if($villa == 'on'){
                $stay .= "Villa<br/>";
           }
           if($resort == 'on'){
                $stay .= "Resort<br/>";
           }
           if($camping == 'on'){
                $stay .= "Camping<br/>";
           }



           if($adventure_ser == 'on'){
                $service .= "Adventure activities / Guided tours & exploring the place differently  <br/>";
           }
           if($special_ser == 'on'){
                $service .= "Special occassion preparation / celebration  <br/>";
           }
           if($other_ser == 'on'){
                $service .= "Other transportation<br/>";
           }

           if($children == "on"){
                $child = "Yes";
           }
           else{
                $child = "No";
           }


           $msg = "Country: <b>".$countries[$destination]."</b>";
           $msg .= "<br/>Departure Date: <b>".$departure."</b>";
           $msg .= "<br/>Trip Duration: <b> Nights:".$nights." Nights</b>";
           $msg .= "<br/>Members: <b>".$adults."</b> & Children: <b>".$child."</b>";
           $msg .= "<br/>".$children_no."<b><br/>".$children_age1." ".$children_age2." ".$children_age3." ".$children_age4." ".$children_age5." ".$children_age6." ".$children_age7." ".$children_age8." ".$children_age9."</b>";
           $msg .= "<br/>Budget: <b>INR ".$budget."</b> (Budget Flexible: <b>".$budget_flex."</b>)";
           $msg .= "<br/>Age Group: <br/><b>".$age."</b>";
           $msg .= "<br/>Specifications: <br/><b>".$spec."</b>";
           $msg .= "<br/>Accommodation Preference: <br/><b>".$stay."</b>";
           $msg .= "<br/>Extra Services: <br/><b>".$service."</b>";
           $msg .= "<br/><br/><u>Contact Details:</u><br/><b>".$firstname." ".$lastname."<br/>".$email."<br/>".$phone."<br/>".$address;

           $mail_body = "Hi Team,<br/><br/>".ucwords($firstname)." ".ucwords($lastname)." is looking for a custom package with the following details:<br/><br/>".$msg;


           $to = EMAIL_TO;
          
           $subject = ucwords($firstname)." ".ucwords($lastname)." placed a new enquiry through Seeingo website";
           $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: '.EMAIL_TO . "\r\n";
            $headers .= 'Cc: '.EMAIL_CC . "\r\n";

            if(mail($to, $subject, $mail_body, $headers)){
                $this->set("class", "bg-success head_microtext");
                $this->set("mail_remarks", "Thanks, your enquiry was submitted. Somebody will get in touch with you soon");
            }
            else{
                $this->set("class", "bg-danger head_microtext");
                $this->set("mail_remarks", "Some error occured. Enquiry could not be sent");
            }
       }
           
       
    }


    public function faq(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function about(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function product(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function terms(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function privacy(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function disclaimer(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function cancel(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function team(){
       $this->viewBuilder()->layout('menu'); 

    }

    public function contacts(){
        $this->viewBuilder()->layout('menu'); 
    }

    public function queryform2(){
        $this->viewBuilder()->layout('menu'); 
    }
}
?>