<?php
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
