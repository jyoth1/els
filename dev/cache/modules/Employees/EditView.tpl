

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

<script type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"></script>
<script>
{literal}
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
{/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
{sugar_csrf_form_token}
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('Employees'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
{$PAGINATION}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" >
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_{$module}_Subpanel'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.employee_status.acl > 1 || ($showDetailData && $fields.employee_status.acl > 0)}
<td valign="top" id='employee_status_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.employee_status.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.employee_status.acl > 1 && $fields.employee_status.locked == false && $fields.employee_status.disabled == false}
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.employee_status.name}" 
id="{$fields.employee_status.name}" 
title=''      accesskey='7'   
>
{html_options options=$fields.employee_status.options selected=$fields.employee_status.value}
</select>
{else}
{assign var="field_options" value=$fields.employee_status.options }
{capture name="field_val"}{$fields.employee_status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.employee_status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.employee_status.name}" 
id="{$fields.employee_status.name}" 
title=''          accesskey='7'  
>
{html_options options=$fields.employee_status.options selected=$fields.employee_status.value}
</select>
<input
id="{$fields.employee_status.name}-input"
name="{$fields.employee_status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.employee_status.name}-image"></button><button type="button"
id="btn-clear-{$fields.employee_status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.employee_status.name}-input', '{$fields.employee_status.name}');sync_{$fields.employee_status.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.employee_status.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.employee_status.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.employee_status.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.employee_status.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.employee_status.name}{literal}");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.employee_status.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.employee_status.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.employee_status.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.employee_status.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.employee_status.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
{else}
{counter name="panelFieldCount"}


{if is_string($fields.employee_status.options)}
<input type="hidden" class="sugar_field" id="{$fields.employee_status.name}" value="{ $fields.employee_status.options }">
{ $fields.employee_status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.employee_status.name}" value="{ $fields.employee_status.value }">
{ $fields.employee_status.options[$fields.employee_status.value]}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.picture.acl > 1 || ($showDetailData && $fields.picture.acl > 0)}
<td valign="top" id='picture_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PICTURE_FILE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.picture.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.picture.acl > 1 && $fields.picture.locked == false && $fields.picture.disabled == false}
{counter name="panelFieldCount"}

{if empty($fields.picture.value)}
{assign var="value" value=$fields.picture.default_value }
{else}
{assign var="value" value=$fields.picture.value }
{/if}  
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="{$fields.picture.name}_duplicate" name="{$fields.picture.name}_duplicate" value="{$value}"/>
{/if}
<input 
type="file" id="{$fields.picture.name}" name="{$fields.picture.name}" 
title="" size="30" maxlength="255" value="" tabindex="0"
onchange="SUGAR.image.confirm_imagefile('{$fields.picture.name}');" 
class="imageUploader"
{if !empty($fields.picture.value)  }
style="display:none"
{/if}  />
{if empty($fields.picture.value) }
{else}
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_{$fields.picture.name}').src)">
<img
id="img_{$fields.picture.name}" 
name="img_{$fields.picture.name}" 	
src='index.php?entryPoint=download&id={$fields.picture.value}&type=SugarFieldImage&isTempFile=1'
style='
{if "" eq ""}
border: 0; 
{else}
border: 1px solid black; 
{/if}
{if "42" eq ""}
width: auto;
{else}
width: 42px;
{/if}
{if "42" eq ""}
height: auto;
{else}
height: 42px;
{/if}
{if empty($fields.picture.value)} 
visibility:hidden;
{/if}
'	
></a>
<img
id="bt_remove_{$fields.picture.name}" 
name="bt_remvoe_{$fields.picture.name}" 
alt="{sugar_translate label='LBL_REMOVE'}"
title="{sugar_translate label='LBL_REMOVE'}"
src="{sugar_getimagepath file='delete_inline.gif'}"
onclick="SUGAR.image.remove_upload_imagefile('{$fields.picture.name}');" 	
/>
<input 
id="remove_imagefile_{$fields.picture.name}" name="remove_imagefile_{$fields.picture.name}" 
type="hidden"  value="" />
{/if}
{else}
{counter name="panelFieldCount"}

<input type="hidden" class="sugar_field" id="{$fields.picture.name}" value="$fields.picture.value">
{if isset($displayParams.link)}
<a href=''>
{else}
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_{$fields.picture.name}').src)">
{/if}
<img
id="img_{$fields.picture.name}" 
name="img_{$fields.picture.name}" 
{if empty($fields.picture.value)}
src='' 	
{else}
src='index.php?entryPoint=download&id={$fields.picture.value}&type=SugarFieldImage&isTempFile=1'
{/if}
style='
{if empty($fields.picture.value)}
display:	none;
{/if}
{if "" eq ""}
border: 0; 
{else}
border: 1px solid black; 
{/if}
{if "42" eq ""}
width: auto;
{else}
width: 42px;
{/if}
{if "42" eq ""}
height: auto;
{else}
height: 42px;
{/if}
'		
>
</a>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.first_name.acl > 1 || ($showDetailData && $fields.first_name.acl > 0)}
<td valign="top" id='first_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.first_name.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.first_name.acl > 1 && $fields.first_name.locked == false && $fields.first_name.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input type='text' name='{$fields.first_name.name}' 
id='{$fields.first_name.name}' size='30' 
maxlength='30' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if} 
<span class="sugar_field" id="{$fields.first_name.name}">{$fields.first_name.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.last_name.acl > 1 || ($showDetailData && $fields.last_name.acl > 0)}
<td valign="top" id='last_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.last_name.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.last_name.acl > 1 && $fields.last_name.locked == false && $fields.last_name.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input type='text' name='{$fields.last_name.name}' 
id='{$fields.last_name.name}' size='30' 
maxlength='30' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if} 
<span class="sugar_field" id="{$fields.last_name.name}">{$fields.last_name.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.title.acl > 1 || ($showDetailData && $fields.title.acl > 0)}
<td valign="top" id='title_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.title.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.title.acl > 1 && $fields.title.locked == false && $fields.title.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if}  
<input type='text' name='{$fields.title.name}' 
id='{$fields.title.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if} 
<span class="sugar_field" id="{$fields.title.name}">{$fields.title.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.phone_work.acl > 1 || ($showDetailData && $fields.phone_work.acl > 0)}
<td valign="top" id='phone_work_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.phone_work.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.phone_work.acl > 1 && $fields.phone_work.locked == false && $fields.phone_work.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
{else}
{counter name="panelFieldCount"}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.department.acl > 1 || ($showDetailData && $fields.department.acl > 0)}
<td valign="top" id='department_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTMENT' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.department.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.department.acl > 1 && $fields.department.locked == false && $fields.department.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if}  
<input type='text' name='{$fields.department.name}' 
id='{$fields.department.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if} 
<span class="sugar_field" id="{$fields.department.name}">{$fields.department.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.phone_mobile.acl > 1 || ($showDetailData && $fields.phone_mobile.acl > 0)}
<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.phone_mobile.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.phone_mobile.acl > 1 && $fields.phone_mobile.locked == false && $fields.phone_mobile.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  
<input type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
{else}
{counter name="panelFieldCount"}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.reports_to_name.acl > 1 || ($showDetailData && $fields.reports_to_name.acl > 0)}
<td valign="top" id='reports_to_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.reports_to_name.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.reports_to_name.acl > 1 && $fields.reports_to_name.locked == false && $fields.reports_to_name.disabled == false}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.reports_to_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name}" size="" value="{$fields.reports_to_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.reports_to_name.id_name}" 
id="{$fields.reports_to_name.id_name}" 
value="{$fields.reports_to_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.reports_to_name.name}" id="btn_{$fields.reports_to_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.reports_to_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.reports_to_name.name}" id="btn_clr_{$fields.reports_to_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.reports_to_name.name}', '{$fields.reports_to_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.reports_to_name.name}']) != 'undefined'",
		enableQS
);
</script>
{else}
{counter name="panelFieldCount"}

<span id="reports_to_id" class="sugar_field" data-id-value="{$fields.reports_to_id.value}">{$fields.reports_to_name.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.phone_other.acl > 1 || ($showDetailData && $fields.phone_other.acl > 0)}
<td valign="top" id='phone_other_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_OTHER_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.phone_other.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.phone_other.acl > 1 && $fields.phone_other.locked == false && $fields.phone_other.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.phone_other.value) <= 0}
{assign var="value" value=$fields.phone_other.default_value }
{else}
{assign var="value" value=$fields.phone_other.value }
{/if}  
<input type='text' name='{$fields.phone_other.name}' id='{$fields.phone_other.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
{else}
{counter name="panelFieldCount"}

{if !empty($fields.phone_other.value)}
{assign var="phone_value" value=$fields.phone_other.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</td>
{if $fields.phone_fax.acl > 1 || ($showDetailData && $fields.phone_fax.acl > 0)}
<td valign="top" id='phone_fax_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.phone_fax.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.phone_fax.acl > 1 && $fields.phone_fax.locked == false && $fields.phone_fax.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  
<input type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
{else}
{counter name="panelFieldCount"}

{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</td>
{if $fields.phone_home.acl > 1 || ($showDetailData && $fields.phone_home.acl > 0)}
<td valign="top" id='phone_home_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.phone_home.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.phone_home.acl > 1 && $fields.phone_home.locked == false && $fields.phone_home.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.phone_home.value) <= 0}
{assign var="value" value=$fields.phone_home.default_value }
{else}
{assign var="value" value=$fields.phone_home.value }
{/if}  
<input type='text' name='{$fields.phone_home.name}' id='{$fields.phone_home.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
{else}
{counter name="panelFieldCount"}

{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.messenger_type.acl > 1 || ($showDetailData && $fields.messenger_type.acl > 0)}
<td valign="top" id='messenger_type_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_TYPE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.messenger_type.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.messenger_type.acl > 1 && $fields.messenger_type.locked == false && $fields.messenger_type.disabled == false}
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.messenger_type.name}" 
id="{$fields.messenger_type.name}" 
title=''       
>
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
</select>
{else}
{assign var="field_options" value=$fields.messenger_type.options }
{capture name="field_val"}{$fields.messenger_type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.messenger_type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.messenger_type.name}" 
id="{$fields.messenger_type.name}" 
title=''          
>
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
</select>
<input
id="{$fields.messenger_type.name}-input"
name="{$fields.messenger_type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.messenger_type.name}-image"></button><button type="button"
id="btn-clear-{$fields.messenger_type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.messenger_type.name}-input', '{$fields.messenger_type.name}');sync_{$fields.messenger_type.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.messenger_type.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.messenger_type.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.messenger_type.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.messenger_type.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.messenger_type.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.messenger_type.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
{else}
{counter name="panelFieldCount"}


{if is_string($fields.messenger_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{ $fields.messenger_type.options }">
{ $fields.messenger_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{ $fields.messenger_type.value }">
{ $fields.messenger_type.options[$fields.messenger_type.value]}
{/if}
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.messenger_id.acl > 1 || ($showDetailData && $fields.messenger_id.acl > 0)}
<td valign="top" id='messenger_id_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_ID' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.messenger_id.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.messenger_id.acl > 1 && $fields.messenger_id.locked == false && $fields.messenger_id.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if}  
<input type='text' name='{$fields.messenger_id.name}' 
id='{$fields.messenger_id.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if} 
<span class="sugar_field" id="{$fields.messenger_id.name}">{$fields.messenger_id.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.description.acl > 1 || ($showDetailData && $fields.description.acl > 0)}
<td valign="top" id='description_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTES' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.description.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.description.acl > 1 && $fields.description.locked == false && $fields.description.disabled == false}
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="4" 
cols="60" 
title='' tabindex="0" 
 >{$value}</textarea>
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.address_street.acl > 1 || ($showDetailData && $fields.address_street.acl > 0)}
<td valign="top" id='address_street_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.address_street.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.address_street.acl > 1 && $fields.address_street.locked == false && $fields.address_street.disabled == false}
{counter name="panelFieldCount"}

{if empty($fields.address_street.value)}
{assign var="value" value=$fields.address_street.default_value }
{else}
{assign var="value" value=$fields.address_street.value }
{/if}  
<textarea  id='{$fields.address_street.name}' name='{$fields.address_street.name}'
rows="2" 
cols="30" 
title='' tabindex="0" 
 >{$value}</textarea>
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.address_street.name|escape:'html'|url2html|nl2br}">{$fields.address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.address_city.acl > 1 || ($showDetailData && $fields.address_city.acl > 0)}
<td valign="top" id='address_city_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CITY' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.address_city.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.address_city.acl > 1 && $fields.address_city.locked == false && $fields.address_city.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if}  
<input type='text' name='{$fields.address_city.name}' 
id='{$fields.address_city.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if} 
<span class="sugar_field" id="{$fields.address_city.name}">{$fields.address_city.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.address_state.acl > 1 || ($showDetailData && $fields.address_state.acl > 0)}
<td valign="top" id='address_state_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_STATE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.address_state.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.address_state.acl > 1 && $fields.address_state.locked == false && $fields.address_state.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if}  
<input type='text' name='{$fields.address_state.name}' 
id='{$fields.address_state.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if} 
<span class="sugar_field" id="{$fields.address_state.name}">{$fields.address_state.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.address_postalcode.acl > 1 || ($showDetailData && $fields.address_postalcode.acl > 0)}
<td valign="top" id='address_postalcode_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_POSTAL_CODE' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.address_postalcode.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.address_postalcode.acl > 1 && $fields.address_postalcode.locked == false && $fields.address_postalcode.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if}  
<input type='text' name='{$fields.address_postalcode.name}' 
id='{$fields.address_postalcode.name}' size='30' 
maxlength='20' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if} 
<span class="sugar_field" id="{$fields.address_postalcode.name}">{$fields.address_postalcode.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.address_country.acl > 1 || ($showDetailData && $fields.address_country.acl > 0)}
<td valign="top" id='address_country_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_COUNTRY' module='Employees'}{/capture}
{$label|strip_semicolon}:
{if $fields.address_country.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.address_country.acl > 1 && $fields.address_country.locked == false && $fields.address_country.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if}  
<input type='text' name='{$fields.address_country.name}' 
id='{$fields.address_country.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if} 
<span class="sugar_field" id="{$fields.address_country.name}">{$fields.address_country.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.email.acl > 1 || ($showDetailData && $fields.email.acl > 0)}
<td valign="top" id='email_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Employees'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.email.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.email.acl > 1 && $fields.email.locked == false && $fields.email.disabled == false}
{counter name="panelFieldCount"}
<span id='email_span'>
{$fields.email.value}</span>
{else}
{counter name="panelFieldCount"}
<span id='email_span'>
{$fields.email.value}
</span>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('Employees'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>{*
TODO REMOVE THIS CODE
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};

// bug 55468 -- IE is too aggressive with onUnload event
if (SUGAR.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}

</script>
*}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'user_name', 'username', true,'{/literal}{sugar_translate label='LBL_USER_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'user_hash', 'password', false,'{/literal}{sugar_translate label='LBL_USER_HASH' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'system_generated_password', 'bool', true,'{/literal}{sugar_translate label='LBL_SYSTEM_GENERATED_PASSWORD' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'pwd_last_changed_date', 'date', false,'Password Last Changed' );
addToValidate('EditView', 'authenticate_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_AUTHENTICATE_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'sugar_login', 'bool', false,'{/literal}{sugar_translate label='LBL_SUGAR_LOGIN' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'picture', 'image', false,'{/literal}{sugar_translate label='LBL_PICTURE_FILE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'first_name', 'name', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'last_name', 'name', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'full_name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'is_admin', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_ADMIN' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'external_auth_only', 'bool', false,'{/literal}{sugar_translate label='LBL_EXT_AUTHENTICATE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'receive_notifications', 'bool', false,'{/literal}{sugar_translate label='LBL_RECEIVE_NOTIFICATIONS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'last_login_date', 'date', false,'last login' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_WORK_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_street', 'text', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STREET' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_CITY' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STATE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_COUNTRY' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'UserType', 'enum', false,'{/literal}{sugar_translate label='LBL_USER_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'default_team', 'id', false,'{/literal}{sugar_translate label='LBL_DEFAULT_TEAM' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'team_id', 'id', false,'{/literal}{sugar_translate label='LBL_DEFAULT_TEAM' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'acl_team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_SELECTED_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'team_count', 'relate', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'team_name', 'teamset', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'portal_only', 'bool', false,'{/literal}{sugar_translate label='LBL_PORTAL_ONLY_USER' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'show_on_employees', 'bool', false,'{/literal}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'employee_status', 'enum', false,'{/literal}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_MESSENGER_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_type', 'enum', false,'{/literal}{sugar_translate label='LBL_MESSENGER_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', true,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'email', 'email', true,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'email_link_type', 'enum', false,'{/literal}{sugar_translate label='LBL_EMAIL_LINK_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'is_group', 'bool', false,'{/literal}{sugar_translate label='LBL_GROUP_USER' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_calls', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_meetings', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'preferred_language', 'enum', false,'{/literal}{sugar_translate label='LBL_PREFERRED_LANGUAGE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'site_user_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_SITE_USER_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'sv_site_visits_users_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'sv_site_visits_users_1sv_site_visits_ida', 'id', false,'{/literal}{sugar_translate label='LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE_ID' module='Employees' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Employees' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Employees' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'reports_to_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Employees' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees' for_js=true}{literal}', 'reports_to_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_reports_to_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"employees_created_by","module":"Users","id_name":"created_by"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"},"sv_site_visits_users_1":{"relationship":"sv_site_visits_users_1","module":"SV_Site_Visits","id_name":"sv_site_visits_users_1sv_site_visits_ida"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
