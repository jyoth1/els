<?php /* Smarty version 2.6.11, created on 2019-05-25 11:30:20
         compiled from include/SugarFields/Fields/Bool/SearchView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Bool/SearchView.tpl', 17, false),)), $this); ?>
{*
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
*}
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval(<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => 'false'), $this);?>
) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval(<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => 'false'), $this);?>
) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" <?php if (! empty ( $this->_tpl_vars['tabindex'] )): ?> tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" <?php endif; ?>  <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>
