<?php /* Smarty version 2.6.11, created on 2019-05-25 20:10:14
         compiled from modules/Calendar/tpls/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_csrf_form_token', 'modules/Calendar/tpls/form.tpl', 14, false),array('function', 'sugar_getjspath', 'modules/Calendar/tpls/form.tpl', 57, false),)), $this); ?>
<form id="CalendarEditView" name="CalendarEditView" method="POST">	
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

		
<input type="hidden" name="current_module" id="current_module" value="Meetings">
<input type="hidden" name="return_module" id="return_module" value = "Calendar">
<input type="hidden" name="record" id="record" value="">
<input type="hidden" name="full_form" value="">
<input type="hidden" name="user_invitees" id="user_invitees">
<input type="hidden" name="contact_invitees" id="contact_invitees">
<input type="hidden" name="lead_invitees" id="lead_invitees">
<input type="hidden" name="send_invites" id="send_invites">


<input type="hidden" name="edit_all_recurrences" id="edit_all_recurrences">
<input type="hidden" name="repeat_parent_id" id="repeat_parent_id">
<input type="hidden" name="repeat_type" id="repeat_type">
<input type="hidden" name="repeat_interval" id="repeat_interval">
<input type="hidden" name="repeat_count" id="repeat_count">
<input type="hidden" name="repeat_until" id="repeat_until">
<input type="hidden" name="repeat_dow" id="repeat_dow">

<div id="form_content">
	<input type="hidden" name="date_start" id="date_start" value="<?php echo $this->_tpl_vars['user_default_date_start']; ?>
">
	<input type="hidden" name="duration_hours" id="duration_hours">
	<input type="hidden" name="duration_minutes" id="duration_minutes">
</div>

</form>

<script type="text/javascript">
enableQS(false);
<?php echo '
function cal_isValidDuration(){ 
	form = document.getElementById(\'CalendarEditView\');
	if(typeof form.duration_hours == "undefined" || typeof form.duration_minutes == "undefined")
		return true;
	if(form.duration_hours.value + form.duration_minutes.value <= 0){
		alert(\'';  echo $this->_tpl_vars['MOD']['NOTICE_DURATION_TIME'];  echo '\'); 
		return false; 
	} 
	return true;
}
'; ?>

</script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/SugarFields/Fields/Datetimecombo/Datetimecombo.js'), $this);?>
"></script>