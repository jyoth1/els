<?php /* Smarty version 2.6.11, created on 2019-05-29 10:43:12
         compiled from modules/PdfManager/tpls/getFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/PdfManager/tpls/getFields.tpl', 13, false),array('function', 'sugar_translate', 'modules/PdfManager/tpls/getFields.tpl', 13, false),)), $this); ?>
<?php echo smarty_function_html_options(array('name' => 'field','id' => 'field','selected' => $this->_tpl_vars['selectedField'],'values' => $this->_tpl_vars['fieldsForSelectedModule'],'options' => $this->_tpl_vars['fieldsForSelectedModule'],'onChange' => "SUGAR.PdfManager.loadFields(YAHOO.util.Dom.get('base_module').value, this.value)"), $this); if ($this->_tpl_vars['fieldsForSubModule']): ?> <?php echo smarty_function_html_options(array('name' => 'subField','id' => 'subField','values' => $this->_tpl_vars['fieldsForSubModule'],'options' => $this->_tpl_vars['fieldsForSubModule']), $this); endif; ?> <input type="button" class="button" name="pdfManagerInsertField" id="pdfManagerInsertField" value="<?php echo smarty_function_sugar_translate(array('module' => 'PdfManager','label' => 'LBL_BTN_INSERT'), $this);?>
" onclick="SUGAR.PdfManager.insertField(YAHOO.util.Dom.get('field'), YAHOO.util.Dom.get('subField'));" />