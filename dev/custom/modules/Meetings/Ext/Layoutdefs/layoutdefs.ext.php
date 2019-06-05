<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Layoutdefs/exp_expenses_meetings_Meetings.php

 // created: 2019-05-25 13:53:53
$layout_defs["Meetings"]["subpanel_setup"]['exp_expenses_meetings'] = array (
  'order' => 100,
  'module' => 'Exp_Expenses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EXP_EXPENSES_MEETINGS_FROM_EXP_EXPENSES_TITLE',
  'get_subpanel_data' => 'exp_expenses_meetings',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>
