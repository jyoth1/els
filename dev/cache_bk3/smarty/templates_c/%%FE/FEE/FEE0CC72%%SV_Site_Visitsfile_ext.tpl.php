<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsfile_ext.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['file_ext']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['file_ext']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['file_ext']['value']);  endif; ?>  
<input type='text' name='default_value_file_ext' 
    id='default_value_file_ext' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >