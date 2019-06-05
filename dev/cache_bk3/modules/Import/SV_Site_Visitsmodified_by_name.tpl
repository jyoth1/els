
    <input type="text" name="default_value_modified_by_name" class="sqsEnabled" tabindex="1" id="default_value_modified_by_name" size="" value="{$fields.modified_by_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="default_value_{$fields.modified_by_name.id_name}" 
	id="default_value_{$fields.modified_by_name.id_name}" 
	value="{$fields.modified_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_default_value_modified_by_name" id="btn_default_value_modified_by_name" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
    "{$fields.modified_by_name.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"importstep3","field_to_name_array":{"id":"default_value_modified_user_id","full_name":"default_value_modified_by_name"}}{/literal}, 
	"single", 
	true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_default_value_modified_by_name" id="btn_clr_default_value_modified_by_name" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, 'default_value_modified_by_name', 'default_value_modified_by_name_{$fields.modified_by_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_default_value_modified_by_name']) != 'undefined'",
		enableQS
);
</script>