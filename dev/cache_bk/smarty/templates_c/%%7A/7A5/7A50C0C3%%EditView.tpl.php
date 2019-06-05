<?php /* Smarty version 2.6.11, created on 2019-05-24 19:23:26
         compiled from modules/Configurator/tpls/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_csrf_form_token', 'modules/Configurator/tpls/EditView.tpl', 26, false),array('function', 'sugar_help', 'modules/Configurator/tpls/EditView.tpl', 50, false),array('function', 'sugar_getimage', 'modules/Configurator/tpls/EditView.tpl', 468, false),)), $this); ?>
<?php echo '
<style>
    .company_logo_image_container {
        height: 24px;
        width: 180px;
    }
    #company_logo_image {
        max-height: 100%;
        max-width: 100%;
    }
</style>
'; ?>

<form name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

<input type='hidden' name='action' value='SaveConfig'/>
<input type='hidden' name='module' value='Configurator'/>
<span class='error'><?php echo $this->_tpl_vars['error']['main']; ?>
</span>
<table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
<tr>

	<td>
		<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" id="ConfigureSettings_save_button" type="submit"  name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
		<!-- &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  id="ConfigureSettings_restore_button"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " > -->
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
" id="ConfigureSettings_cancel_button"   onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " > </td>
	<td align="right" nowrap>
		<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php echo $this->_tpl_vars['APP']['NTC_REQUIRED']; ?>

	</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
	<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['DEFAULT_SYSTEM_SETTINGS']; ?>
</h4></th>
</tr>

	<tr>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['LIST_ENTRIES_PER_LISTVIEW']; ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['list_entries_per_listview_help']), $this);?>
</td>
		<td  >
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_page' name='list_max_entries_per_page' value='<?php echo $this->_tpl_vars['config']['list_max_entries_per_page']; ?>
'>
		</td>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['LIST_ENTRIES_PER_SUBPANEL']; ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['list_entries_per_subpanel_help']), $this);?>
</td>
		<td  >
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_subpanel' name='list_max_entries_per_subpanel' value='<?php echo $this->_tpl_vars['config']['list_max_entries_per_subpanel']; ?>
'>
		</td>
	</tr>
	<tr>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['DISPLAY_RESPONSE_TIME']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['calculate_response_time'] )): ?>
			<?php $this->assign('calculate_response_time_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('calculate_response_time_checked', ''); ?>
		<?php endif; ?>
		<td ><input type='hidden' name='calculate_response_time' value='false'><input name='calculate_response_time'  type="checkbox" value="true" <?php echo $this->_tpl_vars['calculate_response_time_checked']; ?>
></td>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_MODULE_FAVICON']; ?>
 &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MODULE_FAVICON_HELP']), $this);?>
 </td>
		<?php if (! empty ( $this->_tpl_vars['config']['default_module_favicon'] )): ?>
			<?php $this->assign('default_module_favicon', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('default_module_favicon', ''); ?>
		<?php endif; ?>
		<td >
			<input type='hidden' name='default_module_favicon' value='false'>
			<input name='default_module_favicon'  type="checkbox" value="true" <?php echo $this->_tpl_vars['default_module_favicon']; ?>
>
		</td>
	</tr>
	<tr>
		<td scope="row" width='15%' nowrap><?php echo $this->_tpl_vars['MOD']['SYSTEM_NAME']; ?>
 </td>
		<td width='35%'>
			<input type='text' name='system_name' value='<?php echo $this->_tpl_vars['settings']['system_name']; ?>
'>
		</td>


        <td  scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']), $this);?>
</td>
        <?php if (! empty ( $this->_tpl_vars['config']['use_real_names'] )): ?>
            <?php $this->assign('use_real_names', 'CHECKED'); ?>
        <?php else: ?>
            <?php $this->assign('use_real_names', ''); ?>
        <?php endif; ?>
        <td>
            <input type='hidden' name='use_real_names' value='false'>
            <input name='use_real_names'  type="checkbox" value="true" <?php echo $this->_tpl_vars['use_real_names']; ?>
>
        </td>
    </tr>
    <tr>
        <td  scope="row" width='12%' nowrap>
        <?php echo $this->_tpl_vars['MOD']['CURRENT_LOGO']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['CURRENT_LOGO_HELP']), $this);?>

        </td>
        <td width="35%">
            <div class="company_logo_image_container">
                <img id="company_logo_image" src="<?php echo $this->_tpl_vars['company_logo']; ?>
"
                     alt="<?php echo $this->_tpl_vars['mod_strings']['LBL_LOGO']; ?>
" />
            </div>
        </td>
        <td  scope="row"> <?php echo $this->_tpl_vars['MOD']['SHOW_DOWNLOADS_TAB']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['SHOW_DOWNLOADS_TAB_HELP']), $this);?>
 </td>
		<?php if (! isset ( $this->_tpl_vars['config']['show_download_tab'] ) || ! empty ( $this->_tpl_vars['config']['show_download_tab'] )): ?>
			<?php $this->assign('show_download_tab_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('show_download_tab_checked', ''); ?>
		<?php endif; ?>
		<td ><input type='hidden' name='show_download_tab' value='false'><input name='show_download_tab'  type="checkbox" value='true' <?php echo $this->_tpl_vars['show_download_tab_checked']; ?>
></td>
    </tr>
    <tr>
        <td  scope="row" width='12%' nowrap>
            <?php echo $this->_tpl_vars['MOD']['NEW_LOGO']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['NEW_LOGO_HELP_NO_SPACE']), $this);?>

        </td>
        <td  width='35%'>
            <div id="container_upload"></div>
            <input type='text' id='company_logo' name='company_logo' style="display:none;">
        </td>
    </tr>
    <tr>
        <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LEAD_CONV_OPTION']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LEAD_CONV_OPT_HELP']), $this);?>
</td>
        <td><select name="lead_conv_activity_opt"><?php echo $this->_tpl_vars['lead_conv_activities']; ?>
</select></td>
        <td scope="row"><?php echo $this->_tpl_vars['MOD']['COLLAPSE_SUBPANELS']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_COLLAPSE_SUBPANELS_DESC']), $this);?>
</td>
        <td>
            <?php if (! empty ( $this->_tpl_vars['config']['collapse_subpanels'] )): ?>
                <?php $this->assign('collapse_subpanels_checked', 'CHECKED'); ?>
            <?php else: ?>
                <?php $this->assign('collapse_subpanels_checked', ''); ?>
            <?php endif; ?>
            <input type='hidden' name='collapse_subpanels' value='false'>
            <input type='checkbox' name='collapse_subpanels' value='true' <?php echo $this->_tpl_vars['collapse_subpanels_checked']; ?>
>
        </td>
    </tr>
    <tr>
        <td  scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_ENABLE_ACTION_MENU']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ENABLE_ACTION_MENU_DESC']), $this);?>
</td>
    <?php if (isset ( $this->_tpl_vars['config']['enable_action_menu'] ) && $this->_tpl_vars['config']['enable_action_menu'] != 'true'): ?>
        <?php $this->assign('enable_action_menu', ''); ?>
        <?php else: ?>
        <?php $this->assign('enable_action_menu', 'CHECKED'); ?>
    <?php endif; ?>
        <td>
            <input type='hidden' name='enable_action_menu' value='false'>
            <input name='enable_action_menu'  type="checkbox" value="true" <?php echo $this->_tpl_vars['enable_action_menu']; ?>
>
        </td>

        <td  scope="row"><?php echo $this->_tpl_vars['MOD']['LOCK_SUBPANELS']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LOCK_SUBPANELS_DESC']), $this);?>
</td>
        <td  >
            <?php if (! empty ( $this->_tpl_vars['config']['lock_subpanels'] )): ?>
                <?php $this->assign('lock_subpanels_checked', 'CHECKED'); ?>
            <?php else: ?>
                <?php $this->assign('lock_subpanels_checked', ''); ?>
            <?php endif; ?>
            <input type='hidden' name='lock_subpanels' value='false'>
            <input type='checkbox' name='lock_subpanels' value='true' <?php echo $this->_tpl_vars['lock_subpanels_checked']; ?>
>
        </td>
    <tr>
        <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_ADDITIONAL_MARKETING_CONTENT']; ?>
: </td>
        <td>
            <?php if (! empty ( $this->_tpl_vars['config']['marketing_extras_enabled'] )): ?>
                <?php $this->assign('marketing_extras_enabled_checked', 'CHECKED'); ?>
            <?php else: ?>
                <?php $this->assign('marketing_extras_enabled_checked', ''); ?>
            <?php endif; ?>
            <input type="hidden" name="marketing_extras_enabled" value="false">
            <input type="checkbox" name="marketing_extras_enabled" value="true" <?php echo $this->_tpl_vars['marketing_extras_enabled_checked']; ?>
>
        </td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">

	<tr>
	<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_TITLE']; ?>
</h4></th>
	</tr>
	<tr>
	<td width="25%" scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_ON']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PROXY_ON_DESC']), $this);?>
</td>
		<?php if (! empty ( $this->_tpl_vars['settings']['proxy_on'] )): ?>
		<?php $this->assign('proxy_on_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('proxy_on_checked', ''); ?>
	<?php endif; ?>
	<td width="75%" align="left"  valign='middle' colspan='3'><input type='hidden' name='proxy_on' value='0'><input name="proxy_on" id="proxy_on" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['proxy_on_checked']; ?>
 onclick='toggleDisplay_2("proxy_config_display")'></td>
	</tr><tr>
	<td colspan="4">
	<div id="proxy_config_display" style='display:<?php echo $this->_tpl_vars['PROXY_CONFIG_DISPLAY']; ?>
'>
		<table width="100%" cellpadding="0" cellspacing="1"><tr>
		<td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_HOST']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td width="35%" ><input type="text" id="proxy_host" name="proxy_host" size="25"  value="<?php echo $this->_tpl_vars['settings']['proxy_host']; ?>
" tabindex='1' ></td>
		<td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_PORT']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td width="35%" ><input type="text" id="proxy_port" name="proxy_port" size="6"  value="<?php echo $this->_tpl_vars['settings']['proxy_port']; ?>
" tabindex='1' ></td>
		</tr><tr>
		<td width="15%" scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_AUTH']; ?>
</td>
	<?php if (! empty ( $this->_tpl_vars['settings']['proxy_auth'] )): ?>
		<?php $this->assign('proxy_auth_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('proxy_auth_checked', ''); ?>
	<?php endif; ?>
		<td width="35%" align="left"  valign='middle' ><input type='hidden' name='proxy_auth' value='0'><input id="proxy_auth" name="proxy_auth" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['proxy_auth_checked']; ?>
 onclick='toggleDisplay_2("proxy_auth_display")'> </td>
		</tr></table>

		<div id="proxy_auth_display" style='display:<?php echo $this->_tpl_vars['PROXY_AUTH_DISPLAY']; ?>
'>

		<table width="100%" cellpadding="0" cellspacing="1"><tr>
		<td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_USERNAME']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>

		<td width="35%" ><input type="text" id="proxy_username" name="proxy_username" size="25"  value="<?php echo $this->_tpl_vars['settings']['proxy_username']; ?>
" tabindex='1' ></td>
		<td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_PASSWORD']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td width="35%" ><input type="password" id="proxy_password" name="proxy_password" size="25"  value="<?php echo $this->_tpl_vars['settings']['proxy_password']; ?>
" tabindex='1' ></td>
		</tr></table>
		</div>
	</div>
  </td>
  </tr>
 </table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
	<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_SKYPEOUT_TITLE']; ?>
</h4></th>
	</tr>
	<tr>
	<td width="25%" scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_SKYPEOUT_ON']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SKYPEOUT_ON_DESC'],'WIDTH' => 400), $this);?>
</td>
	<?php if (! empty ( $this->_tpl_vars['settings']['system_skypeout_on'] )): ?>
		<?php $this->assign('system_skypeout_on_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('system_skypeout_on_checked', ''); ?>
	<?php endif; ?>
	<td width="75%" align="left"  valign='middle'><input type='hidden' name='system_skypeout_on' value='0'><input name="system_skypeout_on" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['system_skypeout_on_checked']; ?>
></td>
	</tr>
 </table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_TWEETTOCASE_TITLE']; ?>
</h4></th>
    </tr>
    <tr>
        <td width="25%" scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_TWEETTOCASE_ON']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_TWEETTOCASE_ON_DESC'],'WIDTH' => 400), $this);?>
</td>
        <?php if (! empty ( $this->_tpl_vars['settings']['system_tweettocase_on'] )): ?>
            <?php $this->assign('system_tweettocase_on_checked', 'CHECKED'); ?>
        <?php else: ?>
            <?php $this->assign('system_tweettocase_on_checked', ''); ?>
        <?php endif; ?>
        <td width="75%" align="left"  valign='middle'><input type='hidden' name='system_tweettocase_on' value='0'><input name="system_tweettocase_on" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['system_tweettocase_on_checked']; ?>
></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_SETTINGS']; ?>
</h4></th>
    </tr>
    <tr>
        <td width="25%" scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_EDIT']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PREVIEW_EDIT_HELP'],'WIDTH' => 400), $this);?>
</td>
        <?php if (! empty ( $this->_tpl_vars['config']['preview_edit'] )): ?>
            <?php $this->assign('preview_edit_checked', 'CHECKED'); ?>
        <?php else: ?>
            <?php $this->assign('preview_edit_checked', ''); ?>
        <?php endif; ?>
        <td width="75%" align="left"  valign='middle'>
            <input type='hidden' name='preview_edit' value='false'>
            <input name="preview_edit" value="true" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['preview_edit_checked']; ?>
>
        </td>
    </tr>
</table>

	<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
		<tr>
			<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_ACTIVITY_STREAMS_SETTINGS_TITLE']; ?>
</h4></th>
		</tr>
		<tr>
			<td width="25%" scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_ACTIVITY_STREAMS_SETTINGS_EDIT']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ACTIVITY_STREAMS_SETTINGS_EDIT_HELP'],'WIDTH' => 400), $this);?>
</td>
            <?php if (! empty ( $this->_tpl_vars['config']['activity_streams_enabled'] )): ?>
                <?php $this->assign('activity_streams_enabled_checked', 'CHECKED'); ?>
            <?php else: ?>
                <?php $this->assign('activity_streams_enabled_checked', ''); ?>
            <?php endif; ?>
			<td width="75%" align="left"  valign='middle'>
				<input type='hidden' name='activity_streams_enabled' value='false'>
				<input name="activity_streams_enabled" value="true" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['activity_streams_enabled_checked']; ?>
>
			</td>
		</tr>
	</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
        <!-- This heading is hard coded because it is NOT intended to be translatable or dynamic -->
        <th align="left" scope="row" colspan="4"><h4>SugarBPM<sup class="heading">TM</sup></h4></th>
	</tr>
	<tr>
		<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_AUTO_SAVE_INTERVAL']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_AUTO_SAVE_INTERVAL_HELP']), $this);?>
</td>
		<td><select name="processes_auto_save_interval"><?php echo $this->_tpl_vars['processes_auto_save_options']; ?>
</select></td>
		<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_SAVE']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_SAVE_HELP'],'WIDTH' => 400), $this);?>
</td>
	    <?php if (! empty ( $this->_tpl_vars['config']['processes_auto_validate_on_autosave'] )): ?>
	        <?php $this->assign('processes_auto_validate_on_autosave_checked', 'CHECKED'); ?>
	    <?php else: ?>
	        <?php $this->assign('processes_auto_validate_on_autosave_checked', ''); ?>
	    <?php endif; ?>
	    <td width="25%">
			<input type='hidden' name='processes_auto_validate_on_autosave' value='false'>
			<input name="processes_auto_validate_on_autosave" value="true" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['processes_auto_validate_on_autosave_checked']; ?>
>
		</td>
	</tr>
	<tr>
		<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_IMPORT']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_IMPORT_HELP'],'WIDTH' => 400), $this);?>
</td>
	    <?php if (! empty ( $this->_tpl_vars['config']['processes_auto_validate_on_import'] )): ?>
	        <?php $this->assign('processes_auto_validate_on_import_checked', 'CHECKED'); ?>
	    <?php else: ?>
	        <?php $this->assign('processes_auto_validate_on_import_checked', ''); ?>
	    <?php endif; ?>
	    <td width="25">
			<input type='hidden' name='processes_auto_validate_on_import' value='false'>
			<input name="processes_auto_validate_on_import" value="true" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['processes_auto_validate_on_import_checked']; ?>
>
		</td>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED_WORKFLOW_SETTINGS_CYCLES']; ?>
  <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td > <input name="error_number_of_cycles" value="<?php echo $this->_tpl_vars['config']['error_number_of_cycles']; ?>
"></td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_COMMENT_LOG_SETTINGS']; ?>
</h4></th>
	</tr>
	<tr>
		<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_COMMENT_LOG_MAX_CHARS']; ?>
</td>
		<td> <input name="commentlog_maxchars" value="<?php echo $this->_tpl_vars['config']['commentlog']['maxchars']; ?>
"></td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
	<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['ADVANCED']; ?>
</h4></th>
	</tr>
	<tr>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['VERIFY_CLIENT_IP']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['verify_client_ip'] )): ?>
			<?php $this->assign('verify_client_ip_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('verify_client_ip_checked', ''); ?>
		<?php endif; ?>
		<td  ><input type='hidden' name='verify_client_ip' value='false'><input name='verify_client_ip'  type="checkbox" value="1" <?php echo $this->_tpl_vars['verify_client_ip_checked']; ?>
></td>

		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['LOG_MEMORY_USAGE']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['log_memory_usage'] )): ?>
			<?php $this->assign('log_memory_usage_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('log_memory_usage_checked', ''); ?>
		<?php endif; ?>
		<td  ><input type='hidden' name='log_memory_usage' value='false'><input name='log_memory_usage'  type="checkbox" value='true' <?php echo $this->_tpl_vars['log_memory_usage_checked']; ?>
></td>

	</tr>
	<tr>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['LOG_SLOW_QUERIES']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['dump_slow_queries'] )): ?>
			<?php $this->assign('dump_slow_queries_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('dump_slow_queries_checked', ''); ?>
		<?php endif; ?>
		<td ><input type='hidden' name='dump_slow_queries' value='false'><input name='dump_slow_queries'  type="checkbox" value='true' <?php echo $this->_tpl_vars['dump_slow_queries_checked']; ?>
></td>

		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['SLOW_QUERY_TIME_MSEC']; ?>
: </td>
		<td  >
			<input type='text' size='5' name='slow_query_time_msec' value='<?php echo $this->_tpl_vars['config']['slow_query_time_msec']; ?>
'>
		</td>

	</tr>
	<tr>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['UPLOAD_MAX_SIZE']; ?>
: </td>
		<td  >
			<input type='text' size='8' name='upload_maxsize' value='<?php echo $this->_tpl_vars['config']['upload_maxsize']; ?>
'>&nbsp;<?php echo $this->_tpl_vars['MOD']['UPLOAD_MAXSIZE_UNITS']; ?>

		</td>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['STACK_TRACE_ERRORS']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['stack_trace_errors'] )): ?>
			<?php $this->assign('stack_trace_errors_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('stack_trace_errors_checked', ''); ?>
		<?php endif; ?>
		<td ><input type='hidden' name='stack_trace_errors' value='false'><input name='stack_trace_errors'  type="checkbox" value='true' <?php echo $this->_tpl_vars['stack_trace_errors_checked']; ?>
></td>



	</tr>

	<tr>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['SESSION_TIMEOUT']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SESSION_TIMEOUT_TOOLTIP']), $this);?>
</td>
		<td  >
			<input type='text' size='8' name='system_session_timeout' value='<?php echo $this->_tpl_vars['SESSION_TIMEOUT']; ?>
'>&nbsp;<?php echo $this->_tpl_vars['MOD']['SESSION_TIMEOUT_UNITS']; ?>

		</td>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['DEVELOPER_MODE']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['developerMode'] )): ?>
			<?php $this->assign('developerModeChecked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('developerModeChecked', ''); ?>
		<?php endif; ?>
		<td ><input type='hidden' name='developerMode' value='false'><input name='developerMode'  type="checkbox" value='true' <?php echo $this->_tpl_vars['developerModeChecked']; ?>
></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_VCAL_PERIOD']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['vCAL_HELP']), $this);?>
</td>
		<td >
			<input type='text' size='4' name='vcal_time' value='<?php echo $this->_tpl_vars['config']['vcal_time']; ?>
'>
		</td>
        <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_IMPORT_MAX_RECORDS']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_IMPORT_MAX_RECORDS_HELP']), $this);?>
</td>
		<td >
			<input type='text' size='4' name='import_max_records_total_limit' value='<?php echo $this->_tpl_vars['config']['import_max_records_total_limit']; ?>
'>
		</td>

	</tr>
    <tr>
        <td  scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_NO_PRIVATE_TEAM_UPDATE']; ?>
: </td>
        <?php if (! empty ( $this->_tpl_vars['config']['noPrivateTeamUpdate'] )): ?>
            <?php $this->assign('noPrivateTeamUpdateChecked', 'CHECKED'); ?>
        <?php else: ?>
            <?php $this->assign('noPrivateTeamUpdateChecked', ''); ?>
        <?php endif; ?>
        <td ><input type='hidden' name='noPrivateTeamUpdate' value='false'><input name='noPrivateTeamUpdate'  type="checkbox" value='true' <?php echo $this->_tpl_vars['noPrivateTeamUpdateChecked']; ?>
></td>
    </tr>




</table>

<table  width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<?php if ($this->_tpl_vars['logger_visible']): ?>
<tr>
<th align="left" scope="row" colspan="6"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER']; ?>
</h4></th>
</tr>
	<tr>
		<td  scope="row" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILENAME']; ?>
 <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td   valign='middle' ><input type='text' name = 'logger_file_name'  value="<?php echo $this->_tpl_vars['config']['logger']['file']['name']; ?>
"></td>
		<td  scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILE_EXTENSION']; ?>
 <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td ><input name ="logger_file_ext" type="text" size="5" value="<?php echo $this->_tpl_vars['config']['logger']['file']['ext']; ?>
"></td>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILENAME_SUFFIX']; ?>
</td>
		<td ><select name = "logger_file_suffix" selected='<?php echo $this->_tpl_vars['config']['logger']['file']['suffix']; ?>
'><?php echo $this->_tpl_vars['filename_suffix']; ?>
</select></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_MAX_LOG_SIZE']; ?>
  <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td > <input name="logger_file_maxSize" size="4" value="<?php echo $this->_tpl_vars['config']['logger']['file']['maxSize']; ?>
"></td>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_DEFAULT_DATE_FORMAT']; ?>
</td>
		<td  ><input name ="logger_file_dateFormat" type="text" value="<?php echo $this->_tpl_vars['config']['logger']['file']['dateFormat']; ?>
"></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_LOG_LEVEL']; ?>
 </td>
		<td > <select name="logger_level"><?php echo $this->_tpl_vars['log_levels']; ?>
</select></td>
		<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_MAX_LOGS']; ?>
  <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td > <input name="logger_file_maxLogs" value="<?php echo $this->_tpl_vars['config']['logger']['file']['maxLogs']; ?>
"></td>
	</tr>
<?php endif; ?>
	<tr>
	    <td><a href="index.php?module=Configurator&action=LogView" target="_blank"><?php echo $this->_tpl_vars['MOD']['LBL_LOGVIEW']; ?>
</a></td>
	</tr>
</table>


<div style="padding-top: 2px;">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary"  type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " class="button primary"/>
		<!-- &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
 " /> -->
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
</div>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>


</form>
<div id='upload_panel' style="display:none">
    <form id="upload_form" name="upload_form" method="POST" action='index.php' enctype="multipart/form-data">
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

        <input type="file" id="my_file_company" name="file_1" size="20" onchange="uploadCheck(false)"/>
        <?php echo smarty_function_sugar_getimage(array('name' => 'sqsWait','ext' => ".gif",'alt' => $this->_tpl_vars['mod_strings']['LBL_LOADING'],'other_attributes' => 'id="loading_img_company" style="display:none" '), $this);?>

    </form>
</div>
<?php echo '
<script type=\'text/javascript\'>
function init_logo(){
    document.getElementById(\'upload_panel\').style.display="inline";
    document.getElementById(\'upload_panel\').style.position="absolute";
    YAHOO.util.Dom.setX(\'upload_panel\', YAHOO.util.Dom.getX(\'container_upload\'));
    YAHOO.util.Dom.setY(\'upload_panel\', YAHOO.util.Dom.getY(\'container_upload\')-5);
}
$(function() {
    init_logo();
});
function toggleDisplay_2(div_string){
    toggleDisplay(div_string);
    init_logo();
}
 function uploadCheck(quotes){
    //AJAX call for checking the file size and comparing with php.ini settings.
    var callback = {
        upload:function(r) {
            eval("var file_type = " + r.responseText);
            var forQuotes = file_type[\'forQuotes\'];
            document.getElementById(\'loading_img_\'+forQuotes).style.display="none";
            bad_image = SUGAR.language.get(\'Configurator\',(forQuotes == \'quotes\')?\'LBL_ALERT_TYPE_JPEG\':\'LBL_ALERT_TYPE_IMAGE\');
            switch(file_type[\'data\']){
                case \'other\':
                    alert(bad_image);
                    document.getElementById(\'my_file_\' + forQuotes).value=\'\';
                    break;
                case \'size\':
                    alert(SUGAR.language.get(\'Configurator\',\'LBL_ALERT_SIZE_RATIO\'));
                    document.getElementById(forQuotes + "_logo").value=file_type[\'path\'];
                    document.getElementById(forQuotes + "_logo_image").src=file_type[\'url\'];
                    break;
                case \'file_error\':
                    alert(SUGAR.language.get(\'Configurator\',\'ERR_ALERT_FILE_UPLOAD\'));
                    document.getElementById(\'my_file_\' + forQuotes).value=\'\';
                    break;
                //File good
                case \'ok\':
                    document.getElementById(forQuotes + "_logo").value=file_type[\'path\'];
                    document.getElementById(forQuotes + "_logo_image").src=file_type[\'url\'];
                    break;
                //error in getimagesize because unsupported type
                default:
                   alert(bad_image);
                   document.getElementById(\'my_file_\' + forQuotes).value=\'\';
            }
        },
        failure:function(r){
            alert(SUGAR.language.get(\'app_strings\',\'LBL_AJAX_FAILURE\'));
        }
    }
    document.getElementById("company_logo").value=\'\';
    document.getElementById(\'loading_img_company\').style.display="inline";
    var file_name = document.getElementById(\'my_file_company\').value;
    postData = \'&entryPoint=UploadFileCheck&forQuotes=false&csrf_token=\' + SUGAR.csrf.form_token;
    YAHOO.util.Connect.setForm(document.getElementById(\'upload_form\'), true,true);
    if(file_name){
        if(postData.substring(0,1) == \'&\'){
            postData=postData.substring(1);
        }
        YAHOO.util.Connect.asyncRequest(\'POST\', \'index.php\', callback, postData);
    }
}
</script>
'; ?>
