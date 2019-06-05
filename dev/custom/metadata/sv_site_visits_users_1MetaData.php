<?php
// created: 2019-05-29 11:41:46
$dictionary["sv_site_visits_users_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'sv_site_visits_users_1' => 
    array (
      'lhs_module' => 'SV_Site_Visits',
      'lhs_table' => 'sv_site_visits',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sv_site_visits_users_1_c',
      'join_key_lhs' => 'sv_site_visits_users_1sv_site_visits_ida',
      'join_key_rhs' => 'sv_site_visits_users_1users_idb',
    ),
  ),
  'table' => 'sv_site_visits_users_1_c',
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
    'sv_site_visits_users_1sv_site_visits_ida' => 
    array (
      'name' => 'sv_site_visits_users_1sv_site_visits_ida',
      'type' => 'id',
    ),
    'sv_site_visits_users_1users_idb' => 
    array (
      'name' => 'sv_site_visits_users_1users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_sv_site_visits_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_sv_site_visits_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sv_site_visits_users_1sv_site_visits_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_sv_site_visits_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sv_site_visits_users_1users_idb',
        1 => 'deleted',
      ),
    ),
  ),
);