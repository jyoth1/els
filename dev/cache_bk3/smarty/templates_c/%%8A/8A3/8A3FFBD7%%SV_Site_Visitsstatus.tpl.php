<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsstatus.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['status']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['status']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['status']['value']);  endif; ?>  
<input type='text' name='default_value_status' 
    id='default_value_status' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >