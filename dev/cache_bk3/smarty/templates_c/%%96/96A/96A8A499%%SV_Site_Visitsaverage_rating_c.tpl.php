<?php /* Smarty version 2.6.11, created on 2019-05-27 19:55:43
         compiled from cache/modules/Import/SV_Site_Visitsaverage_rating_c.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_number_format', 'cache/modules/Import/SV_Site_Visitsaverage_rating_c.tpl', 8, false),)), $this); ?>

<?php if (strlen ( $this->_tpl_vars['fields']['average_rating_c']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['average_rating_c']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['average_rating_c']['value']);  endif; ?>  
<input type='text' name='default_value_average_rating_c' 
id='default_value_average_rating_c' size='30' maxlength='11' value='<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='1'    >