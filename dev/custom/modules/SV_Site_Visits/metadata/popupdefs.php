<?php
$popupMeta = array (
    'moduleMain' => 'SV_Site_Visits',
    'varName' => 'SV_Site_Visits',
    'orderBy' => 'sv_site_visits.name',
    'whereClauses' => array (
  'name' => 'sv_site_visits.name',
),
    'searchInputs' => array (
  0 => 'sv_site_visits_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'DOCUMENT_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'SI_SITES_SV_SITE_VISITS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SI_SITES_TITLE',
    'id' => 'SI_SITES_SV_SITE_VISITS_1SI_SITES_IDA',
    'width' => 10,
    'default' => true,
  ),
  'DATE_OF_TRAVEL_C' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_OF_TRAVEL',
    'width' => 10,
    'default' => true,
  ),
  'REVIEW_AUDIT_PERFORMED_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_REVIEW_AUDIT_PERFORMED',
    'width' => 10,
  ),
  'AVERAGE_RATING_C' => 
  array (
    'type' => 'int',
    'label' => 'LBL_AVERAGE_RATING',
    'width' => 10,
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => 10,
    'default' => true,
  ),
),
);
