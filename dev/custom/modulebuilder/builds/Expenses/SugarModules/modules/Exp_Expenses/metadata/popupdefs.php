<?php
$popupMeta = array (
    'moduleMain' => 'Exp_Expenses',
    'varName' => 'Exp_Expenses',
    'orderBy' => 'exp_expenses.name',
    'whereClauses' => array (
  'name' => 'exp_expenses.name',
),
    'searchInputs' => array (
  0 => 'exp_expenses_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'DOCUMENT_NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => 10,
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SF_CATEGORY',
    'width' => 10,
  ),
),
);
