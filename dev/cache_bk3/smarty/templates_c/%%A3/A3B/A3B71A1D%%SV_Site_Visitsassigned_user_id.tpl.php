<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsassigned_user_id.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['assigned_user_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['assigned_user_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['assigned_user_id']['value']);  endif; ?>  
<input type='text' name='default_value_assigned_user_id' 
    id='default_value_assigned_user_id' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >