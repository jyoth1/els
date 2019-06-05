
{if strlen($fields.acl_team_set_id.value) <= 0}
{assign var="value" value=$fields.acl_team_set_id.default_value }
{else}
{assign var="value" value=$fields.acl_team_set_id.value }
{/if}  
<input type='text' name='default_value_acl_team_set_id' 
    id='default_value_acl_team_set_id' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >