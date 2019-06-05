<?php
// created: 2019-05-25 13:53:53
$dictionary["exp_expenses_meetings"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'exp_expenses_meetings' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Exp_Expenses',
      'rhs_table' => 'exp_expenses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'exp_expenses_meetings_c',
      'join_key_lhs' => 'exp_expenses_meetingsmeetings_ida',
      'join_key_rhs' => 'exp_expenses_meetingsexp_expenses_idb',
    ),
  ),
  'table' => 'exp_expenses_meetings_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'exp_expenses_meetingsmeetings_ida' => 
    array (
      'name' => 'exp_expenses_meetingsmeetings_ida',
      'type' => 'id',
    ),
    'exp_expenses_meetingsexp_expenses_idb' => 
    array (
      'name' => 'exp_expenses_meetingsexp_expenses_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_exp_expenses_meetings_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_exp_expenses_meetings_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'exp_expenses_meetingsmeetings_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_exp_expenses_meetings_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'exp_expenses_meetingsexp_expenses_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'exp_expenses_meetings_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'exp_expenses_meetingsexp_expenses_idb',
      ),
    ),
  ),
);