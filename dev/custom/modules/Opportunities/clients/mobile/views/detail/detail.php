<?php
$viewdefs['Opportunities'] = 
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
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'newTab' => false,
            'panelDefault' => 'expanded',
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
              1 => 'account_name',
              2 => 'date_closed',
              3 => 'amount',
              4 => 
              array (
                'name' => 'best_case',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_BEST',
              ),
              5 => 
              array (
                'name' => 'worst_case',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_WORST',
              ),
              6 => 
              array (
                'name' => 'sales_status',
                'readonly' => true,
                'studio' => true,
                'label' => 'LBL_SALES_STATUS',
              ),
              7 => 
              array (
                'name' => 'next_step',
                'comment' => 'The next step in the sales process',
                'label' => 'LBL_NEXT_STEP',
              ),
              8 => 
              array (
                'name' => 'opportunity_type',
                'comment' => 'Type of opportunity (ex: Existing, New)',
                'label' => 'LBL_TYPE',
              ),
              9 => 
              array (
                'name' => 'lead_source',
                'comment' => 'Source of the opportunity',
                'label' => 'LBL_LEAD_SOURCE',
              ),
              10 => 
              array (
                'name' => 'campaign_name',
                'label' => 'LBL_CAMPAIGN',
              ),
              11 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              12 => 'assigned_user_name',
              13 => 'team_name',
              14 => 
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
              15 => 
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
