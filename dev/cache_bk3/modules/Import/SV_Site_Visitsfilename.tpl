
{if strlen($fields.filename.value) <= 0}
{assign var="value" value=$fields.filename.default_value }
{else}
{assign var="value" value=$fields.filename.value }
{/if}  
<input type='text' name='default_value_filename' 
    id='default_value_filename' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >