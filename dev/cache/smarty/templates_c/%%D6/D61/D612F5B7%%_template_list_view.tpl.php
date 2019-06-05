<?php /* Smarty version 2.6.11, created on 2019-05-30 11:13:04
         compiled from modules/Reports/templates/_template_list_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'in_array', 'modules/Reports/templates/_template_list_view.tpl', 65, false),)), $this); ?>
<div class="listViewBody nosearch">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="list view">
<?php if (( $this->_tpl_vars['show_pagination'] != "" )):  echo $this->_tpl_vars['pagination_data']; ?>

<?php endif; ?>
<tr height="20">
<?php if (( $this->_tpl_vars['isSummaryCombo'] )): ?>
<th scope="col" align='center'  valign=middle nowrap>&nbsp;</th>
<?php endif;  if (( $this->_tpl_vars['isSummaryComboHeader'] )): ?>
<td><span id="img_<?php echo $this->_tpl_vars['divId']; ?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo $this->_tpl_vars['divId']; ?>
')"><img width="8" height="8" border="0" absmiddle="" alt=$mod_strings.LBL_SHOW src="<?php echo $this->_tpl_vars['image_path']; ?>
advanced_search.gif"/></a></span></td>
<?php endif;  
	$count = 0;
	$this->assign('count', $count);
  $_from = $this->_tpl_vars['header_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['cell']):
?>
	<?php if (( ( $this->_tpl_vars['args']['group_column_is_invisible'] != "" ) && ( $this->_tpl_vars['args']['group_pos'] == $this->_tpl_vars['count'] ) )):  	
	$count = $count + 1;
	$this->assign('count', $count);
 ?>
	<?php else: ?>
		<?php if (strtolower ( $this->_tpl_vars['field_types'][$this->_tpl_vars['module']] ) == 'currency' || strtolower ( $this->_tpl_vars['field_types'][$this->_tpl_vars['module']] ) == 'int' || strtolower ( $this->_tpl_vars['field_types'][$this->_tpl_vars['module']] ) == 'float' || strtolower ( $this->_tpl_vars['field_types'][$this->_tpl_vars['module']] ) == 'double' || strtolower ( $this->_tpl_vars['field_types'][$this->_tpl_vars['module']] ) == 'decimal'): ?>
			<th scope="num" align='center'  valign=middle nowrap>
		<?php else: ?>
	<th scope="col" align='center'  valign=middle nowrap>	
		<?php endif; ?>
	<?php echo $this->_tpl_vars['cell']; ?>

	<?php endif;  endforeach; endif; unset($_from); ?>
</tr>

<?php 
require_once('modules/Reports/templates/templates_reports.php');
$reporter = $this->get_template_vars('reporter');
$args = $this->get_template_vars('args');
$got_row = 0;
while (( $row = $reporter->get_next_row() ) != 0 ) {
	$got_row = 1;
	template_list_row($row,true);
 ?>
<tr height=20 class="<?php echo $this->_tpl_vars['row_class'][$this->_tpl_vars['module']]; ?>
" onmouseover="setPointer(this, '<?php echo $this->_tpl_vars['rownum']; ?>
', 'over', '<?php echo $this->_tpl_vars['bg_color']; ?>
', '<?php echo $this->_tpl_vars['hilite_bg']; ?>
', '<?php echo $this->_tpl_vars['click_bg']; ?>
');" onmouseout="setPointer(this, '<?php echo $this->_tpl_vars['rownum']; ?>
', 'out', '<?php echo $this->_tpl_vars['bg_color']; ?>
', '<?php echo $this->_tpl_vars['hilite_bg']; ?>
', '<?php echo $this->_tpl_vars['click_bg']; ?>
');" onmousedown="setPointer(this, '<?php echo $this->_tpl_vars['rownum']; ?>
', 'click', '<?php echo $this->_tpl_vars['bg_color']; ?>
', '<?php echo $this->_tpl_vars['hilite_bg']; ?>
', '<?php echo $this->_tpl_vars['click_bg']; ?>
');">
<?php if (( $this->_tpl_vars['isSummaryComboHeader'] )): ?>
<td><span id="img_<?php echo $this->_tpl_vars['divId']; ?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo $this->_tpl_vars['divId']; ?>
')"><img width="8" height="8" border="0" absmiddle="" alt=$mod_strings.LBL_SHOW src="<?php echo $this->_tpl_vars['image_path']; ?>
advanced_search.gif"/></a></span></td>
<?php endif;  
	$count = 0;
	$this->assign('count', $count);
  $this->assign('scope_row', true);  $_from = $this->_tpl_vars['column_row']['cells']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['cell']):
?>
	<?php if (( ( $this->_tpl_vars['column_row']['group_column_is_invisible'] != "" ) && ( ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['column_row']['group_pos']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['column_row']['group_pos'])) ) )):  	
	$count = $count + 1;
	$this->assign('count', $count);
 ?>
	<?php else: ?>
	<td width="<?php echo $this->_tpl_vars['width']; ?>
%" valign=TOP class="<?php echo $this->_tpl_vars['row_class'][$this->_tpl_vars['module']]; ?>
" bgcolor="<?php echo $this->_tpl_vars['bg_color']; ?>
" <?php if ($this->_tpl_vars['scope_row']): ?> scope='row' <?php endif; ?>>
	
	<?php if ($this->_tpl_vars['cell'] == ''): ?>
   		&nbsp;
   	<?php else: ?>
		<?php echo $this->_tpl_vars['cell']; ?>

	<?php endif; ?>
		
	<?php endif; ?>
	<?php $this->assign('scope_row', false);  endforeach; endif; unset($_from); ?>
</tr>

<?php 
}
if (!$got_row) {
	echo template_list_view_no_results($args);
} // if
echo template_pagination_row($args);
echo template_end_table($args);
echo "</div>";
template_query_table($reporter);
 ?>