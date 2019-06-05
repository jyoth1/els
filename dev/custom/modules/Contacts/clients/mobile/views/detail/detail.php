<?php
$viewdefs['Contacts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
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
              0 => 'full_name',
              1 => 'title',
              2 => 'account_name',
              3 => 'phone_mobile',
              4 => 
              array (
                'name' => 'do_not_call',
                'comment' => 'An indicator of whether contact can be called',
                'label' => 'LBL_DO_NOT_CALL',
              ),
              5 => 
              array (
                'name' => 'department',
                'comment' => 'The department of the contact',
                'label' => 'LBL_DEPARTMENT',
              ),
              6 => 'email',
              7 => 'primary_address_street',
              8 => 'primary_address_city',
              9 => 'primary_address_state',
              10 => 'primary_address_postalcode',
              11 => 'primary_address_country',
              12 => 'alt_address_street',
              13 => 'alt_address_city',
              14 => 'alt_address_state',
              15 => 'alt_address_postalcode',
              16 => 'alt_address_country',
              17 => 'team_name',
              18 => 'phone_work',
              19 => 
              array (
                'name' => 'lead_source',
                'comment' => 'How did the contact come about',
                'label' => 'LBL_LEAD_SOURCE',
              ),
              20 => 'assigned_user_name',
              21 => 
              array (
                'name' => 'campaign_name',
                'comment' => 'The first campaign name for Contact (Meta-data only)',
                'label' => 'LBL_CAMPAIGN',
              ),
              22 => 
              array (
                'name' => 'preferred_language',
                'label' => 'LBL_PREFERRED_LANGUAGE',
              ),
              23 => 
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
              24 => 
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
