

<script type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"></script>
<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0 && YAHOO.util.Event.DOMReady;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
{sugar_csrf_form_token}
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<input type="hidden" name="mode" value="">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Campaigns'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li><form>
<input type="hidden" id="share_button_name" value="{$fields.name.value}">
<input title="{$APP.LBL_SHARE_BUTTON_TITLE}" accessKey="{$APP.LBL_SHARE_BUTTON_KEY}"
class="button" onclick="parent.SUGAR.App.bwc.shareRecord('Campaigns', '{$fields.id.value}', this.form.share_button_name.value)" type="button" name="button" value="{$APP.LBL_SHARE_BUTTON_LABEL}">
</form></li><li>{if $bean->ACLAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Campaigns'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='DuplicateView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Campaigns'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li><input type="button" title="{$MOD.LBL_TEST_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form = document.getElementById('formDetailView'); _form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='Schedule';_form.mode.value='test';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="send_test_button" value="{$MOD.LBL_TEST_BUTTON_LABEL}"/></li><li><input type="button" title="{$MOD.LBL_QUEUE_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='Schedule';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="send_emails_button" value="{$MOD.LBL_QUEUE_BUTTON_LABEL}"/></li><li><input type="button" title="{$MOD.LBL_MARK_AS_SENT}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='DetailView';_form.mode.value='set_target';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="mark_as_sent_button" value="{$MOD.LBL_MARK_AS_SENT}"/></li><li><script {$MSG_SCRIPT} ></script></li><li>{sugar_button module="$module" id="REALPDFVIEW" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{sugar_button module="$module" id="REALPDFEMAIL" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
<td align="right" width="10%">&nbsp;</td>
<td align="right" width="100%" NOWRAP class="buttons">
<div class="actionsContainer">
<input type="button" class="button" onclick="javascript:window.location='index.php?module=Campaigns&action=WizardHome&record={$fields.id.value}';" name="button" id="launch_wizard_button" value="{$MOD.LBL_TO_WIZARD_TITLE}" />&nbsp;
<input type="button" class="button" onclick="javascript:window.location='index.php?module=Campaigns&action=TrackDetailView&record={$fields.id.value}';" name="button" id="view_status_button" value="{$MOD.LBL_TRACK_BUTTON_LABEL}" />&nbsp;
<input id="viewRoiButtonId" type="button" class="button" onclick="javascript:window.location='index.php?module=Campaigns&action=RoiDetailView&record={$fields.id.value}';" name="button" id="view_roi_button" value="{$MOD.LBL_TRACK_ROI_BUTTON_LABEL}" />&nbsp;
</div>
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Campaigns_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_CAMPAIGN_INFORMATION' module='Campaigns'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table id='LBL_CAMPAIGN_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.status.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_STATUS' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.start_date.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.start_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_START_DATE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.start_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.start_date.value) <= 0}
{assign var="value" value=$fields.start_date.default_value }
{else}
{assign var="value" value=$fields.start_date.value }
{/if}
<span class="sugar_field" id="{$fields.start_date.name}">{$value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.campaign_type.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.campaign_type.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.campaign_type.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.campaign_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.campaign_type.name}" value="{ $fields.campaign_type.options }">
{ $fields.campaign_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.campaign_type.name}" value="{ $fields.campaign_type.value }">
{ $fields.campaign_type.options[$fields.campaign_type.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.end_date.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.end_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_END_DATE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.end_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.end_date.value) <= 0}
{assign var="value" value=$fields.end_date.default_value }
{else}
{assign var="value" value=$fields.end_date.value }
{/if}
<span class="sugar_field" id="{$fields.end_date.name}">{$value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.frequency.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.frequency.hidden}
{if $fields.campaign_type.value == "NewsLetter"}<div style='none' id='freq_label'>{$MOD.LBL_CAMPAIGN_FREQUENCY}</div>{/if}&nbsp;
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.frequency.hidden}
{counter name="panelFieldCount"}
<span id="frequency" class="sugar_field">{if $fields.campaign_type.value == "NewsLetter"}<div style='none' id='freq_field'>{$APP_LIST.newsletter_frequency_dom[$fields.frequency.value]}</div>{/if}&nbsp;</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.impressions.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.impressions.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_IMPRESSIONS' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.impressions.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.impressions.name}">
{sugar_number_format precision=0 var=$fields.impressions.value}
</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.budget.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.budget.hidden}
{capture name="label" assign="label"}{$MOD.LBL_CAMPAIGN_BUDGET} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.budget.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.budget.name}'>
{sugar_number_format var=$fields.budget.value }
</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.expected_cost.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.expected_cost.hidden}
{capture name="label" assign="label"}{$MOD.LBL_CAMPAIGN_EXPECTED_COST} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.expected_cost.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.expected_cost.name}'>
{sugar_number_format var=$fields.expected_cost.value }
</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.actual_cost.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actual_cost.hidden}
{capture name="label" assign="label"}{$MOD.LBL_CAMPAIGN_ACTUAL_COST} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actual_cost.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actual_cost.name}'>
{sugar_number_format var=$fields.actual_cost.value }
</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.expected_revenue.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.expected_revenue.hidden}
{capture name="label" assign="label"}{$MOD.LBL_CAMPAIGN_EXPECTED_REVENUE} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.expected_revenue.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.expected_revenue.name}'>
{sugar_number_format var=$fields.expected_revenue.value }
</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.objective.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.objective.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_OBJECTIVE' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.objective.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.objective.name|escape:'html'|url2html|nl2br}">{$fields.objective.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.content.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.content.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN_CONTENT' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.content.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.content.name|escape:'html'|url2html|nl2br}">{$fields.content.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_CAMPAIGN_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Campaigns'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_PANEL_ASSIGNMENT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.assigned_user_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_modified.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.team_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.team_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.team_name.hidden}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='' display='' labelSpan='' fieldSpan='' formName='' tabindex=1 displayType='renderDetailView'  	 }
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_entered.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){ldelim}
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {ldelim}
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['Campaigns_d'])
                    if(sugar_panel_collase['Campaigns_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            {rdelim}
        {rdelim});
</script>{literal}
<script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('DetailView');
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"campaigns_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"campaigns_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"campaign_activities","module":"Activities"},"prospectlists":{"relationship":"prospect_list_campaigns"},"emailmarketing":{"relationship":"campaign_email_marketing"},"queueitems":{"relationship":"campaign_emailman"},"log_entries":{"relationship":"campaign_campaignlog"},"tracked_urls":{"relationship":"campaign_campaigntrakers"},"leads":{"relationship":"campaign_leads"},"opportunities":{"relationship":"campaign_opportunities"},"contacts":{"relationship":"campaign_contacts"},"accounts":{"relationship":"campaign_accounts"},"forecastworksheet":{"relationship":"forecastworksheets_campaigns"},"following_link":{"relationship":"campaigns_following"},"favorite_link":{"relationship":"campaigns_favorite"},"commentlog_link":{"relationship":"campaigns_commentlog"},"locked_fields_link":{"relationship":"campaigns_locked_fields"},"assigned_user_link":{"relationship":"campaigns_assigned_user","module":"Users","id_name":"assigned_user_id"},"currencies":{"relationship":"campaigns_currencies","id_name":"currency_id","module":"Currencies"}}

YAHOO.util.Event.onContentReady('Campaigns_detailview_tabs', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
