<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:44
         compiled from cache/modules/Import/SV_Site_Visitsdeleted.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="default_value_deleted" value="0"> 
<input type="checkbox" id="default_value_deleted" 
name="default_value_deleted" 
value="1" title='' tabindex="1" <?php echo $this->_tpl_vars['checked']; ?>
 >