
    <span class="dateTime">
{assign var=date_value value=$fields.active_date.value }
<input class="date_input" autocomplete="off" type="text" name="default_value_active_date" id="default_value_active_date" value="{$date_value}" title=''  tabindex='1'    size="11" maxlength="10" >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="default_value_active_date_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "default_value_active_date",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "default_value_active_date_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
