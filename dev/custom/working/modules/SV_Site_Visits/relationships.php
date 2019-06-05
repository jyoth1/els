<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'sv_site_visits_modified_user' => 
  array (
    'name' => 'sv_site_visits_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_Site_Visits',
    'rhs_table' => 'sv_site_visits',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'sv_site_visits_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'sv_site_visits_created_by' => 
  array (
    'name' => 'sv_site_visits_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_Site_Visits',
    'rhs_table' => 'sv_site_visits',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'sv_site_visits_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'sv_site_visits_activities' => 
  array (
    'name' => 'sv_site_visits_activities',
    'lhs_module' => 'SV_Site_Visits',
    'lhs_table' => 'sv_site_visits',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'SV_Site_Visits',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'sv_site_visits_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'sv_site_visits_following' => 
  array (
    'name' => 'sv_site_visits_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_Site_Visits',
    'rhs_table' => 'sv_site_visits',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'SV_Site_Visits',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'sv_site_visits_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'sv_site_visits_favorite' => 
  array (
    'name' => 'sv_site_visits_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_Site_Visits',
    'rhs_table' => 'sv_site_visits',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SV_Site_Visits',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'sv_site_visits_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'sv_site_visits_assigned_user' => 
  array (
    'name' => 'sv_site_visits_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_Site_Visits',
    'rhs_table' => 'sv_site_visits',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'sv_site_visits_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'si_sites_sv_site_visits_1' => 
  array (
    'name' => 'si_sites_sv_site_visits_1',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'si_sites_sv_site_visits_1' => 
      array (
        'lhs_module' => 'Si_Sites',
        'lhs_table' => 'si_sites',
        'lhs_key' => 'id',
        'rhs_module' => 'SV_Site_Visits',
        'rhs_table' => 'sv_site_visits',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'si_sites_sv_site_visits_1_c',
        'join_key_lhs' => 'si_sites_sv_site_visits_1si_sites_ida',
        'join_key_rhs' => 'si_sites_sv_site_visits_1sv_site_visits_idb',
      ),
    ),
    'table' => 'si_sites_sv_site_visits_1_c',
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
      'si_sites_sv_site_visits_1si_sites_ida' => 
      array (
        'name' => 'si_sites_sv_site_visits_1si_sites_ida',
        'type' => 'id',
      ),
      'si_sites_sv_site_visits_1sv_site_visits_idb' => 
      array (
        'name' => 'si_sites_sv_site_visits_1sv_site_visits_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_si_sites_sv_site_visits_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_si_sites_sv_site_visits_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'si_sites_sv_site_visits_1si_sites_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_si_sites_sv_site_visits_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'si_sites_sv_site_visits_1sv_site_visits_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'si_sites_sv_site_visits_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'si_sites_sv_site_visits_1sv_site_visits_idb',
        ),
      ),
    ),
    'lhs_module' => 'Si_Sites',
    'lhs_table' => 'si_sites',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_Site_Visits',
    'rhs_table' => 'sv_site_visits',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'si_sites_sv_site_visits_1_c',
    'join_key_lhs' => 'si_sites_sv_site_visits_1si_sites_ida',
    'join_key_rhs' => 'si_sites_sv_site_visits_1sv_site_visits_idb',
    'readonly' => true,
    'relationship_name' => 'si_sites_sv_site_visits_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sv_site_visits_users_1' => 
  array (
    'lhs_module' => 'SV_Site_Visits',
    'rhs_module' => 'Users',
    'relationship_type' => 'one-to-one',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'sv_site_visits_users_1',
  ),
);