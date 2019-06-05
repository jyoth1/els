<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsmodified_by_name.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/Import/SV_Site_Visitsmodified_by_name.tpl', 7, false),array('function', 'sugar_getimagepath', 'cache/modules/Import/SV_Site_Visitsmodified_by_name.tpl', 18, false),)), $this); ?>

    <input type="text" name="default_value_modified_by_name" class="sqsEnabled" tabindex="1" id="default_value_modified_by_name" size="" value="<?php echo $this->_tpl_vars['fields']['modified_by_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="default_value_<?php echo $this->_tpl_vars['fields']['modified_by_name']['id_name']; ?>
" 
	id="default_value_<?php echo $this->_tpl_vars['fields']['modified_by_name']['id_name']; ?>
" 
	value="<?php echo $this->_tpl_vars['fields']['modified_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_default_value_modified_by_name" id="btn_default_value_modified_by_name" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
    "<?php echo $this->_tpl_vars['fields']['modified_by_name']['module']; ?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	<?php echo '{"call_back_function":"set_return","form_name":"importstep3","field_to_name_array":{"id":"default_value_modified_user_id","full_name":"default_value_modified_by_name"}}'; ?>
, 
	"single", 
	true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_default_value_modified_by_name" id="btn_clr_default_value_modified_by_name" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, 'default_value_modified_by_name', 'default_value_modified_by_name_<?php echo $this->_tpl_vars['fields']['modified_by_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_default_value_modified_by_name']) != 'undefined'",
		enableQS
);
</script>