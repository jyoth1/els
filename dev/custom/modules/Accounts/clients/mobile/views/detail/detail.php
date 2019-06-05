<?php
$viewdefs['Accounts'] = 
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
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 
              array (
                'name' => 'website',
                'displayParams' => 
                array (
                  'type' => 'link',
                ),
              ),
              2 => 
              array (
                'name' => 'industry',
                'comment' => 'The company belongs in this industry',
                'label' => 'LBL_INDUSTRY',
              ),
              3 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_MEMBER_OF',
              ),
              4 => 
              array (
                'name' => 'account_type',
                'comment' => 'The Company is of this type',
                'label' => 'LBL_TYPE',
              ),
              5 => 
              array (
                'name' => 'service_level',
                'comment' => 'An indication of the service level of a company',
                'label' => 'LBL_SERVICE_LEVEL',
              ),
              6 => 'assigned_user_name',
              7 => 'phone_office',
              8 => 'billing_address_city',
              9 => 'billing_address_state',
              10 => 'billing_address_street',
              11 => 'billing_address_postalcode',
              12 => 'billing_address_country',
              13 => 'shipping_address_street',
              14 => 'shipping_address_city',
              15 => 'shipping_address_state',
              16 => 'shipping_address_postalcode',
              17 => 'shipping_address_country',
              18 => 
              array (
                'name' => 'phone_alternate',
                'comment' => 'An alternate phone number',
                'label' => 'LBL_PHONE_ALT',
              ),
              19 => 'email',
              20 => 
              array (
                'name' => 'phone_fax',
                'comment' => 'The fax phone number of this company',
                'label' => 'LBL_FAX',
              ),
              21 => 
              array (
                'name' => 'campaign_name',
                'comment' => 'The first campaign name for Account (Meta-data only)',
                'label' => 'LBL_CAMPAIGN',
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
