<?php
// created: 2019-05-27 11:33:03
$viewdefs['SV_Site_Visits']['base']['view']['subpanel-for-si_sites-si_sites_sv_site_visits_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_LIST_DOCUMENT_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'date_of_travel_c',
          'label' => 'LBL_DATE_OF_TRAVEL',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'review_audit_performed_c',
          'label' => 'LBL_REVIEW_AUDIT_PERFORMED',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'average_rating_c',
          'label' => 'LBL_AVERAGE_RATING',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);