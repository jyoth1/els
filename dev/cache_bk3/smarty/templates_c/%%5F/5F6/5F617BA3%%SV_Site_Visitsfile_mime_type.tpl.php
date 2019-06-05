<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsfile_mime_type.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['file_mime_type']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['file_mime_type']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['file_mime_type']['value']);  endif; ?>  
<input type='text' name='default_value_file_mime_type' 
    id='default_value_file_mime_type' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >