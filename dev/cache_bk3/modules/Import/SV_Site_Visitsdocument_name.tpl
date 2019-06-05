
{if strlen($fields.document_name.value) <= 0}
{assign var="value" value=$fields.document_name.default_value }
{else}
{assign var="value" value=$fields.document_name.value }
{/if}  
<input type='text' name='default_value_document_name' 
    id='default_value_document_name' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >