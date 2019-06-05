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
/*********************************************************************************
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$module_name = 'SV_Site_Visits';
$_object_name = 'sv_site_visits';
$viewdefs[$module_name]['DetailView'] = array(
'templateMeta' => array('maxColumns' => '2',
                        'form' => array(),
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                        ),
'panels' =>array (

  array (

    array (
      'name' => 'document_name',
      'label' => 'LBL_DOC_NAME',
    ),
     array (
      'name' => 'uploadfile',
      'displayParams' => array('link'=>'uploadfile', 'id'=>'id'),
    ),


  ),
  array (
      'category_id',
      'subcategory_id',
  ),

  array (

	  'status',

  ),
  array (
      'active_date',
      'exp_date',
  ),

  array (
	  'team_name',
    array('name'=>'assigned_user_name', 'label'=>'LBL_ASSIGNED_TO'),
  ),

  array (

    array (
      'name' => 'description',
      'label' => 'LBL_DOC_DESCRIPTION',
    ),
  ),

)
);

