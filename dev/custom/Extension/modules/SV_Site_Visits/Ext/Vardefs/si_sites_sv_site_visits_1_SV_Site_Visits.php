<?php
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
