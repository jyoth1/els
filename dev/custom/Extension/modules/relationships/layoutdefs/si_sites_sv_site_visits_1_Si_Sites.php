<?php
 // created: 2019-05-29 11:22:16
$layout_defs["Si_Sites"]["subpanel_setup"]['si_sites_sv_site_visits_1'] = array (
  'order' => 100,
  'module' => 'SV_Site_Visits',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SI_SITES_SV_SITE_VISITS_1_FROM_SV_SITE_VISITS_TITLE',
  'get_subpanel_data' => 'si_sites_sv_site_visits_1',
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
