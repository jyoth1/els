
{if strlen($fields.lowest_score_c.value) <= 0}
{assign var="value" value=$fields.lowest_score_c.default_value }
{else}
{assign var="value" value=$fields.lowest_score_c.value }
{/if}  
<input type='text' name='default_value_lowest_score_c' 
id='default_value_lowest_score_c' size='30' maxlength='11' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >