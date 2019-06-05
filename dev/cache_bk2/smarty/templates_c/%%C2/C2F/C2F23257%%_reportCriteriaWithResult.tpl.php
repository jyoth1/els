<?php /* Smarty version 2.6.11, created on 2019-05-27 10:35:53
         compiled from modules/Reports/templates/_reportCriteriaWithResult.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Reports/templates/_reportCriteriaWithResult.tpl', 13, false),array('function', 'sugar_csrf_form_token', 'modules/Reports/templates/_reportCriteriaWithResult.tpl', 29, false),array('function', 'sugar_getimagepath', 'modules/Reports/templates/_reportCriteriaWithResult.tpl', 51, false),array('function', 'sugar_action_menu', 'modules/Reports/templates/_reportCriteriaWithResult.tpl', 58, false),array('function', 'sugar_help', 'modules/Reports/templates/_reportCriteriaWithResult.tpl', 136, false),array('modifier', 'escape', 'modules/Reports/templates/_reportCriteriaWithResult.tpl', 391, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Reports/tpls/reports.css'), $this);?>
" />

<?php if (( $this->_tpl_vars['issetSaveResults'] )): ?>

	<?php if (( $this->_tpl_vars['isSaveResults'] )): ?>
<p>	<span><b><?php echo $this->_tpl_vars['mod_strings']['LBL_SUCCESS_REPORT'];  echo $this->_tpl_vars['save_report_as_str'];  echo $this->_tpl_vars['mod_strings']['LBL_WAS_SAVED']; ?>
</b></span></p>
	<?php else: ?>
	<span><b><?php echo $this->_tpl_vars['mod_strings']['LBL_FAILURE_REPORT'];  echo $this->_tpl_vars['save_report_as_str'];  echo $this->_tpl_vars['mod_strings']['LBL_WAS_NOT_SAVED']; ?>
</b></span></p>
	<?php endif;  endif;  echo $this->_tpl_vars['form_header']; ?>


<?php echo $this->_tpl_vars['chartResources']; ?>



<form action="index.php?action=ReportCriteriaResults&module=Reports&page=report&id=<?php echo $this->_tpl_vars['report_id']; ?>
" method="post" name="EditView" id="EditView" onSubmit="return fill_form();">
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

<input type="hidden" name='report_offset' value ="<?php echo $this->_tpl_vars['report_offset']; ?>
">
<input type="hidden" name='sort_by' value ="<?php echo $this->_tpl_vars['sort_by']; ?>
">
<input type="hidden" name='sort_dir' value ="<?php echo $this->_tpl_vars['sort_dir']; ?>
">
<input type="hidden" name='summary_sort_by' value ="<?php echo $this->_tpl_vars['summary_sort_by']; ?>
">
<input type="hidden" name='summary_sort_dir' value ="<?php echo $this->_tpl_vars['summary_sort_dir']; ?>
">
<input type="hidden" name='expanded_combo_summary_divs' id='expanded_combo_summary_divs' value=''>
<input type="hidden" name="action" value="ReportCriteriaResults">
<input type="hidden" name="module" value="Reports">
<input type="hidden" id="record" name="record" value="<?php echo $this->_tpl_vars['report_id']; ?>
">
<input type="hidden" id="report_name" name="report_name" value="<?php echo $this->_tpl_vars['reportName']; ?>
">
<input type="hidden" id="id" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
<input type="hidden" name='report_def' value ="">
<input type="hidden" name='save_as' value ="">
<input type="hidden" name='save_as_report_type' value ="">
<input type="hidden" name="page" value="report">
<input type="hidden" name="is_delete" value="0">
<input type="hidden" name="to_pdf" value="<?php echo $this->_tpl_vars['to_pdf']; ?>
"/>
<input type="hidden" name="to_csv" value="<?php echo $this->_tpl_vars['to_csv']; ?>
"/>
<input type="hidden" name="save_report" value=""/>
<input type="hidden" name='showReportDetails' value ="<?php echo $this->_tpl_vars['showReportDetails']; ?>
">
<input type="hidden" name='showChart' value ="<?php echo $this->_tpl_vars['showChart']; ?>
">
<input type="hidden" id="blankimagepath" name="blankimagepath" value="<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
">


<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td>

<?php echo smarty_function_sugar_action_menu(array('id' => 'detail_header_action_menu','buttons' => $this->_tpl_vars['action_button'],'class' => 'clickMenu fancymenu'), $this);?>

</td>
</tr>
</table>
<script language="javascript">
var form_submit = "<?php echo $this->_tpl_vars['form_submit']; ?>
";
LBL_RELATED = '<?php echo $this->_tpl_vars['mod_strings']['LBL_RELATED']; ?>
';
<?php echo '
'; ?>

ACLAllowedModules = <?php echo $this->_tpl_vars['ACLAllowedModules']; ?>
;
</script>
<BR>





<?php if (( $this->_tpl_vars['warnningMessage'] != '' )): ?>
<table width="100%" cellspacing=0 cellpadding=0>
<tr>
	<td><h3><?php echo $this->_tpl_vars['warnningMessage']; ?>
</h3>
	</td>
</tr>
</table>
<?php endif; ?>
<table width="100%" cellspacing=0 cellpadding=0 class="actionsContainer">
<tr>
<td><input type=button name="showHideReportDetails" id="showHideReportDetails" class="button" title="<?php echo $this->_tpl_vars['reportDetailsButtonTitle']; ?>
" value="<?php echo $this->_tpl_vars['reportDetailsButtonTitle']; ?>
" onClick="showHideReportDetailsButton();">
</td>
</tr>
</table>
<table width="100%" cellspacing=0 cellpadding=0>
<tr>
	<td width="100%" scope="row">
		<table width="100%" id="reportDetailsTable" name="reportDetailsTable" style="<?php echo $this->_tpl_vars['reportDetailsTableStyle']; ?>
">
			<tr>
				<td wrap="true">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_ATT_NAME']; ?>
:</b> <?php echo $this->_tpl_vars['reportName']; ?>

				</td>
				<td wrap="true">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT__ATT_TYPE']; ?>
:</b> <?php echo $this->_tpl_vars['reportType']; ?>

				</td>
			</tr>
			<tr>
				<td wrap="true">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_ATT_MODULES']; ?>
:</b> <?php echo $this->_tpl_vars['reportModuleList']; ?>

				</td>
				<td wrap="true">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_TEAM']; ?>
:</b> <?php echo $this->_tpl_vars['reportTeam']; ?>

				</td>
			</tr>
			<tr>
				<td wrap="true">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_DISPLAY_COLUMNS']; ?>
:</b> <?php echo $this->_tpl_vars['reportDisplayColumnsList']; ?>

				</td>
				<td wrap="true">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_OWNER']; ?>
:</b> <?php echo $this->_tpl_vars['reportAssignedToName']; ?>

				</td>
			</tr>
			<?php echo $this->_tpl_vars['summaryAndGroupDefData']; ?>

			<tr>
			<tr>
				<td wrap="true" colspan="2">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_SCHEDULE_TITLE']; ?>
:</b> <span id="schduleDateTimeDiv"><?php echo $this->_tpl_vars['schedule_value']; ?>
</span>
				</td>
			</tr>
			<tr>
				<td wrap="true" colspan="2">
					<b><?php echo $this->_tpl_vars['mod_strings']['LBL_FILTERS']; ?>
:</b><?php echo $this->_tpl_vars['reportFilters']; ?>

				</td>
			</tr>
			</tr>
		</table>
	</td>
</tr>
<tr>
<td valign="top" width="90%">
<div id="filters_tab" style=<?php echo $this->_tpl_vars['filterTabStyle']; ?>
>
<div scope="row"><h3><?php echo $this->_tpl_vars['mod_strings']['LBL_RUNTIME_FILTERS']; ?>
:<span valign="bottom">&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_VIEWER_RUNTIME_HELP']), $this);?>
</span></h3>
</div>
<input type=hidden name='filters_def' value ="">
<table id='filters_top' border=0 cellpadding="0" cellspacing="0">
<tbody id='filters'></tbody>
</table>
<table>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
		<td>
			<input type=submit class="button" title="<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_RUN_WITH_FILTER']; ?>
"
			    value="<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_RUN_WITH_FILTER']; ?>
"
			    onclick="this.form.to_pdf.value='';this.form.to_csv.value='';this.form.save_report.value='';">
		</td>
		<td>
			<input type=submit class="button" title="<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_RESET_FILTER']; ?>
"
			    value="<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_RESET_FILTER']; ?>
"
			    onclick="this.form.to_pdf.value='';this.form.to_csv.value='';this.form.save_report.value='';this.form.reset_filters.value='1'">
                        <input type="hidden" name="reset_filters" id="reset_filters" value="0">
		</td>
        </tr>
</table>
</div>

</td>

</tr>
</table>
</form>
</p>
<script type="text/javascript" src="cache/modules/modules_def_<?php echo $this->_tpl_vars['current_language']; ?>
_<?php echo $this->_tpl_vars['md5_current_user_id']; ?>
.js?v=_<?php echo $this->_tpl_vars['ENTROPY']; ?>
"></script>
<?php if (! empty ( $this->_tpl_vars['fiscalStartDate'] )): ?>
<script type="text/javascript" src="cache/modules/modules_def_fiscal_<?php echo $this->_tpl_vars['current_language']; ?>
_<?php echo $this->_tpl_vars['md5_current_user_id']; ?>
.js?v=_<?php echo $this->_tpl_vars['ENTROPY']; ?>
"></script>
<?php endif; ?>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<script>

var visible_modules;
var report_def;
var current_module;
var visible_fields = new Array();
var visible_fields_map =  new Object();
var visible_summary_fields = new Array();
var visible_summary_field_map =  new Object();
var current_report_type;
var display_columns_ref = 'display';
var hidden_columns_ref = 'hidden';
var field_defs;
var previous_links_map = new Object();
var previous_links =  new Array();
var display_summary_ref = 'display';
var hidden_summary_ref = 'hidden';
var users_array = new Array();

</script>
<script language="javascript">
var image_path = "<?php echo $this->_tpl_vars['args_image_path']; ?>
";
var lbl_and = "<?php echo $this->_tpl_vars['mod_strings']['LBL_AND']; ?>
";
var lbl_select = "<?php echo $this->_tpl_vars['mod_strings']['LBL_SELECT']; ?>
";
var lbl_remove = "<?php echo $this->_tpl_vars['mod_strings']['LBL_REMOVE']; ?>
";
var lbl_missing_fields = "<?php echo $this->_tpl_vars['mod_strings']['LBL_MISSING_FIELDS']; ?>
";
var lbl_at_least_one_display_column = "<?php echo $this->_tpl_vars['mod_strings']['LBL_AT_LEAST_ONE_DISPLAY_COLUMN']; ?>
";
var lbl_at_least_one_summary_column = "<?php echo $this->_tpl_vars['mod_strings']['LBL_AT_LEAST_ONE_SUMMARY_COLUMN']; ?>
";
var lbl_missing_input_value  = "<?php echo $this->_tpl_vars['mod_strings']['LBL_MISSING_INPUT_VALUE']; ?>
";
var lbl_missing_second_input_value = "<?php echo $this->_tpl_vars['mod_strings']['LBL_MISSING_SECOND_INPUT_VALUE']; ?>
";
var lbl_nothing_was_selected = "<?php echo $this->_tpl_vars['mod_strings']['LBL_NOTHING_WAS_SELECTED']; ?>
"
var lbl_none = "<?php echo $this->_tpl_vars['mod_strings']['LBL_NONE']; ?>
";
var lbl_outer_join_checkbox = "<?php echo $this->_tpl_vars['mod_strings']['LBL_OUTER_JOIN_CHECKBOX']; ?>
";
var lbl_add_related = "<?php echo $this->_tpl_vars['mod_strings']['LBL_ADD_RELATE']; ?>
";
var lbl_del_this = "<?php echo $this->_tpl_vars['mod_strings']['LBL_DEL_THIS']; ?>
";
var lbl_alert_cant_add = "<?php echo $this->_tpl_vars['mod_strings']['LBL_ALERT_CANT_ADD']; ?>
";
var lbl_related_table_blank = "<?php echo $this->_tpl_vars['mod_strings']['LBL_RELATED_TABLE_BLANK']; ?>
";
var lbl_optional_help = "<?php echo $this->_tpl_vars['mod_strings']['LBL_OPTIONAL_HELP']; ?>
";
</script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/reportCriteria.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/reportsInlineEdit.js'), $this);?>
"></script>
<script language="javascript">
visible_modules = <?php echo $this->_tpl_vars['allowed_modules_js']; ?>
;
report_def = <?php echo $this->_tpl_vars['reporter_report_def_str1']; ?>
;
goto_anchor = <?php echo $this->_tpl_vars['goto_anchor']; ?>
;
<?php echo '
function report_onload() {
	if (goto_anchor != \'\') {
		var anch = document.getElementById(goto_anchor);
	  	if ( typeof(anch) != \'undefined\' && anch != null) {
	    	anch.focus();
	  	} // if
	} else {
		// no op
	}
} // fn

function showFilterString() {
	if(YAHOO.util.Dom.get(\'filter_results\') && YAHOO.util.Dom.get(\'filter_results_text\')) {
	   filter_span = YAHOO.util.Dom.get(\'filter_results\');
	   filter_results_text_span = YAHOO.util.Dom.get(\'filter_results_text\');
	   expand = (filter_results_text_span.style.visibility == \'hidden\') ? true : false;
	   document.getElementById(\'filter_results_image\').src = \'index.php?entryPoint=getImage&themeName=\' + SUGAR.themes.theme_name + \'&imageName=\' + (expand ? \'advanced_search.gif\' : \'basic_search.gif\');
       filter_results_text_span.innerHTML = \'&nbsp;\' + (expand ? filterString : \'\');
       filter_results_text_span.style.visibility = expand ? \'visible\' : \'hidden\';
	}
} // fn

function schedulePOPUP(){
    var id = document.getElementById(\'record\').value;
    var name = document.getElementById(\'report_name\').value;
    var sugarApp = SUGAR.App || SUGAR.app || app;
    var newModel = sugarApp.data.createBean(\'ReportSchedules\');
    newModel.set({
        report_id : id,
        report_name: name
    });
    sugarApp.drawer.open({
        layout: \'create\',
        context: {
            create: true,
            module: \'ReportSchedules\',
            model: newModel
        }
    });
}
function viewSchedulesPOPUP(){
    var id = document.getElementById(\'record\').value;
    var name = document.getElementById(\'report_name\').value;
    var sugarApp = SUGAR.App || SUGAR.app || app;
    var filterOptions = new sugarApp.utils.FilterOptions().config({
        initial_filter_label: name,
        initial_filter: \'by_report\',
        filter_populate: {
            \'report_id\': [id]
        }
    });
    sugarApp.controller.loadView({
        module: \'ReportSchedules\',
        layout: \'records\',
        filterOptions: filterOptions.format()
    });
}
function performFavAction(actionToPerfrom) {
	var callback = {
        success:function(o){},
        failure:function(o){}
    };
	var postDataString = actionToPerfrom + \'=1&report_id=\' + document.getElementById(\'record\').value;
	YAHOO.util.Connect.asyncRequest("POST", "index.php?action=ReportCriteriaResults&module=Reports&page=report", callback, postDataString);
	var imageTag = "<img border=\\"0\\" height=\'16px\' width=\'11px\' align=\\"absmiddle\\" src=\\"" + document.getElementById(\'blankimagepath\').value + "\\"/>";

	var favButton = document.getElementById(\'favButton\');
	if (actionToPerfrom == \'addtofavorites\') {
		favButton.title = '; ?>
"<?php echo $this->_tpl_vars['app_strings']['LBL_REMOVE_FROM_FAVORITES']; ?>
";
		favButton.value = "<?php echo $this->_tpl_vars['app_strings']['LBL_REMOVE_FROM_FAVORITES']; ?>
";
		<?php echo 'favButton.onclick = function() {performFavAction(\'removefromfavorites\')};
	} else {
		favButton.title = '; ?>
"<?php echo $this->_tpl_vars['app_strings']['LBL_ADD_TO_FAVORITES']; ?>
";
		favButton.value = "<?php echo $this->_tpl_vars['app_strings']['LBL_ADD_TO_FAVORITES']; ?>
";
		<?php echo 'favButton.onclick = function() {performFavAction(\'addtofavorites\')};
	} // else
} // fn

function showHideReportDetailsButton() {
	var reportDetailsTable = document.getElementById("reportDetailsTable");
	var showHideReportDetailsButton = document.getElementById("showHideReportDetails");
	if (reportDetailsTable.style.display == "none") {
		saveReportOptionsState("showDetails", "1");
		reportDetailsTable.style.display = "";
		showHideReportDetailsButton.title = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_HIDE_DETAILS']; ?>
";
		<?php echo 'showHideReportDetailsButton.value = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_HIDE_DETAILS']; ?>
";<?php echo '
	} else {
		saveReportOptionsState("showDetails", "0");
		reportDetailsTable.style.display = "none";
		showHideReportDetailsButton.title = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_SHOW_DETAILS']; ?>
";
		<?php echo 'showHideReportDetailsButton.value = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_SHOW_DETAILS']; ?>
";<?php echo '
	} // else
} // fn
function saveReportOptionsState(name, value) {
	var callback = {
        success:function(o){},
        failure:function(o){}
    };
	var postDataString = \'to_pdf=true&report_options=1&report_id=\' + document.getElementById(\'record\').value + "&" + name + "=" + value;
	YAHOO.util.Connect.asyncRequest("POST", "index.php?action=ReportCriteriaResults&module=Reports&page=report", callback, postDataString);
} // fn

window.onload = report_onload;
current_module = report_def.module;
field_defs = module_defs[current_module].field_defs;
'; ?>

current_report_type = "<?php echo $this->_tpl_vars['report_type']; ?>
";
<?php echo '
for(var i in report_def.display_columns) {
	visible_fields.push(getFieldKey(report_def.display_columns[i]));
    visible_fields_map[getFieldKey(report_def.display_columns[i])] = report_def.display_columns[i];
} // for

for(var i in report_def.summary_columns) {
	if (typeof(report_def.summary_columns[i].is_group_by) != \'undefined\' && report_def.summary_columns[i].is_group_by == \'hidden\') {
    continue;
  	} // if
  	visible_summary_fields.push(getFieldKey(report_def.summary_columns[i]));
  	visible_summary_field_map[getFieldKey(report_def.summary_columns[i])] = report_def.summary_columns[i];
} // for


for(var i in report_def.links_def) {
    previous_links_map[ report_def.links_def[i] ] = 1;
	previous_links.push( report_def.links_def[i]);
} // for

function load_page() {
	displayGroupCount();
	reload_joins();
    //current_module = document.EditView.self.options[document.EditView.self.options.selectedIndex].value;
    //reload_join_rows(\'regular\');
    all_fields = getAllFieldsMapped(current_module);
    if(form_submit != "true")
    {
        //remakeGroups();
        //reload_groups();
        reload_actual_filters();
    }
    loadChartForReports();
    doExpandCollapseAll();
    //reload_columns(\'regular\');
}

function doExpandCollapseAll() {

} // fn

function loadChartForReports() {
	var idObject = document.getElementById(\'record\');
	var id = \'\';
	if (idObject != null) {
		id = idObject.value;
	} // if
	var chartId = document.getElementById(id + \'_div\');
	var showHideChartButton = document.getElementById(\'showHideChartButton\');
	if (chartId == null && showHideChartButton != null) {
		showHideChartButton.style.display = \'none\';
	} // if
} // fn

function setSchuleTime(scheduleDateTime) {
	document.getElementById("schduleDateTimeDiv").innerHTML = scheduleDateTime;
} // fn

function displayGroupCount() {
	// no op
} // fn
'; ?>

var current_user_id = '<?php echo $this->_tpl_vars['current_user_id']; ?>
';
users_array[0]=<?php echo '{text'; ?>
:'<?php echo $this->_tpl_vars['mod_strings']['LBL_CURRENT_USER']; ?>
',value:'Current User'<?php echo '}'; ?>
;
<?php $_from = $this->_tpl_vars['user_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user_id'] => $this->_tpl_vars['user_name']):
 echo 'users_array[users_array.length] = {text:'; ?>
'<?php echo ((is_array($_tmp=$this->_tpl_vars['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
',value:'<?php echo $this->_tpl_vars['user_id']; ?>
'};
<?php endforeach; endif; unset($_from); ?>
</script>
<script language="javascript">
if(typeof YAHOO != 'undefined') YAHOO.util.Event.addListener(window, 'load', load_page);
</script>