
{if strlen($fields.file_ext.value) <= 0}
{assign var="value" value=$fields.file_ext.default_value }
{else}
{assign var="value" value=$fields.file_ext.value }
{/if}  
<input type='text' name='default_value_file_ext' 
    id='default_value_file_ext' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >