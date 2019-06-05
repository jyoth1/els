<?php
$module_name = 'Si_Sites';
$_module_name = 'si_sites';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'city_c',
                'label' => 'LBL_CITY',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_ACCOUNT_NAME',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'no_of_screens_c',
                'label' => 'LBL_NO_OF_SCREENS',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'no_of_seats_c',
                'label' => 'LBL_NO_OF_SEATS',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'si_sites_type',
                'label' => 'LBL_TYPE',
                'default' => false,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'industry',
                'label' => 'LBL_INDUSTRY',
                'default' => false,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'annual_revenue',
                'label' => 'LBL_ANNUAL_REVENUE',
                'default' => false,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'email',
                'label' => 'LBL_ANY_EMAIL',
                'link' => true,
                'default' => false,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              9 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
              ),
              12 => 
              array (
                'name' => 'phone_fax',
                'label' => 'LBL_PHONE_FAX',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
