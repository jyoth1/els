

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
<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('Campaigns'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
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
<div id="detailpanel_1" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_CAMPAIGN_INFORMATION' module='Campaigns'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_CAMPAIGN_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.name.acl > 1 || ($showDetailData && $fields.name.acl > 0)}
<td valign="top" id='name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.name.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.name.acl > 1 && $fields.name.locked == false && $fields.name.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      accesskey='7'  >
{else}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.status.acl > 1 || ($showDetailData && $fields.status.acl > 0)}
<td valign="top" id='status_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.status.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.status.acl > 1 && $fields.status.locked == false && $fields.status.disabled == false}
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''       
>
{html_options options=$fields.status.options selected=$fields.status.value}
</select>
{else}
{assign var="field_options" value=$fields.status.options }
{capture name="field_val"}{$fields.status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''          
>
{html_options options=$fields.status.options selected=$fields.status.value}
</select>
<input
id="{$fields.status.name}-input"
name="{$fields.status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status.name}-image"></button><button type="button"
id="btn-clear-{$fields.status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.status.name}-input', '{$fields.status.name}');sync_{$fields.status.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
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
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
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
sync_{/literal}{$fields.status.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.status.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.status.name}{literal}", syncFromHiddenToWidget);
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
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
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


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
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
{if $fields.start_date.acl > 1 || ($showDetailData && $fields.start_date.acl > 0)}
<td valign="top" id='start_date_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_START_DATE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.start_date.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.start_date.acl > 1 && $fields.start_date.locked == false && $fields.start_date.disabled == false}
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.start_date.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.start_date.name}" id="{$fields.start_date.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.start_date.name}_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.start_date.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.start_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
{else}
{counter name="panelFieldCount"}


{if strlen($fields.start_date.value) <= 0}
{assign var="value" value=$fields.start_date.default_value }
{else}
{assign var="value" value=$fields.start_date.value }
{/if}
<span class="sugar_field" id="{$fields.start_date.name}">{$value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.campaign_type.acl > 1 || ($showDetailData && $fields.campaign_type.acl > 0)}
<td valign="top" id='campaign_type_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.campaign_type.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.campaign_type.acl > 1 && $fields.campaign_type.locked == false && $fields.campaign_type.disabled == false}
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.campaign_type.name}" 
id="{$fields.campaign_type.name}" 
title=''       
onchange="type_change();">
{html_options options=$fields.campaign_type.options selected=$fields.campaign_type.value}
</select>
{else}
{assign var="field_options" value=$fields.campaign_type.options }
{capture name="field_val"}{$fields.campaign_type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.campaign_type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.campaign_type.name}" 
id="{$fields.campaign_type.name}" 
title=''          
onchange="type_change();">
{html_options options=$fields.campaign_type.options selected=$fields.campaign_type.value}
</select>
<input
id="{$fields.campaign_type.name}-input"
name="{$fields.campaign_type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.campaign_type.name}-image"></button><button type="button"
id="btn-clear-{$fields.campaign_type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.campaign_type.name}-input', '{$fields.campaign_type.name}');sync_{$fields.campaign_type.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.campaign_type.name}{literal}");
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
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.campaign_type.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.campaign_type.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.campaign_type.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.campaign_type.name}{literal}");
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
sync_{/literal}{$fields.campaign_type.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.campaign_type.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.campaign_type.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.campaign_type.name}{literal}", syncFromHiddenToWidget);
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
var selectElem = document.getElementById("{/literal}{$fields.campaign_type.name}{literal}");
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


{if is_string($fields.campaign_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.campaign_type.name}" value="{ $fields.campaign_type.options }">
{ $fields.campaign_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.campaign_type.name}" value="{ $fields.campaign_type.value }">
{ $fields.campaign_type.options[$fields.campaign_type.value]}
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
{if $fields.end_date.acl > 1 || ($showDetailData && $fields.end_date.acl > 0)}
<td valign="top" id='end_date_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_END_DATE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.end_date.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.end_date.acl > 1 && $fields.end_date.locked == false && $fields.end_date.disabled == false}
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.end_date.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.end_date.name}" id="{$fields.end_date.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.end_date.name}_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.end_date.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.end_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
{else}
{counter name="panelFieldCount"}


{if strlen($fields.end_date.value) <= 0}
{assign var="value" value=$fields.end_date.default_value }
{else}
{assign var="value" value=$fields.end_date.value }
{/if}
<span class="sugar_field" id="{$fields.end_date.name}">{$value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.frequency.acl > 1 || ($showDetailData && $fields.frequency.acl > 0)}
<td valign="top" id='frequency_label' width='12.5%' scope="col">
<label for="frequency"><div style='none' id='freq_label'>{$MOD.LBL_CAMPAIGN_FREQUENCY}</div></label>
{if $fields.frequency.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.frequency.acl > 1 && $fields.frequency.locked == false && $fields.frequency.disabled == false}
{counter name="panelFieldCount"}
<div style='none' id='freq_field'>{html_options name="frequency" options=$fields.frequency.options selected=$fields.frequency.value}</div></TD>
{else}
</td>
<td></td><td></td>
</td>		
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
{if $fields.currency_id.acl > 1 || ($showDetailData && $fields.currency_id.acl > 0)}
<td valign="top" id='currency_id_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CURRENCY_ID' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.currency_id.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.currency_id.acl > 1 && $fields.currency_id.locked == false && $fields.currency_id.disabled == false}
{counter name="panelFieldCount"}
<span id='currency_id_span'>
{$fields.currency_id.value}</span>
{else}
{counter name="panelFieldCount"}
<span id='currency_id_span'>
{$fields.currency_id.value}
</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.impressions.acl > 1 || ($showDetailData && $fields.impressions.acl > 0)}
<td valign="top" id='impressions_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_IMPRESSIONS' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.impressions.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.impressions.acl > 1 && $fields.impressions.locked == false && $fields.impressions.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.impressions.value) <= 0}
{assign var="value" value=$fields.impressions.default_value }
{else}
{assign var="value" value=$fields.impressions.value }
{/if}  
<input type='text' name='{$fields.impressions.name}' 
id='{$fields.impressions.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.impressions.name}">
{sugar_number_format precision=0 var=$fields.impressions.value}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.budget.acl > 1 || ($showDetailData && $fields.budget.acl > 0)}
<td valign="top" id='budget_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_BUDGET' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.budget.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.budget.acl > 1 && $fields.budget.locked == false && $fields.budget.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.budget.value) <= 0}
{assign var="value" value=$fields.budget.default_value }
{else}
{assign var="value" value=$fields.budget.value }
{/if}  
<input type='text' name='{$fields.budget.name}' 
id='{$fields.budget.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='0'
>
{else}
{counter name="panelFieldCount"}

<span id='{$fields.budget.name}'>
{sugar_number_format var=$fields.budget.value }
</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.expected_cost.acl > 1 || ($showDetailData && $fields.expected_cost.acl > 0)}
<td valign="top" id='expected_cost_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_COST' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.expected_cost.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.expected_cost.acl > 1 && $fields.expected_cost.locked == false && $fields.expected_cost.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.expected_cost.value) <= 0}
{assign var="value" value=$fields.expected_cost.default_value }
{else}
{assign var="value" value=$fields.expected_cost.value }
{/if}  
<input type='text' name='{$fields.expected_cost.name}' 
id='{$fields.expected_cost.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='0'
>
{else}
{counter name="panelFieldCount"}

<span id='{$fields.expected_cost.name}'>
{sugar_number_format var=$fields.expected_cost.value }
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.actual_cost.acl > 1 || ($showDetailData && $fields.actual_cost.acl > 0)}
<td valign="top" id='actual_cost_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_ACTUAL_COST' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.actual_cost.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.actual_cost.acl > 1 && $fields.actual_cost.locked == false && $fields.actual_cost.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.actual_cost.value) <= 0}
{assign var="value" value=$fields.actual_cost.default_value }
{else}
{assign var="value" value=$fields.actual_cost.value }
{/if}  
<input type='text' name='{$fields.actual_cost.name}' 
id='{$fields.actual_cost.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='0'
>
{else}
{counter name="panelFieldCount"}

<span id='{$fields.actual_cost.name}'>
{sugar_number_format var=$fields.actual_cost.value }
</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.expected_revenue.acl > 1 || ($showDetailData && $fields.expected_revenue.acl > 0)}
<td valign="top" id='expected_revenue_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_REVENUE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.expected_revenue.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.expected_revenue.acl > 1 && $fields.expected_revenue.locked == false && $fields.expected_revenue.disabled == false}
{counter name="panelFieldCount"}

{if strlen($fields.expected_revenue.value) <= 0}
{assign var="value" value=$fields.expected_revenue.default_value }
{else}
{assign var="value" value=$fields.expected_revenue.value }
{/if}  
<input type='text' name='{$fields.expected_revenue.name}' 
id='{$fields.expected_revenue.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='0'
>
{else}
{counter name="panelFieldCount"}

<span id='{$fields.expected_revenue.name}'>
{sugar_number_format var=$fields.expected_revenue.value }
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.objective.acl > 1 || ($showDetailData && $fields.objective.acl > 0)}
<td valign="top" id='objective_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_OBJECTIVE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.objective.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.objective.acl > 1 && $fields.objective.locked == false && $fields.objective.disabled == false}
{counter name="panelFieldCount"}

{if empty($fields.objective.value)}
{assign var="value" value=$fields.objective.default_value }
{else}
{assign var="value" value=$fields.objective.value }
{/if}  
<textarea  id='{$fields.objective.name}' name='{$fields.objective.name}'
rows="8" 
cols="80" 
title='' tabindex="0" 
 >{$value}</textarea>
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.objective.name|escape:'html'|url2html|nl2br}">{$fields.objective.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
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
{if $fields.content.acl > 1 || ($showDetailData && $fields.content.acl > 0)}
<td valign="top" id='content_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_CONTENT' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.content.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{if $fields.content.acl > 1 && $fields.content.locked == false && $fields.content.disabled == false}
{counter name="panelFieldCount"}

{if empty($fields.content.value)}
{assign var="value" value=$fields.content.default_value }
{else}
{assign var="value" value=$fields.content.value }
{/if}  
<textarea  id='{$fields.content.name}' name='{$fields.content.name}'
rows="8" 
cols="80" 
title='' tabindex="0" 
 >{$value}</textarea>
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.content.name|escape:'html'|url2html|nl2br}">{$fields.content.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_CAMPAIGN_INFORMATION").style.display='none';</script>
{/if}
<div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Campaigns'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PANEL_ASSIGNMENT'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.assigned_user_name.acl > 1 || ($showDetailData && $fields.assigned_user_name.acl > 0)}
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{if $fields.assigned_user_name.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.assigned_user_name.acl > 1 && $fields.assigned_user_name.locked == false && $fields.assigned_user_name.disabled == false}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","full_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
{else}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.team_name.acl > 1 || ($showDetailData && $fields.team_name.acl > 0)}
<td valign="top" id='team_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
{if $fields.team_name.locked == true}
{$lockedIcon}
{/if}
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{if $fields.team_name.acl > 1 && $fields.team_name.locked == false && $fields.team_name.disabled == false}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='0' display='1' labelSpan='' fieldSpan='' formName='EditView' tabindex=1 displayType='renderEditView'  	 }
{else}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='0' display='1' labelSpan='' fieldSpan='' formName='EditView' tabindex=1 displayType='renderDetailView'  	 }
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
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
<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('Campaigns'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/popup_parent_helper.js?v=DVLpmUfIyS7FBTTQXXC0Cg"></script>
<script type="text/javascript">
function type_change() {ldelim}
	type = document.getElementsByName('campaign_type');
	if(type[0].value=='NewsLetter') {ldelim}
		document.getElementById('freq_label').style.display = '';
		document.getElementById('freq_field').style.display = '';
	 {rdelim} else {ldelim}
		document.getElementById('freq_label').style.display = 'none';
		document.getElementById('freq_field').style.display = 'none';
	 {rdelim}
 {rdelim}
type_change();

function ConvertItems(id)  {ldelim}
	var items = new Array();

	//get the items that are to be converted
	expected_revenue = document.getElementById('expected_revenue');
	budget = document.getElementById('budget');
	actual_cost = document.getElementById('actual_cost');
	expected_cost = document.getElementById('expected_cost');

	//unformat the values of the items to be converted
	expected_revenue.value = unformatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = unformatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = unformatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = unformatNumber(actual_cost.value, num_grp_sep, dec_sep);

	//add the items to an array
	items[items.length] = expected_revenue;
	items[items.length] = budget;
	items[items.length] = expected_cost;
	items[items.length] = actual_cost;

	//call function that will convert currency
	ConvertRate(id, items);

	//Add formatting back to items
	expected_revenue.value = formatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = formatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = formatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = formatNumber(actual_cost.value, num_grp_sep, dec_sep);
 {rdelim}
</script>
<!-- End Meta-Data Javascript -->
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
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'tracker_key', 'int', true,'{/literal}{sugar_translate label='LBL_TRACKER_KEY' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'tracker_count', 'int', false,'{/literal}{sugar_translate label='LBL_TRACKER_COUNT' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'refer_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_REFER_URL' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'tracker_text', 'varchar', false,'{/literal}{sugar_translate label='LBL_TRACKER_TEXT' module='Campaigns' for_js=true}{literal}' );
addToValidateDateBefore('EditView', 'start_date', 'date', false,'{/literal}{sugar_translate label='LBL_START_DATE' module='Campaigns' for_js=true}{literal}', 'end_date' );
addToValidate('EditView', 'end_date', 'date', true,'{/literal}{sugar_translate label='LBL_END_DATE' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'impressions', 'int', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_IMPRESSIONS' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'budget', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_BUDGET' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'expected_cost', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_COST' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'actual_cost', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ACTUAL_COST' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'expected_revenue', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_REVENUE' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_type', 'enum', true,'{/literal}{sugar_translate label='LBL_TYPE' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'objective', 'text', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_OBJECTIVE' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'content', 'text', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_CONTENT' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'frequency', 'enum', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_FREQUENCY' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'following', 'bool', false,'{/literal}{sugar_translate label='LBL_FOLLOWING' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'my_favorite', 'bool', false,'{/literal}{sugar_translate label='LBL_FAVORITE' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'commentlog', 'collection', false,'{/literal}{sugar_translate label='LBL_COMMENTLOG' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'locked_fields', 'locked_fields', false,'{/literal}{sugar_translate label='LBL_LOCKED_FIELDS' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'id', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'team_id', 'team_list', false,'{/literal}{sugar_translate label='LBL_TEAM_ID' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_ID' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'acl_team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_SELECTED_ID' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'team_count', 'relate', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'team_name', 'teamset', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'acl_team_names', 'teamset', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_SELECTED_TEAMS' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'currency_id', false,'{/literal}{sugar_translate label='LBL_CURRENCY_ID' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'base_rate', 'text', false,'{/literal}{sugar_translate label='LBL_CURRENCY_RATE' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'currency_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CURRENCY_NAME' module='Campaigns' for_js=true}{literal}' );
addToValidate('EditView', 'currency_symbol', 'relate', false,'{/literal}{sugar_translate label='LBL_CURRENCY_SYMBOL' module='Campaigns' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Campaigns' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_team_name']={"form":"EditView","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"campaigns_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"campaigns_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"campaign_activities","module":"Activities"},"prospectlists":{"relationship":"prospect_list_campaigns"},"emailmarketing":{"relationship":"campaign_email_marketing"},"queueitems":{"relationship":"campaign_emailman"},"log_entries":{"relationship":"campaign_campaignlog"},"tracked_urls":{"relationship":"campaign_campaigntrakers"},"leads":{"relationship":"campaign_leads"},"opportunities":{"relationship":"campaign_opportunities"},"contacts":{"relationship":"campaign_contacts"},"accounts":{"relationship":"campaign_accounts"},"forecastworksheet":{"relationship":"forecastworksheets_campaigns"},"following_link":{"relationship":"campaigns_following"},"favorite_link":{"relationship":"campaigns_favorite"},"commentlog_link":{"relationship":"campaigns_commentlog"},"locked_fields_link":{"relationship":"campaigns_locked_fields"},"assigned_user_link":{"relationship":"campaigns_assigned_user","module":"Users","id_name":"assigned_user_id"},"currencies":{"relationship":"campaigns_currencies","id_name":"currency_id","module":"Currencies"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
