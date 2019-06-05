<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitscreated_by.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['created_by']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['created_by']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['created_by']['value']);  endif; ?>  
<input type='text' name='default_value_created_by' 
    id='default_value_created_by' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >