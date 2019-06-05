<?php /* Smarty version 2.6.11, created on 2019-05-27 16:07:19
         compiled from cache/modules/Campaigns/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/modules/Campaigns/EditView.tpl', 3, false),array('function', 'sugar_csrf_form_token', 'cache/modules/Campaigns/EditView.tpl', 15, false),array('function', 'sugar_include', 'cache/modules/Campaigns/EditView.tpl', 47, false),array('function', 'counter', 'cache/modules/Campaigns/EditView.tpl', 53, false),array('function', 'sugar_getimagepath', 'cache/modules/Campaigns/EditView.tpl', 56, false),array('function', 'sugar_translate', 'cache/modules/Campaigns/EditView.tpl', 59, false),array('function', 'html_options', 'cache/modules/Campaigns/EditView.tpl', 125, false),array('function', 'sugar_getimage', 'cache/modules/Campaigns/EditView.tpl', 361, false),array('function', 'sugar_number_format', 'cache/modules/Campaigns/EditView.tpl', 753, false),array('function', 'sugarvar_teamset', 'cache/modules/Campaigns/EditView.tpl', 1077, false),array('modifier', 'escape', 'cache/modules/Campaigns/EditView.tpl', 40, false),array('modifier', 'default', 'cache/modules/Campaigns/EditView.tpl', 52, false),array('modifier', 'strip_semicolon', 'cache/modules/Campaigns/EditView.tpl', 71, false),array('modifier', 'lookup', 'cache/modules/Campaigns/EditView.tpl', 143, false),array('modifier', 'count', 'cache/modules/Campaigns/EditView.tpl', 223, false),array('modifier', 'url2html', 'cache/modules/Campaigns/EditView.tpl', 943, false),array('modifier', 'nl2br', 'cache/modules/Campaigns/EditView.tpl', 943, false),)), $this); ?>


<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/EditView/Panels.js'), $this);?>
"></script>
<script>
<?php echo '
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
'; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['relate_to'];  elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save') || $this->_tpl_vars['isDuplicate']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_HEADER"><?php endif; ?>  <?php ob_start();  if (! empty ( $_REQUEST['return_action'] ) && $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) && empty ( $_REQUEST['return_id'] )): ?>parent.SUGAR.App.router.buildRoute('<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['fields']['id']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$_REQUEST['return_action'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
')<?php elseif (! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['return_action'] ) || ! empty ( $_REQUEST['return_id'] )): ?>parent.SUGAR.App.router.buildRoute('<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$_REQUEST['return_action'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
')<?php else: ?>parent.SUGAR.App.router.buildRoute('Campaigns')<?php endif;  $this->_smarty_vars['capture']['cancelReturnUrl'] = ob_get_contents();  $this->assign('cancelReturnUrl', ob_get_contents());ob_end_clean(); ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $this->_tpl_vars['cancelReturnUrl']; ?>
, <?php echo '{trigger: true}'; ?>
); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER">  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Campaigns", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php echo $this->_tpl_vars['APP']['NTC_REQUIRED']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_INFORMATION','module' => 'Campaigns'), $this);?>

<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_CAMPAIGN_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['name']['acl'] > 0 )): ?>
<td valign="top" id='name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_NAME','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['name']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 1 && $this->_tpl_vars['fields']['name']['locked'] == false && $this->_tpl_vars['fields']['name']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='7'  >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['status']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['status']['acl'] > 0 )): ?>
<td valign="top" id='status_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['status']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['status']['acl'] > 1 && $this->_tpl_vars['fields']['status']['locked'] == false && $this->_tpl_vars['fields']['status']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''       
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['status']['options']);  ob_start();  echo $this->_tpl_vars['fields']['status']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['status']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''          
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

</select>
<input
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
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
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['status']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['status']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif;  else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['start_date']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['start_date']['acl'] > 0 )): ?>
<td valign="top" id='start_date_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_START_DATE','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['start_date']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['start_date']['acl'] > 1 && $this->_tpl_vars['fields']['start_date']['locked'] == false && $this->_tpl_vars['fields']['start_date']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['start_date']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<?php ob_start(); ?>alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" style="position:relative; top:6px" border="0" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
_trigger"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean();  echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'other_attributes' => ($this->_tpl_vars['other_attributes'])), $this);?>

&nbsp;(<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>)
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (strlen ( $this->_tpl_vars['fields']['start_date']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['start_date']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['start_date']['value']);  endif; ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['campaign_type']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['campaign_type']['acl'] > 0 )): ?>
<td valign="top" id='campaign_type_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['campaign_type']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['campaign_type']['acl'] > 1 && $this->_tpl_vars['fields']['campaign_type']['locked'] == false && $this->_tpl_vars['fields']['campaign_type']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" 
title=''       
onchange="type_change();">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['campaign_type']['options'],'selected' => $this->_tpl_vars['fields']['campaign_type']['value']), $this);?>

</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['campaign_type']['options']);  ob_start();  echo $this->_tpl_vars['fields']['campaign_type']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['campaign_type']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" 
title=''          
onchange="type_change();">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['campaign_type']['options'],'selected' => $this->_tpl_vars['fields']['campaign_type']['value']), $this);?>

</select>
<input
id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['campaign_type']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['campaign_type']['name'];  echo '");
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
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['campaign_type']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['campaign_type']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['campaign_type']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['campaign_type']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif;  else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['campaign_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['campaign_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['campaign_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['campaign_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['campaign_type']['options'][$this->_tpl_vars['fields']['campaign_type']['value']]; ?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['end_date']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['end_date']['acl'] > 0 )): ?>
<td valign="top" id='end_date_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_END_DATE','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['end_date']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['end_date']['acl'] > 1 && $this->_tpl_vars['fields']['end_date']['locked'] == false && $this->_tpl_vars['fields']['end_date']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['end_date']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<?php ob_start(); ?>alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" style="position:relative; top:6px" border="0" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
_trigger"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean();  echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'other_attributes' => ($this->_tpl_vars['other_attributes'])), $this);?>

&nbsp;(<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>)
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (strlen ( $this->_tpl_vars['fields']['end_date']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['end_date']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['end_date']['value']);  endif; ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['frequency']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['frequency']['acl'] > 0 )): ?>
<td valign="top" id='frequency_label' width='12.5%' scope="col">
<label for="frequency"><div style='none' id='freq_label'><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_FREQUENCY']; ?>
</div></label>
<?php if ($this->_tpl_vars['fields']['frequency']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['frequency']['acl'] > 1 && $this->_tpl_vars['fields']['frequency']['locked'] == false && $this->_tpl_vars['fields']['frequency']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<div style='none' id='freq_field'><?php echo smarty_function_html_options(array('name' => 'frequency','options' => $this->_tpl_vars['fields']['frequency']['options'],'selected' => $this->_tpl_vars['fields']['frequency']['value']), $this);?>
</div></TD>
<?php else: ?>
</td>
<td></td><td></td>
</td>		
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['currency_id']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['currency_id']['acl'] > 0 )): ?>
<td valign="top" id='currency_id_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_ID','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['currency_id']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['currency_id']['acl'] > 1 && $this->_tpl_vars['fields']['currency_id']['locked'] == false && $this->_tpl_vars['fields']['currency_id']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='currency_id_span'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='currency_id_span'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['impressions']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['impressions']['acl'] > 0 )): ?>
<td valign="top" id='impressions_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_IMPRESSIONS','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['impressions']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['impressions']['acl'] > 1 && $this->_tpl_vars['fields']['impressions']['locked'] == false && $this->_tpl_vars['fields']['impressions']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['impressions']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['impressions']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['impressions']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['impressions']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['impressions']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'    >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['impressions']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['impressions']['value']), $this);?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['budget']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['budget']['acl'] > 0 )): ?>
<td valign="top" id='budget_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_BUDGET','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['budget']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['budget']['acl'] > 1 && $this->_tpl_vars['fields']['budget']['locked'] == false && $this->_tpl_vars['fields']['budget']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['budget']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['budget']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['budget']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['budget']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['budget']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['budget']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['budget']['value']), $this);?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['expected_cost']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['expected_cost']['acl'] > 0 )): ?>
<td valign="top" id='expected_cost_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_COST','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['expected_cost']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['expected_cost']['acl'] > 1 && $this->_tpl_vars['fields']['expected_cost']['locked'] == false && $this->_tpl_vars['fields']['expected_cost']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['expected_cost']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['expected_cost']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['expected_cost']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['expected_cost']['value']), $this);?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['actual_cost']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['actual_cost']['acl'] > 0 )): ?>
<td valign="top" id='actual_cost_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ACTUAL_COST','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['actual_cost']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['actual_cost']['acl'] > 1 && $this->_tpl_vars['fields']['actual_cost']['locked'] == false && $this->_tpl_vars['fields']['actual_cost']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['actual_cost']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['actual_cost']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['actual_cost']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['actual_cost']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['actual_cost']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['actual_cost']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['actual_cost']['value']), $this);?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['expected_revenue']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['expected_revenue']['acl'] > 0 )): ?>
<td valign="top" id='expected_revenue_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['expected_revenue']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['expected_revenue']['acl'] > 1 && $this->_tpl_vars['fields']['expected_revenue']['locked'] == false && $this->_tpl_vars['fields']['expected_revenue']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['expected_revenue']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['expected_revenue']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['expected_revenue']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['expected_revenue']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['expected_revenue']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['expected_revenue']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['expected_revenue']['value']), $this);?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['objective']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['objective']['acl'] > 0 )): ?>
<td valign="top" id='objective_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_OBJECTIVE','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['objective']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['objective']['acl'] > 1 && $this->_tpl_vars['fields']['objective']['locked'] == false && $this->_tpl_vars['fields']['objective']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['objective']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['objective']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['objective']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['objective']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['objective']['name']; ?>
'
rows="8" 
cols="80" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['objective']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['objective']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['content']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['content']['acl'] > 0 )): ?>
<td valign="top" id='content_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_CONTENT','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['content']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['content']['acl'] > 1 && $this->_tpl_vars['fields']['content']['locked'] == false && $this->_tpl_vars['fields']['content']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['content']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['content']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['content']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['content']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['content']['name']; ?>
'
rows="8" 
cols="80" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['content']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['content']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_CAMPAIGN_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id="detailpanel_2" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Campaigns'), $this);?>

<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PANEL_ASSIGNMENT'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['assigned_user_name']['acl'] > 0 )): ?>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['acl'] > 1 && $this->_tpl_vars['fields']['assigned_user_name']['locked'] == false && $this->_tpl_vars['fields']['assigned_user_name']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","full_name":"assigned_user_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="assigned_user_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['team_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['team_name']['acl'] > 0 )): ?>
<td valign="top" id='team_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Campaigns'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['team_name']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['team_name']['acl'] > 1 && $this->_tpl_vars['fields']['team_name']['locked'] == false && $this->_tpl_vars['fields']['team_name']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields']['team_name'],'tabindex' => 1,'display' => '1','labelSpan' => '','fieldSpan' => '','formName' => 'EditView','displayType' => 'renderEditView'), $this);?>

<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields']['team_name'],'tabindex' => 1,'display' => '1','labelSpan' => '','fieldSpan' => '','formName' => 'EditView','displayType' => 'renderDetailView'), $this);?>

<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
<?php endif; ?>
</div></div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save') || $this->_tpl_vars['isDuplicate']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_FOOTER"><?php endif; ?>  <?php ob_start();  if (! empty ( $_REQUEST['return_action'] ) && $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) && empty ( $_REQUEST['return_id'] )): ?>parent.SUGAR.App.router.buildRoute('<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['fields']['id']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$_REQUEST['return_action'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
')<?php elseif (! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['return_action'] ) || ! empty ( $_REQUEST['return_id'] )): ?>parent.SUGAR.App.router.buildRoute('<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
', '<?php echo ((is_array($_tmp=$_REQUEST['return_action'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
')<?php else: ?>parent.SUGAR.App.router.buildRoute('Campaigns')<?php endif;  $this->_smarty_vars['capture']['cancelReturnUrl'] = ob_get_contents();  $this->assign('cancelReturnUrl', ob_get_contents());ob_end_clean(); ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $this->_tpl_vars['cancelReturnUrl']; ?>
, <?php echo '{trigger: true}'; ?>
); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER">  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Campaigns", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/popup_parent_helper.js?v=DVLpmUfIyS7FBTTQXXC0Cg"></script>
<script type="text/javascript">
function type_change() {
	type = document.getElementsByName('campaign_type');
	if(type[0].value=='NewsLetter') {
		document.getElementById('freq_label').style.display = '';
		document.getElementById('freq_field').style.display = '';
	 } else {
		document.getElementById('freq_label').style.display = 'none';
		document.getElementById('freq_field').style.display = 'none';
	 }
 }
type_change();

function ConvertItems(id)  {
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
 }
</script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){SUGAR.util.buildAccessKeyLabels();});
</script><?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_NAME','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'tracker_key\', \'int\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_KEY','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'tracker_count\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_COUNT','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'refer_url\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REFER_URL','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'tracker_text\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_TEXT','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidateDateBefore(\'EditView\', \'start_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_START_DATE','module' => 'Campaigns','for_js' => true), $this); echo '\', \'end_date\' );
addToValidate(\'EditView\', \'end_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_END_DATE','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'impressions\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_IMPRESSIONS','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'budget\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_BUDGET','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'expected_cost\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_COST','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'actual_cost\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ACTUAL_COST','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'expected_revenue\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'campaign_type\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'objective\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_OBJECTIVE','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'content\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_CONTENT','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'frequency\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_FREQUENCY','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'following\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FOLLOWING','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'my_favorite\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAVORITE','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'commentlog\', \'collection\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_COMMENTLOG','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'locked_fields\', \'locked_fields\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LOCKED_FIELDS','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_id\', \'team_list\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_ID','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_set_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SET_ID','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'acl_team_set_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SET_SELECTED_ID','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_count\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_name\', \'teamset\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'acl_team_names\', \'teamset\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SET_SELECTED_TEAMS','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'currency_id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_ID','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'base_rate\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_RATE','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_NAME','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency_symbol\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_SYMBOL','module' => 'Campaigns','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Campaigns','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Campaigns','for_js' => true), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_team_name\']={"form":"EditView","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.util.doWhen(\'!SUGAR.util.ajaxCallInProgress()\', function(){
SUGAR.forms.AssignmentHandler.registerView(\'EditView\');
SUGAR.forms.AssignmentHandler.LINKS[\'EditView\'] = {"created_by_link":{"relationship":"campaigns_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"campaigns_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"campaign_activities","module":"Activities"},"prospectlists":{"relationship":"prospect_list_campaigns"},"emailmarketing":{"relationship":"campaign_email_marketing"},"queueitems":{"relationship":"campaign_emailman"},"log_entries":{"relationship":"campaign_campaignlog"},"tracked_urls":{"relationship":"campaign_campaigntrakers"},"leads":{"relationship":"campaign_leads"},"opportunities":{"relationship":"campaign_opportunities"},"contacts":{"relationship":"campaign_contacts"},"accounts":{"relationship":"campaign_accounts"},"forecastworksheet":{"relationship":"forecastworksheets_campaigns"},"following_link":{"relationship":"campaigns_following"},"favorite_link":{"relationship":"campaigns_favorite"},"commentlog_link":{"relationship":"campaigns_commentlog"},"locked_fields_link":{"relationship":"campaigns_locked_fields"},"assigned_user_link":{"relationship":"campaigns_assigned_user","module":"Users","id_name":"assigned_user_id"},"currencies":{"relationship":"campaigns_currencies","id_name":"currency_id","module":"Currencies"}}

YAHOO.util.Event.onContentReady(\'EditView\', SUGAR.forms.AssignmentHandler.loadComplete);});</script>'; ?>
