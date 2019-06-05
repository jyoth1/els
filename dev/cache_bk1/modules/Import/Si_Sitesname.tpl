
{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='default_value_name' 
    id='default_value_name' size='30' 
    maxlength='150' 
    value='{$value}' title=''  tabindex='1'      >