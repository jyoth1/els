<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sv_site_visits_users_1_Users.php

// created: 2019-05-29 11:41:46
$dictionary["User"]["fields"]["sv_site_visits_users_1"] = array (
  'name' => 'sv_site_visits_users_1',
  'type' => 'link',
  'relationship' => 'sv_site_visits_users_1',
  'source' => 'non-db',
  'module' => 'SV_Site_Visits',
  'bean_name' => 'SV_Site_Visits',
  'vname' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE',
  'id_name' => 'sv_site_visits_users_1sv_site_visits_ida',
);
$dictionary["User"]["fields"]["sv_site_visits_users_1_name"] = array (
  'name' => 'sv_site_visits_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE',
  'save' => true,
  'id_name' => 'sv_site_visits_users_1sv_site_visits_ida',
  'link' => 'sv_site_visits_users_1',
  'table' => 'sv_site_visits',
  'module' => 'SV_Site_Visits',
  'rname' => 'document_name',
);
$dictionary["User"]["fields"]["sv_site_visits_users_1sv_site_visits_ida"] = array (
  'name' => 'sv_site_visits_users_1sv_site_visits_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE_ID',
  'id_name' => 'sv_site_visits_users_1sv_site_visits_ida',
  'link' => 'sv_site_visits_users_1',
  'table' => 'sv_site_visits',
  'module' => 'SV_Site_Visits',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/si_sites_users_1_Users.php

// created: 2019-05-29 19:49:02
$dictionary["User"]["fields"]["si_sites_users_1"] = array (
  'name' => 'si_sites_users_1',
  'type' => 'link',
  'relationship' => 'si_sites_users_1',
  'source' => 'non-db',
  'module' => 'Si_Sites',
  'bean_name' => 'Si_Sites',
  'side' => 'right',
  'vname' => 'LBL_SI_SITES_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'si_sites_users_1si_sites_ida',
  'link-type' => 'one',
);
$dictionary["User"]["fields"]["si_sites_users_1_name"] = array (
  'name' => 'si_sites_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SI_SITES_USERS_1_FROM_SI_SITES_TITLE',
  'save' => true,
  'id_name' => 'si_sites_users_1si_sites_ida',
  'link' => 'si_sites_users_1',
  'table' => 'si_sites',
  'module' => 'Si_Sites',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["si_sites_users_1si_sites_ida"] = array (
  'name' => 'si_sites_users_1si_sites_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SI_SITES_USERS_1_FROM_USERS_TITLE_ID',
  'id_name' => 'si_sites_users_1si_sites_ida',
  'link' => 'si_sites_users_1',
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
