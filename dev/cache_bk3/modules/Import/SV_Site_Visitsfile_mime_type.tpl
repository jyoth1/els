
{if strlen($fields.file_mime_type.value) <= 0}
{assign var="value" value=$fields.file_mime_type.default_value }
{else}
{assign var="value" value=$fields.file_mime_type.value }
{/if}  
<input type='text' name='default_value_file_mime_type' 
    id='default_value_file_mime_type' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >