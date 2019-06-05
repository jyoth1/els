<?php
$module_name = 'Exp_Expenses';
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
                'name' => 'document_name',
                'label' => 'LBL_NAME',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              1 => 
              array (
                'name' => 'category_id',
                'label' => 'LBL_LIST_CATEGORY',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'sortable' => false,
                'default' => true,
                'enabled' => true,
              ),
              3 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED_USER',
                'module' => 'Users',
                'id' => 'USERS_ID',
                'default' => false,
                'sortable' => false,
                'related_fields' => 
                array (
                  0 => 'modified_user_id',
                ),
                'enabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
