
{if strlen($fields.assigned_user_id.value) <= 0}
{assign var="value" value=$fields.assigned_user_id.default_value }
{else}
{assign var="value" value=$fields.assigned_user_id.value }
{/if}  
<input type='text' name='default_value_assigned_user_id' 
    id='default_value_assigned_user_id' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >