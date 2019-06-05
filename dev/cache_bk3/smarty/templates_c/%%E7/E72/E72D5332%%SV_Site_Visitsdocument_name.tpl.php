<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:43
         compiled from cache/modules/Import/SV_Site_Visitsdocument_name.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['document_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['document_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['document_name']['value']);  endif; ?>  
<input type='text' name='default_value_document_name' 
    id='default_value_document_name' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >