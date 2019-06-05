
{if strlen($fields.team_id.value) <= 0}
{assign var="value" value=$fields.team_id.default_value }
{else}
{assign var="value" value=$fields.team_id.value }
{/if}  
<input type='text' name='default_value_team_id' 
    id='default_value_team_id' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >