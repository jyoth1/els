<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsfilename.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['filename']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['filename']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['filename']['value']);  endif; ?>  
<input type='text' name='default_value_filename' 
    id='default_value_filename' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >