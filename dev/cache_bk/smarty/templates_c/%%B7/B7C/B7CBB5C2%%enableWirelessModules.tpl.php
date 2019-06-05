<?php /* Smarty version 2.6.11, created on 2019-05-25 17:22:18
         compiled from modules/Administration/templates/enableWirelessModules.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Administration/templates/enableWirelessModules.tpl', 13, false),array('function', 'sugar_csrf_form_token', 'modules/Administration/templates/enableWirelessModules.tpl', 16, false),array('function', 'sugar_translate', 'modules/Administration/templates/enableWirelessModules.tpl', 38, false),array('function', 'sugar_help', 'modules/Administration/templates/enableWirelessModules.tpl', 39, false),)), $this); ?>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/tabs.css'), $this);?>
"/>
<form name="enableWirelessModules" method="POST">
    <?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

	<input type="hidden" name="module" value="Administration">
	<input type="hidden" name="action" value="updateWirelessEnabledModules">
	<input type="hidden" name="enabled_modules" value="">
	
	<table border="0" cellspacing="1" cellpadding="1">
		<tr>
			<td>
			<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary" onclick="SUGAR.saveMobileSettings();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
			<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="document.enableWirelessModules.action.value='';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
			</td>
		</tr>
	</table>
	
	<div class='add_table' style='margin-bottom:5px'>
		<table id="enableWirelessModules" class="enableWirelessModules edit view" style='margin-bottom:0px;' border="0" cellspacing="0" cellpadding="0" width="25%">
			<tr>
			    <td colspan="2">
			        <table>
                    <?php if ($this->_tpl_vars['url']): ?>
                    <tr>
                        <td scope="row" nowrap="nowrap">
                            <?php echo smarty_function_sugar_translate(array('module' => 'Configurator','label' => 'LBL_WIRELESS_SERVER_URL'), $this);?>
:
                            <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_WIRELESS_URL_HELP']), $this);?>

                        </td>
                        </td>
                        <td>
                            <a href="<?php echo $this->_tpl_vars['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['url']; ?>
</a>
                        </td>
                    </tr>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" white-space="wrap" style="font-style: italic;"><span><?php echo smarty_function_sugar_translate(array('label' => 'LBL_WIRELESS_MODULES_ENABLE_DESC2'), $this);?>
</span></td>
            </tr>
            <tr>
                <td width='1%'>
                    <div id="enabled_div"></div>
                </td>
                <td>
                    <div id="disabled_div"></div>
                </td>
            </tr>
        </table>
    </div>

    <div  style="border: 1px solid gray; margin: 0 8px;">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="enableWirelessModules edit view" style="margin-bottom: 0;">
        <tr>
            <th align="left" scope="row" colspan="2">
                <h4><?php echo smarty_function_sugar_translate(array('module' => 'Administration','label' => 'LBL_OFFLINE_SETTINGS'), $this);?>
</h4>
            </th>
        </tr>
        <tr>
            <td scope="row" style="width: 50%">
                <label for="offline_enabled"><?php echo smarty_function_sugar_translate(array('module' => 'Administration','label' => 'LBL_OFFLINE_ENABLED'), $this);?>
</label>
            </td>
            <td>
                <input type='checkbox' id="offline_enabled" <?php if ($this->_tpl_vars['config']['offlineEnabled']): ?>checked<?php endif; ?> />
            </td>
        </tr>
    </table>
    </div>
	
	<table border="0" cellspacing="1" cellpadding="1">
		<tr>
			<td>
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button primary" onclick="SUGAR.saveMobileSettings();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" class="button" onclick="document.enableWirelessModules.action.value='';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
			</td>
		</tr>
	</table>
</form>

<script type="text/javascript">
(function(){
    var Connect = YAHOO.util.Connect;
	Connect.url = 'index.php';
    Connect.method = 'POST';
    Connect.timeout = 300000;

	var enabled_modules = <?php echo $this->_tpl_vars['enabled_modules']; ?>
;
	var disabled_modules = <?php echo $this->_tpl_vars['disabled_modules']; ?>
;
	var lblEnabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACTIVE_MODULES'), $this);?>
';
	var lblDisabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISABLED_MODULES'), $this);?>
';

	<?php echo '
	SUGAR.mobileEnabledTable = new YAHOO.SUGAR.DragDropTable(
		"enabled_div",
		[{key:"label",  label: lblEnabled, width: 200, sortable: false},
		 {key:"module", label: lblEnabled, hidden:true}],
		new YAHOO.util.LocalDataSource(enabled_modules, {
			responseSchema: {fields : [{key : "module"}, {key : "label"}]}
		}),  
		{height: "300px"}
	);
	SUGAR.mobileDisabledTable = new YAHOO.SUGAR.DragDropTable(
		"disabled_div",
		[{key:"label",  label: lblDisabled, width: 200, sortable: false},
		 {key:"module", label: lblDisabled, hidden:true}],
		new YAHOO.util.LocalDataSource(disabled_modules, {
			responseSchema: {fields : [{key : "module"}, {key : "label"}]}
		}),
		{height: "300px"}
	);
	SUGAR.mobileEnabledTable.disableEmptyRows = true;
	SUGAR.mobileDisabledTable.disableEmptyRows = true;
	SUGAR.mobileEnabledTable.addRow({module: "", label: ""});
	SUGAR.mobileDisabledTable.addRow({module: "", label: ""});
	SUGAR.mobileEnabledTable.render();
	SUGAR.mobileDisabledTable.render();
	
	SUGAR.saveMobileSettings = function()
	{
		var enabledTable = SUGAR.mobileEnabledTable;
		var modules = "";
		for(var i=0; i < enabledTable.getRecordSet().getLength(); i++){
			var data = enabledTable.getRecord(i).getData();
			if (data.module && data.module != \'\')
			    modules += "," + data.module;
		}
		modules = modules == "" ? modules : modules.substr(1);

        var urlParams = {
            module: "Administration",
            action: "updateWirelessEnabledModules",
            enabled_modules: modules,
            offlineEnabled: $(\'#offline_enabled\').is(\':checked\'),
            csrf_token: SUGAR.csrf.form_token 
        }
		
		ajaxStatus.showStatus(SUGAR.language.get(\'Administration\', \'LBL_SAVING\'));
		Connect.asyncRequest(
            Connect.method, 
            Connect.url, 
            {success: SUGAR.saveCallBack},
			SUGAR.util.paramsToUrl(urlParams) + "to_pdf=1"
        );
		
		return true;
	}
	SUGAR.saveCallBack = function(o)
	{
	   ajaxStatus.flashStatus(SUGAR.language.get(\'app_strings\', \'LBL_DONE\'));
        var response = YAHOO.lang.trim(o.responseText);
        if (response === "true") {
	       window.location.assign(\'index.php?module=Administration&action=index\');
	   } 
	   else 
	   {
           YAHOO.SUGAR.MessageBox.show({msg: response});
	   }
	}	
})();
'; ?>

</script>