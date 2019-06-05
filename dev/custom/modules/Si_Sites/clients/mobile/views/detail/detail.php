<?php
$module_name = 'Si_Sites';
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
              0 => 'name',
              1 => 
              array (
                'name' => 'city_c',
                'label' => 'LBL_CITY',
              ),
              2 => 
              array (
                'name' => 'billing_address_street',
                'comment' => 'The street address used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
              ),
              3 => 
              array (
                'name' => 'billing_address_city',
                'comment' => 'The city used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
              ),
              4 => 
              array (
                'name' => 'billing_address_state',
                'comment' => 'The state used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
              ),
              5 => 
              array (
                'name' => 'billing_address_postalcode',
                'comment' => 'The postal code used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              ),
              6 => 
              array (
                'name' => 'billing_address_country',
                'comment' => 'The country used for the billing address',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              ),
              7 => 
              array (
                'name' => 'no_of_screens_c',
                'label' => 'LBL_NO_OF_SCREENS',
              ),
              8 => 
              array (
                'name' => 'no_of_seats_c',
                'label' => 'LBL_NO_OF_SEATS',
              ),
              9 => 'email1',
              10 => 
              array (
                'name' => 'rating',
                'comment' => 'An arbitrary rating for this company for use in comparisons with others',
                'label' => 'LBL_RATING',
              ),
              11 => 
              array (
                'name' => 'si_sites_type',
                'comment' => 'The Company is of this type',
                'label' => 'LBL_TYPE',
              ),
              12 => 
              array (
                'name' => 'ownership',
                'comment' => '',
                'label' => 'LBL_OWNERSHIP',
              ),
              13 => 'assigned_user_name',
              14 => 'team_name',
              15 => 
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
              16 => 
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
