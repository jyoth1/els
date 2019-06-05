<?php
$viewdefs['Leads'] = 
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
              2 => 'phone_mobile',
              3 => 
              array (
                'name' => 'city_c',
                'label' => 'LBL_CITY',
              ),
              4 => 'account_name',
              5 => 'email',
              6 => 'assigned_user_name',
              7 => 'primary_address_state',
              8 => 'primary_address_postalcode',
              9 => 'primary_address_city',
              10 => 'alt_address_street',
              11 => 'alt_address_city',
              12 => 'alt_address_state',
              13 => 'alt_address_postalcode',
              14 => 'alt_address_country',
              15 => 'primary_address_country',
              16 => 'primary_address_street',
              17 => 'status',
              18 => 
              array (
                'name' => 'status_description',
                'comment' => 'Description of the status of the lead',
                'label' => 'LBL_STATUS_DESCRIPTION',
              ),
              19 => 
              array (
                'name' => 'lead_source',
                'comment' => 'Lead source (ex: Web, print)',
                'label' => 'LBL_LEAD_SOURCE',
              ),
              20 => 
              array (
                'name' => 'lead_source_description',
                'comment' => 'Description of the lead source',
                'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
              ),
              21 => 
              array (
                'name' => 'opportunity_amount',
                'comment' => 'Amount of the opportunity',
                'label' => 'LBL_OPPORTUNITY_AMOUNT',
              ),
              22 => 
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
              23 => 
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
