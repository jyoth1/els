<?php
$module_name = 'Exp_Expenses';
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
                'name' => 'filename',
                'label' => 'LBL_LIST_FILENAME',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'category_id',
                'label' => 'LBL_LIST_CATEGORY',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'status_id',
                'label' => 'LBL_LIST_STATUS',
                'enabled' => true,
                'default' => false,
              ),
              4 => 
              array (
                'name' => 'active_date',
                'label' => 'LBL_LIST_ACTIVE_DATE',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
