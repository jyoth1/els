<?php
$module_name = 'SV_Site_Visits';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
        'templateMeta' => 
        array (
          'form' => 
          array (
            'buttons' => 
            array (
              0 => 'EDIT',
              1 => 'DUPLICATE',
              2 => 'DELETE',
            ),
          ),
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
            1 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'document_name',
                'label' => 'LBL_DOC_NAME',
              ),
              1 => 
              array (
                'name' => 'date_of_travel_c',
                'label' => 'LBL_DATE_OF_TRAVEL',
              ),
              2 => 
              array (
                'name' => 'si_sites_sv_site_visits_1_name',
                'label' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SI_SITES_TITLE',
              ),
              3 => 
              array (
                'name' => 'uploadfile',
                'displayParams' => 
                array (
                  'link' => 'uploadfile',
                  'id' => 'id',
                ),
              ),
              4 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              5 => 
              array (
                'name' => 'review_audit_performed_c',
                'label' => 'LBL_REVIEW_AUDIT_PERFORMED',
              ),
              6 => 
              array (
                'name' => 'all_items_checked_c',
                'label' => 'LBL_ALL_ITEMS_CHECKED',
              ),
              7 => 
              array (
                'name' => 'occupancy_c',
                'label' => 'LBL_OCCUPANCY',
              ),
              8 => 
              array (
                'name' => 'average_rating_c',
                'label' => 'LBL_AVERAGE_RATING',
              ),
              9 => 
              array (
                'name' => 'lowest_score_c',
                'label' => 'LBL_LOWEST_SCORE',
              ),
              10 => 'assigned_user_name',
              11 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              12 => 
              array (
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
