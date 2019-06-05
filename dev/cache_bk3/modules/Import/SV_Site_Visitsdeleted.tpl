
{if strval($fields.deleted.value) == "1" || strval($fields.deleted.value) == "yes" || strval($fields.deleted.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="default_value_deleted" value="0"> 
<input type="checkbox" id="default_value_deleted" 
name="default_value_deleted" 
value="1" title='' tabindex="1" {$checked} >