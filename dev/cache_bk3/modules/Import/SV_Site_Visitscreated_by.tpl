
{if strlen($fields.created_by.value) <= 0}
{assign var="value" value=$fields.created_by.default_value }
{else}
{assign var="value" value=$fields.created_by.value }
{/if}  
<input type='text' name='default_value_created_by' 
    id='default_value_created_by' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >