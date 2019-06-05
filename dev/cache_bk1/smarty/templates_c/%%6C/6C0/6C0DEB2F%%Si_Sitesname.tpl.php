<?php /* Smarty version 2.6.11, created on 2019-05-27 09:32:23
         compiled from cache/modules/Import/Si_Sitesname.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='default_value_name' 
    id='default_value_name' size='30' 
    maxlength='150' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >