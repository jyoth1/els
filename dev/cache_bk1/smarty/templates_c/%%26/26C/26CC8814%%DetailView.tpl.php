<?php /* Smarty version 2.6.11, created on 2019-05-27 09:07:34
         compiled from include/SugarFields/Fields/Currency/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Currency/DetailView.tpl', 13, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Currency/DetailView.tpl', 17, false),)), $this); ?>
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
<span id='<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
'>
{sugar_number_format var=<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => 'false'), $this);?>
 }
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>