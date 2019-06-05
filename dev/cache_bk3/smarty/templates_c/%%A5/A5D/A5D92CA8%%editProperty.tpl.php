<?php /* Smarty version 2.6.11, created on 2019-05-27 17:30:27
         compiled from modules/ModuleBuilder/tpls/editProperty.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_csrf_form_token', 'modules/ModuleBuilder/tpls/editProperty.tpl', 14, false),)), $this); ?>
<form name="editProperty" id="editProperty" onsubmit='return false;'>
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='saveProperty'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
'>
<?php if (isset ( $this->_tpl_vars['view_package'] )): ?><input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'><?php endif; ?>
<input type='hidden' name='subpanel' value='<?php echo $this->_tpl_vars['subpanel']; ?>
'>
<input type='hidden' name='to_pdf' value='true'>

<?php if (isset ( $this->_tpl_vars['MB'] )): ?>
<input type='hidden' name='MB' value='<?php echo $this->_tpl_vars['MB']; ?>
'>
<input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<?php endif; ?>

<?php echo '
<script>
    function saveAction() {
'; ?>

        var widthUnit = '<?php echo $this->_tpl_vars['widthUnit']; ?>
';
<?php echo '
        for(var i=0, l=document.editProperty.elements.length; i<l; i++) {
            var field = document.editProperty.elements[i];
            if (field.className.indexOf(\'save\') != -1 )
            {
                if (field.value != \'no_change\')
                {
                    var id = field.id.substring(\'editProperty_\'.length);
                    var fieldSpan = document.getElementById(id);
                    var value = YAHOO.lang.escapeHTML(field.value);

                    // If editing a width on list layouts, update the unit
                    if (field.name.toLowerCase().indexOf(\'width\') != -1) {
                        value = value.replace(\'px\', \'\').replace(\'%\', \'\').trim();
                        fieldSpan.nextElementSibling.innerHTML = field.value == \'\' || isNaN(+value) ? \'\' : widthUnit;
                    }
                    fieldSpan.innerHTML = value;
                }
            }
        }
    }

	function switchLanguage( language )
	{
'; ?>

        var request = 'module=ModuleBuilder&action=editProperty&view_module=<?php echo $this->_tpl_vars['editModule']; ?>
&selected_lang=' + language ;
        <?php $_from = $this->_tpl_vars['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['property']):
?>
                request += '&id_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['id']; ?>
&name_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['name']; ?>
&title_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['title']; ?>
&label_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['label']; ?>
' ;
        <?php endforeach; endif; unset($_from);  echo '
        ModuleBuilder.getContent( request ) ;
    }

</script>
'; ?>


<table style="width:100%">

	<?php $_from = $this->_tpl_vars['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['property']):
?>
	<tr>
		<td width="25%" align='right'><?php if (isset ( $this->_tpl_vars['property']['title'] )):  echo $this->_tpl_vars['property']['title'];  else:  echo $this->_tpl_vars['property']['name'];  endif; ?>:</td>
		<td width="75%">
			<input class='save' type='hidden' name='<?php echo $this->_tpl_vars['property']['name']; ?>
' id='editProperty_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
' value='no_change'>
			<?php if (isset ( $this->_tpl_vars['property']['hidden'] )): ?>
				<?php echo $this->_tpl_vars['property']['value']; ?>

			<?php else: ?>
				<?php if ($this->_tpl_vars['key'] == 'width'): ?>
					<select id="selectWidthClass_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
" onchange="handleClassSelection(this)">
						<option value="" selected="selected">default</option>
                        <?php $_from = $this->_tpl_vars['defaultWidths']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['width']):
?>
                            <option value="<?php echo $this->_tpl_vars['width']; ?>
"><?php echo $this->_tpl_vars['width']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
						<option value="custom">custom</option>
					</select>
					<input id="widthValue_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
" onchange="handleWidthChange(this.value)" value="<?php echo $this->_tpl_vars['property']['value']; ?>
" style="display:none">
                    <?php echo '
                    <script>
                    var propertyValue, widthValue, saveWidthProperty, selectWidthClass;
                    '; ?>


                    propertyValue = '<?php echo $this->_tpl_vars['property']['value']; ?>
';
                    saveWidthProperty = document.getElementById('editProperty_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
');
                    widthValue = document.getElementById('widthValue_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
');
                    selectWidthClass = document.getElementById('selectWidthClass_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
');

                    <?php echo '
                    if (propertyValue != \'\') {
                        if (isNaN(propertyValue)) {
                            selectWidthClass.value = propertyValue;
                            widthValue.style.display = \'none\';
                            widthValue.value = \'\';
                        } else {
                            selectWidthClass.value = \'custom\';
                            widthValue.style.display = \'inline\';
                            widthValue.value = isNaN(propertyValue) ? \'\' : propertyValue;
                        }
                    }
                    function handleClassSelection(el) {
                        var selected = el.options[el.selectedIndex].value;

                        if (selected === \'custom\') {
                            widthValue.style.display = \'inline\';
                            widthValue.value = isNaN(propertyValue) ? \'\' : propertyValue;
                        } else {
                            widthValue.style.display = \'none\';
                            widthValue.value = \'\';
                            saveWidthProperty.value = selected;
                        }
                    }

                    function handleWidthChange(w) {
                        saveWidthProperty.value = w;
                    }
                    </script>
                    '; ?>

				<?php else: ?>
                    <input onchange='document.getElementById("editProperty_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
").value = this.value' value='<?php echo $this->_tpl_vars['property']['value']; ?>
'>
                <?php endif; ?>
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td><input class="button" type="Button" name="save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" onclick="saveAction(); ModuleBuilder.submitForm('editProperty'); ModuleBuilder.closeAllTabs();"></td>
	</tr>
</table>
</form>

<script>
ModuleBuilder.helpSetup('layoutEditor','property', 'east');
</script>

