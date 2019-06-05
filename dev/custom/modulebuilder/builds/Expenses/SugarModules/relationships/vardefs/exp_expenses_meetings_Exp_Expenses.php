<?php
// created: 2019-05-25 13:53:53
$dictionary["Exp_Expenses"]["fields"]["exp_expenses_meetings"] = array (
  'name' => 'exp_expenses_meetings',
  'type' => 'link',
  'relationship' => 'exp_expenses_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'side' => 'right',
  'vname' => 'LBL_EXP_EXPENSES_MEETINGS_FROM_EXP_EXPENSES_TITLE',
  'id_name' => 'exp_expenses_meetingsmeetings_ida',
  'link-type' => 'one',
);
$dictionary["Exp_Expenses"]["fields"]["exp_expenses_meetings_name"] = array (
  'name' => 'exp_expenses_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EXP_EXPENSES_MEETINGS_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'exp_expenses_meetingsmeetings_ida',
  'link' => 'exp_expenses_meetings',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["Exp_Expenses"]["fields"]["exp_expenses_meetingsmeetings_ida"] = array (
  'name' => 'exp_expenses_meetingsmeetings_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_EXP_EXPENSES_MEETINGS_FROM_EXP_EXPENSES_TITLE_ID',
  'id_name' => 'exp_expenses_meetingsmeetings_ida',
  'link' => 'exp_expenses_meetings',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
