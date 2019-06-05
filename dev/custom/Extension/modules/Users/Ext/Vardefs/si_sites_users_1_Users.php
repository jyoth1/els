<?php
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
