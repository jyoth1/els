<?php 
 $GLOBALS["dictionary"]["OutboundEmail"]=array (
  'table' => 'outbound_email',
  'hidden_to_role_assignment' => true,
  'acls' => 
  array (
    'SugarACLOutboundEmail' => true,
    'SugarACLStatic' => true,
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'mandatory_fetch' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'required' => true,
      'reportable' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'varchar',
      'len' => 15,
      'required' => true,
      'default' => 'user',
      'reportable' => false,
      'mandatory_fetch' => true,
      'readonly' => true,
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'vname' => 'LBL_USER_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'mandatory_fetch' => true,
      'readonly' => true,
    ),
    'email_addresses' => 
    array (
      'name' => 'email_addresses',
      'relationship' => 'outbound_email_email_addresses',
      'source' => 'non-db',
      'type' => 'link',
      'vname' => 'LBL_EMAIL_ADDRESSES',
    ),
    'email_address_id' => 
    array (
      'name' => 'email_address_id',
      'duplicate_merge' => 'disabled',
      'id_name' => 'email_address_id',
      'link' => 'email_addresses',
      'massupdate' => false,
      'module' => 'EmailAddresses',
      'reportable' => false,
      'rname' => 'id',
      'table' => 'email_addresses',
      'type' => 'id',
      'vname' => 'LBL_EMAIL_ADDRESS_ID',
    ),
    'email_address' => 
    array (
      'name' => 'email_address',
      'id_name' => 'email_address_id',
      'link' => 'email_addresses',
      'module' => 'EmailAddresses',
      'required' => true,
      'rname' => 'email_address',
      'source' => 'non-db',
      'table' => 'email_addresses',
      'type' => 'relate',
      'vname' => 'LBL_EMAIL_ADDRESS',
    ),
    'reply_to_name' => 
    array (
      'name' => 'reply_to_name',
      'vname' => 'LBL_REPLY_TO_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'reportable' => false,
      'dependency' => 'not(equal($type, "system"))',
    ),
    'reply_to_email_addresses' => 
    array (
      'name' => 'reply_to_email_addresses',
      'relationship' => 'outbound_email_reply_to_email_addresses',
      'source' => 'non-db',
      'type' => 'link',
      'vname' => 'LBL_REPLY_TO_EMAIL_ADDRESSES',
    ),
    'reply_to_email_address_id' => 
    array (
      'name' => 'reply_to_email_address_id',
      'duplicate_merge' => 'disabled',
      'id_name' => 'reply_to_email_address_id',
      'link' => 'reply_to_email_addresses',
      'massupdate' => false,
      'module' => 'EmailAddresses',
      'reportable' => false,
      'rname' => 'id',
      'table' => 'email_addresses',
      'type' => 'id',
      'vname' => 'LBL_REPLY_TO_EMAIL_ADDRESS_ID',
    ),
    'reply_to_email_address' => 
    array (
      'name' => 'reply_to_email_address',
      'id_name' => 'reply_to_email_address_id',
      'link' => 'reply_to_email_addresses',
      'module' => 'EmailAddresses',
      'rname' => 'email_address',
      'source' => 'non-db',
      'table' => 'email_addresses',
      'type' => 'relate',
      'vname' => 'LBL_REPLY_TO_EMAIL_ADDRESS',
      'dependency' => 'not(equal($type, "system"))',
    ),
    'mail_sendtype' => 
    array (
      'name' => 'mail_sendtype',
      'vname' => 'LBL_MAIL_SENDTYPE',
      'type' => 'varchar',
      'len' => 8,
      'required' => true,
      'default' => 'SMTP',
      'reportable' => false,
    ),
    'mail_smtptype' => 
    array (
      'name' => 'mail_smtptype',
      'vname' => 'LBL_EMAIL_PROVIDER',
      'type' => 'enum',
      'options' => 'mail_smtptype_options',
      'len' => 20,
      'required' => true,
      'default' => 'other',
      'reportable' => false,
    ),
    'mail_smtpserver' => 
    array (
      'name' => 'mail_smtpserver',
      'vname' => 'LBL_MAIL_SMTPSERVER',
      'type' => 'varchar',
      'len' => 100,
      'required' => false,
      'reportable' => false,
      'mandatory_fetch' => true,
    ),
    'mail_smtpport' => 
    array (
      'name' => 'mail_smtpport',
      'vname' => 'LBL_MAIL_SMTPPORT',
      'type' => 'int',
      'len' => 5,
      'default' => 465,
      'reportable' => false,
      'disable_num_format' => true,
    ),
    'mail_smtpuser' => 
    array (
      'name' => 'mail_smtpuser',
      'vname' => 'LBL_MAIL_SMTPUSER',
      'type' => 'varchar',
      'len' => 100,
      'reportable' => false,
      'mandatory_fetch' => true,
    ),
    'mail_smtppass' => 
    array (
      'name' => 'mail_smtppass',
      'vname' => 'LBL_MAIL_SMTPPASS',
      'type' => 'encrypt',
      'len' => 100,
      'reportable' => false,
      'duplicate_on_record_copy' => 'no',
      'mandatory_fetch' => true,
    ),
    'mail_smtpauth_req' => 
    array (
      'name' => 'mail_smtpauth_req',
      'vname' => 'LBL_MAIL_SMTPAUTH_REQ',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
      'mandatory_fetch' => true,
    ),
    'mail_smtpssl' => 
    array (
      'name' => 'mail_smtpssl',
      'vname' => 'LBL_MAIL_SMTPSSL',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'email_settings_for_ssl',
      'len' => 1,
      'default' => 1,
      'reportable' => false,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'duplicate_on_record_copy' => 'no',
    ),
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
      'duplicate_on_record_copy' => 'always',
    ),
    'acl_team_set_id' => 
    array (
      'name' => 'acl_team_set_id',
      'vname' => 'LBL_TEAM_SET_SELECTED_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => false,
      'isnull' => true,
      'duplicate_on_record_copy' => 'always',
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => true,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'custom_type' => 'teamset',
      'studio' => 
      array (
        'portallistview' => false,
        'portalrecordview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
      'exportable' => true,
      'fields' => 
      array (
        0 => 'acl_team_set_id',
      ),
    ),
    'acl_team_names' => 
    array (
      'name' => 'acl_team_names',
      'table' => 'teams',
      'module' => 'Teams',
      'vname' => 'LBL_TEAM_SET_SELECTED_TEAMS',
      'rname' => 'name',
      'id_name' => 'acl_team_set_id',
      'source' => 'non-db',
      'link' => 'team_link',
      'type' => 'relate',
      'custom_type' => 'teamset',
      'exportable' => true,
      'studio' => false,
      'massupdate' => false,
      'hideacl' => true,
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'outboundemail_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
      'side' => 'right',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'outboundemail_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
      'side' => 'right',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'outboundemail_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
      'side' => 'left',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'outbound_email_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'oe_user_id_idx',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'user_id',
      ),
    ),
    'team_set_outbound_email' => 
    array (
      'name' => 'idx_outbound_email_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
        1 => 'deleted',
      ),
    ),
    'acl_team_set_outbound_email' => 
    array (
      'name' => 'idx_outbound_email_acl_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acl_team_set_id',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'outbound_email_email_addresses' => 
    array (
      'lhs_module' => 'EmailAddresses',
      'lhs_table' => 'email_addresses',
      'lhs_key' => 'id',
      'rhs_module' => 'OutboundEmail',
      'rhs_table' => 'outbound_email',
      'rhs_key' => 'email_address_id',
      'relationship_type' => 'one-to-many',
    ),
    'outbound_email_reply_to_email_addresses' => 
    array (
      'lhs_module' => 'EmailAddresses',
      'lhs_table' => 'email_addresses',
      'lhs_key' => 'id',
      'rhs_module' => 'OutboundEmail',
      'rhs_table' => 'outbound_email',
      'rhs_key' => 'reply_to_email_address_id',
      'relationship_type' => 'one-to-many',
    ),
    'outboundemail_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'OutboundEmail',
      'rhs_table' => 'outbound_email',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'outboundemail_teams' => 
    array (
      'lhs_module' => 'OutboundEmail',
      'lhs_table' => 'outbound_email',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'outboundemail_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'OutboundEmail',
      'rhs_table' => 'outbound_email',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'ignore_templates' => 
  array (
    0 => 'default',
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
  ),
  'custom_fields' => false,
  'has_pii_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);