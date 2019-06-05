<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_email.php

 // created: 2019-05-25 14:54:56
$dictionary['Lead']['fields']['email']['len']='100';
$dictionary['Lead']['fields']['email']['required']=true;
$dictionary['Lead']['fields']['email']['massupdate']=true;
$dictionary['Lead']['fields']['email']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['email']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['email']['merge_filter']='disabled';
$dictionary['Lead']['fields']['email']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.83',
  'searchable' => true,
);
$dictionary['Lead']['fields']['email']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_phone_mobile.php

 // created: 2019-05-25 14:55:16
$dictionary['Lead']['fields']['phone_mobile']['len']='100';
$dictionary['Lead']['fields']['phone_mobile']['required']=true;
$dictionary['Lead']['fields']['phone_mobile']['massupdate']=false;
$dictionary['Lead']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Lead']['fields']['phone_mobile']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['phone_mobile']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['phone_mobile']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_mobile']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.01',
  'searchable' => true,
);
$dictionary['Lead']['fields']['phone_mobile']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_city_c.php

 // created: 2019-05-25 15:16:11
$dictionary['Lead']['fields']['city_c']['labelValue']='City';
$dictionary['Lead']['fields']['city_c']['dependency']='';
$dictionary['Lead']['fields']['city_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_first_name.php

 // created: 2019-05-25 15:30:04
$dictionary['Lead']['fields']['first_name']['required']=true;
$dictionary['Lead']['fields']['first_name']['massupdate']=false;
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['first_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['first_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.87',
  'searchable' => true,
);
$dictionary['Lead']['fields']['first_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_status.php

 // created: 2019-05-29 18:30:04
$dictionary['Lead']['fields']['status']['default']='';
$dictionary['Lead']['fields']['status']['len']=100;
$dictionary['Lead']['fields']['status']['massupdate']=true;
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['status']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_site_name_c.php

 // created: 2019-05-30 16:38:25
$dictionary['Lead']['fields']['site_name_c']['labelValue']='Site Name';
$dictionary['Lead']['fields']['site_name_c']['dependency']='';
$dictionary['Lead']['fields']['site_name_c']['visibility_grid']=array (
  'trigger' => 'city_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Ahemdabad' => 
    array (
      0 => '',
      1 => 'Cinepolis Ahmedabad One Mall',
    ),
    'Ambala' => 
    array (
      0 => '',
      1 => 'Fun Cinema Galaxy Mall Ambala',
    ),
    'Amritsar' => 
    array (
      0 => '',
      1 => 'Cinepolis Celebration Mall Amritsar',
      2 => 'Cinepolis Mall of Amritsar',
    ),
    'Bathinda' => 
    array (
      0 => '',
      1 => 'Fun Cinema Mittal City Mall Bhatinda',
    ),
    'Bengaluru' => 
    array (
      0 => '',
      1 => 'Cinepolis Royal Meenakshi Mall Bengaluru',
      2 => 'Cinepolis ETA Mall Bangalore',
      3 => 'Fun Cinema Sigma Mall Bangalore',
      4 => 'Cinepolis Orion East Mall Bangalore',
      5 => 'Cinepolis Forum Shantiniketan',
    ),
    'Bhopal' => 
    array (
      0 => '',
      1 => 'Cinepolis Aashima Mall Bhopal',
      2 => 'Cinepolis DB Mall Bhopal',
    ),
    'Bhubaneswar' => 
    array (
      0 => '',
      1 => 'Cinepolis Esplanade Bhubaneswar',
    ),
    'Chandigarh' => 
    array (
      0 => '',
      1 => 'Fun Republic Chandigarh',
      2 => 'Cinepolis TDI Mall Jagat Chandigarh',
      3 => 'Cinepolis Bestech Square Mohali',
    ),
    'Coimbatore' => 
    array (
      0 => '',
      1 => 'Fun Cinema Fun Republic Mall Coimbatore',
    ),
    'Ghaziabad' => 
    array (
      0 => '',
      1 => 'Cinepolis RED Mall Ghaziabad',
    ),
    'Greater Noida' => 
    array (
      0 => '',
      1 => 'Cinepolis The Grand Venice Mall Greater Noida',
    ),
    'Guwahati' => 
    array (
      0 => '',
      1 => 'Cinepolis Central Mall Guwahati',
    ),
    'Gwalior' => 
    array (
      0 => '',
      1 => 'Fun Cinema DD City Mall Gwalior',
    ),
    'Hubli' => 
    array (
      0 => '',
      1 => 'Cinepolis Urban Oasis Mall Hubli',
    ),
    'Hyderabad' => 
    array (
      0 => '',
      1 => 'Cinepolis Manjeera Mall Kukatpally Hyderabad',
      2 => 'Cinepolis CCPL Mall Malkajgiri Hyderabad',
      3 => 'Cinepolis Mantra Mall Attapur Hyderabad',
    ),
    'Jaipur' => 
    array (
      0 => '',
      1 => 'Cinepolis World Trade Park Jaipur',
      2 => 'Cinepolis Triton Mega Mall Jaipur',
    ),
    'Kochi' => 
    array (
      0 => '',
      1 => 'Cinepolis Centre Square Mall Kochi',
      2 => 'Cinepolis VIP Centre Square Mall Kochi',
    ),
    'Kolkata' => 
    array (
      0 => '',
      1 => 'Cinepolis Acropolis Mall Kolkata',
      2 => 'Cinepolis Lake Mall Kolkata',
    ),
    'Kota' => 
    array (
      0 => '',
      1 => 'Fun Cinema City Mall Kota',
    ),
    'Lucknow' => 
    array (
      0 => '',
      1 => 'Fun Cinema Fun Republic Mall Lucknow',
      2 => 'Cinepolis One Awadh Center Mall Lucknow',
    ),
    'Ludihiana' => 
    array (
      0 => '',
      1 => 'Cinepolis MBD Mall Ludhiana',
    ),
    'Mangalore' => 
    array (
      0 => '',
      1 => 'Cinepolis City Centre Mall Mangalore',
    ),
    'Mumbai' => 
    array (
      0 => '',
      1 => 'Fun Cinema K Star Mall Chembur',
      2 => 'Cinepolis Andheri',
      3 => 'Cinepolis Magnet Mall Bhandup Mumbai',
    ),
    'Muzaffarpu' => 
    array (
      0 => '',
      1 => 'Cinepolis Grand Mall Muzaffarpur',
    ),
    'New Delhi' => 
    array (
      0 => '',
      1 => 'Cinepolis CRM Mall Shahdara',
      2 => 'Cinepolis Laxmi Nagar',
      3 => 'Fun Cinema NSQ Mall Pitampura',
      4 => 'Fun Cinema TDI Mall Moti Nagar',
      5 => 'Cinepolis DLF Place Mall Saket',
      6 => 'DT Savitri GK II',
      7 => 'Cinepolis Janak New Delhi',
    ),
    'Noida' => 
    array (
      0 => '',
      1 => 'Spice Cinema Noida',
    ),
    'Panipat' => 
    array (
      0 => '',
      1 => 'Fun Cinema Mittal Mega Mall Panipat',
    ),
    'Patna' => 
    array (
      0 => '',
      1 => 'Cinepolis P and M Mall Patna',
    ),
    'Pune' => 
    array (
      0 => '',
      1 => 'Cinepolis Seasons Mall Pune',
      2 => 'Cinepolis Westend Mall Sumashilp Pune',
      3 => 'Cinepolis VIP Seasons Pune',
    ),
    'Surat' => 
    array (
      0 => '',
      1 => 'Cinepolis Imperial Square Mall Surat',
    ),
    'Thane' => 
    array (
      0 => '',
      1 => 'Cinepolis VIP Viviana Mall Thane',
      2 => 'CinemaStar High Street Mall Thane',
      3 => 'Cinepolis Viviana Mall Thane',
    ),
    'Vadodara' => 
    array (
      0 => '',
      1 => 'Cinepolis Inorbit Mall Vadodara',
    ),
    'Vijayawada' => 
    array (
      0 => '',
      1 => 'Cinepolis PVP Square Vijayawada',
    ),
    'Ahmedabad' => 
    array (
      0 => '',
      1 => 'Cinepolis Ahmedabad One Mall',
    ),
  ),
);

 
?>
