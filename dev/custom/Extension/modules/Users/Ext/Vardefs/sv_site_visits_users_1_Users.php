<?php
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
