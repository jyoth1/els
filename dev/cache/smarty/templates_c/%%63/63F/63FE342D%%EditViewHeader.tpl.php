<?php /* Smarty version 2.6.11, created on 2019-05-29 15:29:11
         compiled from modules/Employees/tpls/EditViewHeader.tpl */ ?>
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
<script type="text/javascript">
    {if $SHOW_NON_EDITABLE_FIELDS_ALERT}
    {literal}
    app.alert.show('non_editable_employee_fields', {
        level: 'info',
        messages: '{/literal}{$NON_EDITABLE_FIELDS_MSG}{literal}',
        autoClose: false
    });
    {/literal}
    {/if}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/EditView/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>