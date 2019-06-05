<?php
$module_name = 'SV_Site_Visits';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
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
                'type' => 'name',
              ),
              1 => 
              array (
                'name' => 'si_sites_sv_site_visits_1_name',
                'label' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SI_SITES_TITLE',
                'enabled' => true,
                'id' => 'SI_SITES_SV_SITE_VISITS_1SI_SITES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'date_of_travel_c',
                'label' => 'LBL_DATE_OF_TRAVEL',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'review_audit_performed_c',
                'label' => 'LBL_REVIEW_AUDIT_PERFORMED',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'average_rating_c',
                'label' => 'LBL_AVERAGE_RATING',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO',
                'enabled' => true,
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'all_items_checked_c',
                'label' => 'LBL_ALL_ITEMS_CHECKED',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'occupancy_c',
                'label' => 'LBL_OCCUPANCY',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'lowest_score_c',
                'label' => 'LBL_LOWEST_SCORE',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
