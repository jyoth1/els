<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_occupancy_c.php

 // created: 2019-05-27 10:13:45
$dictionary['SV_Site_Visits']['fields']['occupancy_c']['labelValue']='Occupancy';
$dictionary['SV_Site_Visits']['fields']['occupancy_c']['dependency']='';
$dictionary['SV_Site_Visits']['fields']['occupancy_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_average_rating_c.php

 // created: 2019-05-27 10:14:11
$dictionary['SV_Site_Visits']['fields']['average_rating_c']['labelValue']='Average Rating';
$dictionary['SV_Site_Visits']['fields']['average_rating_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['SV_Site_Visits']['fields']['average_rating_c']['enforced']='';
$dictionary['SV_Site_Visits']['fields']['average_rating_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_lowest_score_c.php

 // created: 2019-05-27 10:14:38
$dictionary['SV_Site_Visits']['fields']['lowest_score_c']['labelValue']='Lowest Score';
$dictionary['SV_Site_Visits']['fields']['lowest_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['SV_Site_Visits']['fields']['lowest_score_c']['enforced']='';
$dictionary['SV_Site_Visits']['fields']['lowest_score_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_all_items_checked_c.php

 // created: 2019-05-27 16:49:44
$dictionary['SV_Site_Visits']['fields']['all_items_checked_c']['labelValue']='All Items Checked';
$dictionary['SV_Site_Visits']['fields']['all_items_checked_c']['dependency']='';
$dictionary['SV_Site_Visits']['fields']['all_items_checked_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_review_audit_performed_c.php

 // created: 2019-05-27 17:15:44
$dictionary['SV_Site_Visits']['fields']['review_audit_performed_c']['labelValue']='Review/Audit Performed';
$dictionary['SV_Site_Visits']['fields']['review_audit_performed_c']['dependency']='';
$dictionary['SV_Site_Visits']['fields']['review_audit_performed_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_document_name.php

 // created: 2019-05-27 17:23:58
$dictionary['SV_Site_Visits']['fields']['document_name']['audited']=false;
$dictionary['SV_Site_Visits']['fields']['document_name']['massupdate']=false;
$dictionary['SV_Site_Visits']['fields']['document_name']['duplicate_merge']='enabled';
$dictionary['SV_Site_Visits']['fields']['document_name']['duplicate_merge_dom_value']='1';
$dictionary['SV_Site_Visits']['fields']['document_name']['merge_filter']='disabled';
$dictionary['SV_Site_Visits']['fields']['document_name']['unified_search']=false;
$dictionary['SV_Site_Visits']['fields']['document_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.82',
  'searchable' => true,
);
$dictionary['SV_Site_Visits']['fields']['document_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_date_of_travel_c.php

 // created: 2019-05-27 19:27:47
$dictionary['SV_Site_Visits']['fields']['date_of_travel_c']['labelValue']='Date of Travel';
$dictionary['SV_Site_Visits']['fields']['date_of_travel_c']['enforced']='';
$dictionary['SV_Site_Visits']['fields']['date_of_travel_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/si_sites_sv_site_visits_1_SV_Site_Visits.php

// created: 2019-05-29 11:22:16
$dictionary["SV_Site_Visits"]["fields"]["si_sites_sv_site_visits_1"] = array (
  'name' => 'si_sites_sv_site_visits_1',
  'type' => 'link',
  'relationship' => 'si_sites_sv_site_visits_1',
  'source' => 'non-db',
  'module' => 'Si_Sites',
  'bean_name' => 'Si_Sites',
  'side' => 'right',
  'vname' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SV_SITE_VISITS_TITLE',
  'id_name' => 'si_sites_sv_site_visits_1si_sites_ida',
  'link-type' => 'one',
);
$dictionary["SV_Site_Visits"]["fields"]["si_sites_sv_site_visits_1_name"] = array (
  'name' => 'si_sites_sv_site_visits_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SI_SITES_TITLE',
  'save' => true,
  'id_name' => 'si_sites_sv_site_visits_1si_sites_ida',
  'link' => 'si_sites_sv_site_visits_1',
  'table' => 'si_sites',
  'module' => 'Si_Sites',
  'rname' => 'name',
);
$dictionary["SV_Site_Visits"]["fields"]["si_sites_sv_site_visits_1si_sites_ida"] = array (
  'name' => 'si_sites_sv_site_visits_1si_sites_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SV_SITE_VISITS_TITLE_ID',
  'id_name' => 'si_sites_sv_site_visits_1si_sites_ida',
  'link' => 'si_sites_sv_site_visits_1',
  'table' => 'si_sites',
  'module' => 'Si_Sites',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_sm_c.php

 // created: 2019-05-29 11:30:44
$dictionary['SV_Site_Visits']['fields']['sm_c']['labelValue']='SM';
$dictionary['SV_Site_Visits']['fields']['sm_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['SV_Site_Visits']['fields']['sm_c']['enforced']='';
$dictionary['SV_Site_Visits']['fields']['sm_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sugarfield_rm_c.php

 // created: 2019-05-29 11:31:02
$dictionary['SV_Site_Visits']['fields']['rm_c']['labelValue']='RM';
$dictionary['SV_Site_Visits']['fields']['rm_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['SV_Site_Visits']['fields']['rm_c']['enforced']='';
$dictionary['SV_Site_Visits']['fields']['rm_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/SV_Site_Visits/Ext/Vardefs/sv_site_visits_users_1_SV_Site_Visits.php

// created: 2019-05-29 11:41:46
$dictionary["SV_Site_Visits"]["fields"]["sv_site_visits_users_1"] = array (
  'name' => 'sv_site_visits_users_1',
  'type' => 'link',
  'relationship' => 'sv_site_visits_users_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'sv_site_visits_users_1users_idb',
);
$dictionary["SV_Site_Visits"]["fields"]["sv_site_visits_users_1_name"] = array (
  'name' => 'sv_site_visits_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'sv_site_visits_users_1users_idb',
  'link' => 'sv_site_visits_users_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["SV_Site_Visits"]["fields"]["sv_site_visits_users_1users_idb"] = array (
  'name' => 'sv_site_visits_users_1users_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_USERS_TITLE_ID',
  'id_name' => 'sv_site_visits_users_1users_idb',
  'link' => 'sv_site_visits_users_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
