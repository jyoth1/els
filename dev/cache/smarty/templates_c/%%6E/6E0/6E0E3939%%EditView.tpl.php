<?php /* Smarty version 2.6.11, created on 2019-05-29 15:29:11
         compiled from cache/modules/Employees/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/modules/Employees/EditView.tpl', 15, false),array('function', 'sugar_csrf_form_token', 'cache/modules/Employees/EditView.tpl', 27, false),array('function', 'sugar_include', 'cache/modules/Employees/EditView.tpl', 59, false),array('function', 'counter', 'cache/modules/Employees/EditView.tpl', 65, false),array('function', 'sugar_translate', 'cache/modules/Employees/EditView.tpl', 72, false),array('function', 'html_options', 'cache/modules/Employees/EditView.tpl', 89, false),array('function', 'sugar_getimagepath', 'cache/modules/Employees/EditView.tpl', 110, false),array('function', 'sugar_phone', 'cache/modules/Employees/EditView.tpl', 562, false),array('modifier', 'escape', 'cache/modules/Employees/EditView.tpl', 52, false),array('modifier', 'strip_semicolon', 'cache/modules/Employees/EditView.tpl', 73, false),array('modifier', 'lookup', 'cache/modules/Employees/EditView.tpl', 107, false),array('modifier', 'count', 'cache/modules/Employees/EditView.tpl', 187, false),array('modifier', 'url2html', 'cache/modules/Employees/EditView.tpl', 1137, false),array('modifier', 'nl2br', 'cache/modules/Employees/EditView.tpl', 1137, false),)), $this); ?>


<script type="text/javascript">
    <?php if ($this->_tpl_vars['SHOW_NON_EDITABLE_FIELDS_ALERT']): ?>
    <?php echo '
    app.alert.show(\'non_editable_employee_fields\', {
        level: \'info\',
        messages: \'';  echo $this->_tpl_vars['NON_EDITABLE_FIELDS_MSG'];  echo '\',
        autoClose: false
    });
    '; ?>

    <?php endif; ?>
</script>

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
')<?php else: ?>parent.SUGAR.App.router.buildRoute('Employees')<?php endif;  $this->_smarty_vars['capture']['cancelReturnUrl'] = ob_get_contents();  $this->assign('cancelReturnUrl', ob_get_contents());ob_end_clean(); ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $this->_tpl_vars['cancelReturnUrl']; ?>
, <?php echo '{trigger: true}'; ?>
); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER">  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<div id="detailpanel_1" >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_<?php echo $this->_tpl_vars['module']; ?>
_Subpanel'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['employee_status']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['employee_status']['acl'] > 0 )): ?>
<td valign="top" id='employee_status_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['employee_status']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['employee_status']['acl'] > 1 && $this->_tpl_vars['fields']['employee_status']['locked'] == false && $this->_tpl_vars['fields']['employee_status']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" 
title=''      accesskey='7'   
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['employee_status']['options'],'selected' => $this->_tpl_vars['fields']['employee_status']['value']), $this);?>

</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['employee_status']['options']);  ob_start();  echo $this->_tpl_vars['fields']['employee_status']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['employee_status']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" 
title=''          accesskey='7'  
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['employee_status']['options'],'selected' => $this->_tpl_vars['fields']['employee_status']['value']), $this);?>

</select>
<input
id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['employee_status']['name'];  echo '");
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
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['employee_status']['name'];  echo '");
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
sync_';  echo $this->_tpl_vars['fields']['employee_status']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['employee_status']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['employee_status']['name'];  echo '", syncFromHiddenToWidget);
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
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['employee_status']['name'];  echo '");
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



<?php if (is_string ( $this->_tpl_vars['fields']['employee_status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['employee_status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['employee_status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['employee_status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['employee_status']['options'][$this->_tpl_vars['fields']['employee_status']['value']]; ?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['picture']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['picture']['acl'] > 0 )): ?>
<td valign="top" id='picture_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PICTURE_FILE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['picture']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['picture']['acl'] > 1 && $this->_tpl_vars['fields']['picture']['locked'] == false && $this->_tpl_vars['fields']['picture']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['picture']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['picture']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['picture']['value']);  endif; ?>  
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
_duplicate" name="<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
_duplicate" value="<?php echo $this->_tpl_vars['value']; ?>
"/>
<?php endif; ?>
<input 
type="file" id="<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
title="" size="30" maxlength="255" value="" tabindex="0"
onchange="SUGAR.image.confirm_imagefile('<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
');" 
class="imageUploader"
<?php if (! empty ( $this->_tpl_vars['fields']['picture']['value'] )): ?>
style="display:none"
<?php endif; ?>  />
<?php if (empty ( $this->_tpl_vars['fields']['picture']['value'] )):  else: ?>
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
').src)">
<img
id="img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
name="img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 	
src='index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['picture']['value']; ?>
&type=SugarFieldImage&isTempFile=1'
style='
<?php if ("" == ""): ?>
border: 0; 
<?php else: ?>
border: 1px solid black; 
<?php endif;  if ('42' == ""): ?>
width: auto;
<?php else: ?>
width: 42px;
<?php endif;  if ('42' == ""): ?>
height: auto;
<?php else: ?>
height: 42px;
<?php endif;  if (empty ( $this->_tpl_vars['fields']['picture']['value'] )): ?> 
visibility:hidden;
<?php endif; ?>
'	
></a>
<img
id="bt_remove_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
name="bt_remvoe_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
alt="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMOVE'), $this);?>
"
title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMOVE'), $this);?>
"
src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'delete_inline.gif'), $this);?>
"
onclick="SUGAR.image.remove_upload_imagefile('<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
');" 	
/>
<input 
id="remove_imagefile_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" name="remove_imagefile_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
type="hidden"  value="" />
<?php endif;  else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" value="$fields.picture.value">
<?php if (isset ( $this->_tpl_vars['displayParams']['link'] )): ?>
<a href=''>
<?php else: ?>
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
').src)">
<?php endif; ?>
<img
id="img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
name="img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
<?php if (empty ( $this->_tpl_vars['fields']['picture']['value'] )): ?>
src='' 	
<?php else: ?>
src='index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['picture']['value']; ?>
&type=SugarFieldImage&isTempFile=1'
<?php endif; ?>
style='
<?php if (empty ( $this->_tpl_vars['fields']['picture']['value'] )): ?>
display:	none;
<?php endif;  if ("" == ""): ?>
border: 0; 
<?php else: ?>
border: 1px solid black; 
<?php endif;  if ('42' == ""): ?>
width: auto;
<?php else: ?>
width: 42px;
<?php endif;  if ('42' == ""): ?>
height: auto;
<?php else: ?>
height: 42px;
<?php endif; ?>
'		
>
</a>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['first_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['first_name']['acl'] > 0 )): ?>
<td valign="top" id='first_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['first_name']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['first_name']['acl'] > 1 && $this->_tpl_vars['fields']['first_name']['locked'] == false && $this->_tpl_vars['fields']['first_name']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='30' 
maxlength='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['last_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['last_name']['acl'] > 0 )): ?>
<td valign="top" id='last_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['last_name']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['last_name']['acl'] > 1 && $this->_tpl_vars['fields']['last_name']['locked'] == false && $this->_tpl_vars['fields']['last_name']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' 
maxlength='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['last_name']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['title']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['title']['acl'] > 0 )): ?>
<td valign="top" id='title_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['title']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['title']['acl'] > 1 && $this->_tpl_vars['fields']['title']['locked'] == false && $this->_tpl_vars['fields']['title']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['title']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_work']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['phone_work']['acl'] > 0 )): ?>
<td valign="top" id='phone_work_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['phone_work']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['phone_work']['acl'] > 1 && $this->_tpl_vars['fields']['phone_work']['locked'] == false && $this->_tpl_vars['fields']['phone_work']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_work']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_work']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['department']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['department']['acl'] > 0 )): ?>
<td valign="top" id='department_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['department']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['department']['acl'] > 1 && $this->_tpl_vars['fields']['department']['locked'] == false && $this->_tpl_vars['fields']['department']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['department']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['department']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['department']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_mobile']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['phone_mobile']['acl'] > 0 )): ?>
<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['phone_mobile']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['phone_mobile']['acl'] > 1 && $this->_tpl_vars['fields']['phone_mobile']['locked'] == false && $this->_tpl_vars['fields']['phone_mobile']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_mobile']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_mobile']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['reports_to_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['reports_to_name']['acl'] > 0 )): ?>
<td valign="top" id='reports_to_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['reports_to_name']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['reports_to_name']['acl'] > 1 && $this->_tpl_vars['fields']['reports_to_name']['locked'] == false && $this->_tpl_vars['fields']['reports_to_name']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['reports_to_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['reports_to_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['reports_to_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['reports_to_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_other']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['phone_other']['acl'] > 0 )): ?>
<td valign="top" id='phone_other_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['phone_other']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['phone_other']['acl'] > 1 && $this->_tpl_vars['fields']['phone_other']['locked'] == false && $this->_tpl_vars['fields']['phone_other']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_other']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_other']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_other']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
</td>
<?php if ($this->_tpl_vars['fields']['phone_fax']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['phone_fax']['acl'] > 0 )): ?>
<td valign="top" id='phone_fax_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['phone_fax']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['phone_fax']['acl'] > 1 && $this->_tpl_vars['fields']['phone_fax']['locked'] == false && $this->_tpl_vars['fields']['phone_fax']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_fax']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_fax']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
</td>
<?php if ($this->_tpl_vars['fields']['phone_home']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['phone_home']['acl'] > 0 )): ?>
<td valign="top" id='phone_home_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['phone_home']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['phone_home']['acl'] > 1 && $this->_tpl_vars['fields']['phone_home']['locked'] == false && $this->_tpl_vars['fields']['phone_home']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_home']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_home']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_home']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['messenger_type']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['messenger_type']['acl'] > 0 )): ?>
<td valign="top" id='messenger_type_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['messenger_type']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['messenger_type']['acl'] > 1 && $this->_tpl_vars['fields']['messenger_type']['locked'] == false && $this->_tpl_vars['fields']['messenger_type']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
title=''       
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['messenger_type']['options'],'selected' => $this->_tpl_vars['fields']['messenger_type']['value']), $this);?>

</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['messenger_type']['options']);  ob_start();  echo $this->_tpl_vars['fields']['messenger_type']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['messenger_type']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
title=''          
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['messenger_type']['options'],'selected' => $this->_tpl_vars['fields']['messenger_type']['value']), $this);?>

</select>
<input
id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
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
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
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
sync_';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '", syncFromHiddenToWidget);
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
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
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



<?php if (is_string ( $this->_tpl_vars['fields']['messenger_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['messenger_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['messenger_type']['options'][$this->_tpl_vars['fields']['messenger_type']['value']]; ?>

<?php endif;  endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['messenger_id']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['messenger_id']['acl'] > 0 )): ?>
<td valign="top" id='messenger_id_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['messenger_id']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['messenger_id']['acl'] > 1 && $this->_tpl_vars['fields']['messenger_id']['locked'] == false && $this->_tpl_vars['fields']['messenger_id']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['messenger_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['messenger_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['messenger_id']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['description']['acl'] > 0 )): ?>
<td valign="top" id='description_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NOTES','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['description']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 1 && $this->_tpl_vars['fields']['description']['locked'] == false && $this->_tpl_vars['fields']['description']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
rows="4" 
cols="60" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['address_street']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['address_street']['acl'] > 0 )): ?>
<td valign="top" id='address_street_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['address_street']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['address_street']['acl'] > 1 && $this->_tpl_vars['fields']['address_street']['locked'] == false && $this->_tpl_vars['fields']['address_street']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['address_street']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['address_street']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_street']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
'
rows="2" 
cols="30" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['address_street']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['address_city']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['address_city']['acl'] > 0 )): ?>
<td valign="top" id='address_city_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['address_city']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['address_city']['acl'] > 1 && $this->_tpl_vars['fields']['address_city']['locked'] == false && $this->_tpl_vars['fields']['address_city']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_city']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['address_state']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['address_state']['acl'] > 0 )): ?>
<td valign="top" id='address_state_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['address_state']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['address_state']['acl'] > 1 && $this->_tpl_vars['fields']['address_state']['locked'] == false && $this->_tpl_vars['fields']['address_state']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_state']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['address_postalcode']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['address_postalcode']['acl'] > 0 )): ?>
<td valign="top" id='address_postalcode_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['address_postalcode']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['address_postalcode']['acl'] > 1 && $this->_tpl_vars['fields']['address_postalcode']['locked'] == false && $this->_tpl_vars['fields']['address_postalcode']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
' size='30' 
maxlength='20' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_postalcode']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['address_country']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['address_country']['acl'] > 0 )): ?>
<td valign="top" id='address_country_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php if ($this->_tpl_vars['fields']['address_country']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['address_country']['acl'] > 1 && $this->_tpl_vars['fields']['address_country']['locked'] == false && $this->_tpl_vars['fields']['address_country']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_country']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_country']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_country']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_country']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_country']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_country']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_country']['value']; ?>
</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['email']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['email']['acl'] > 0 )): ?>
<td valign="top" id='email_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Employees'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
<?php if ($this->_tpl_vars['fields']['email']['locked'] == true):  echo $this->_tpl_vars['lockedIcon']; ?>

<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['email']['acl'] > 1 && $this->_tpl_vars['fields']['email']['locked'] == false && $this->_tpl_vars['fields']['email']['disabled'] == false):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='email_span'>
<?php echo $this->_tpl_vars['fields']['email']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='email_span'>
<?php echo $this->_tpl_vars['fields']['email']['value']; ?>

</span>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
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
')<?php else: ?>parent.SUGAR.App.router.buildRoute('Employees')<?php endif;  $this->_smarty_vars['capture']['cancelReturnUrl'] = ob_get_contents();  $this->assign('cancelReturnUrl', ob_get_contents());ob_end_clean(); ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $this->_tpl_vars['cancelReturnUrl']; ?>
, <?php echo '{trigger: true}'; ?>
); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER">  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){SUGAR.util.buildAccessKeyLabels();});
</script><?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'user_name\', \'username\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'user_hash\', \'password\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_HASH','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'system_generated_password\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SYSTEM_GENERATED_PASSWORD','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'pwd_last_changed_date\', \'date\', false,\'Password Last Changed\' );
addToValidate(\'EditView\', \'authenticate_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_AUTHENTICATE_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'sugar_login\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUGAR_LOGIN','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'picture\', \'image\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PICTURE_FILE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'first_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'last_name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'full_name\', \'fullname\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'fullname\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'is_admin\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IS_ADMIN','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'external_auth_only\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EXT_AUTHENTICATE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'receive_notifications\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RECEIVE_NOTIFICATIONS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', true,\'Date Entered\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', true,\'Date Modified\' );
addToValidate(\'EditView\', \'last_login_date\', \'date\', false,\'last login\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_BY_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_street\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_CITY','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STATE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_COUNTRY','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_POSTALCODE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'UserType\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_TYPE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'default_team\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEFAULT_TEAM','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEFAULT_TEAM','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_set_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SET_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'acl_team_set_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SET_SELECTED_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_count\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_name\', \'teamset\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'portal_only\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_ONLY_USER','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'show_on_employees\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_ON_EMPLOYEES','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'employee_status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'messenger_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'messenger_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email1\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email\', \'email\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANY_EMAIL','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email_link_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_LINK_TYPE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'is_group\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_GROUP_USER','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_calls\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_meetings\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preferred_language\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREFERRED_LANGUAGE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'site_user_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SITE_USER_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'sv_site_visits_users_1_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'sv_site_visits_users_1sv_site_visits_ida\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SV_SITE_VISITS_USERS_1_FROM_SV_SITE_VISITS_TITLE_ID','module' => 'Employees','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Employees','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Employees','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'reports_to_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Employees','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees','for_js' => true), $this); echo '\', \'reports_to_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_reports_to_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.util.doWhen(\'!SUGAR.util.ajaxCallInProgress()\', function(){
SUGAR.forms.AssignmentHandler.registerView(\'EditView\');
SUGAR.forms.AssignmentHandler.LINKS[\'EditView\'] = {"created_by_link":{"relationship":"employees_created_by","module":"Users","id_name":"created_by"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"},"sv_site_visits_users_1":{"relationship":"sv_site_visits_users_1","module":"SV_Site_Visits","id_name":"sv_site_visits_users_1sv_site_visits_ida"}}

YAHOO.util.Event.onContentReady(\'EditView\', SUGAR.forms.AssignmentHandler.loadComplete);});</script>'; ?>
