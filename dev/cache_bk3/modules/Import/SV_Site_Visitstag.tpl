
{if strlen($fields.tag.value) <= 0}
{assign var="value" value=$fields.tag.default_value }
{else}
{assign var="value" value=$fields.tag.value }
{/if}  
<input type='text' name='default_value_tag' 
    id='default_value_tag' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >