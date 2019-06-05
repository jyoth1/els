<?php
// created: 2019-05-29 19:49:02
$dictionary["si_sites_users_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'si_sites_users_1' => 
    array (
      'lhs_module' => 'Si_Sites',
      'lhs_table' => 'si_sites',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'si_sites_users_1_c',
      'join_key_lhs' => 'si_sites_users_1si_sites_ida',
      'join_key_rhs' => 'si_sites_users_1users_idb',
    ),
  ),
  'table' => 'si_sites_users_1_c',
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
    'si_sites_users_1si_sites_ida' => 
    array (
      'name' => 'si_sites_users_1si_sites_ida',
      'type' => 'id',
    ),
    'si_sites_users_1users_idb' => 
    array (
      'name' => 'si_sites_users_1users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_si_sites_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_si_sites_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'si_sites_users_1si_sites_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_si_sites_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'si_sites_users_1users_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'si_sites_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'si_sites_users_1users_idb',
      ),
    ),
  ),
);