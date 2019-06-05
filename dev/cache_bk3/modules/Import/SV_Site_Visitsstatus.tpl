
{if strlen($fields.status.value) <= 0}
{assign var="value" value=$fields.status.default_value }
{else}
{assign var="value" value=$fields.status.value }
{/if}  
<input type='text' name='default_value_status' 
    id='default_value_status' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >