<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:43
         compiled from cache/modules/Import/SV_Site_Visitsid.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['id']['value']);  endif; ?>  
<input type='text' name='default_value_id' 
    id='default_value_id' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >