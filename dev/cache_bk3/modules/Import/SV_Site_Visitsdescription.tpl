
{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  


    

<textarea  id='default_value_description' name='default_value_description'
rows="6" 
cols="80" 
title='' tabindex="1" 
 >{$value}</textarea>


