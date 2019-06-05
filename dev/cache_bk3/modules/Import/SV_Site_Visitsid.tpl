
{if strlen($fields.id.value) <= 0}
{assign var="value" value=$fields.id.default_value }
{else}
{assign var="value" value=$fields.id.value }
{/if}  
<input type='text' name='default_value_id' 
    id='default_value_id' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >