<?php /* Smarty version 2.6.11, created on 2019-05-30 11:13:04
         compiled from modules/Reports/templates/_template_pagination.tpl */ ?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="paginationTable">
	<tr>
		<td align="right">&nbsp;&nbsp;<span class='pageNumbers'><button type='button' title='<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_START']; ?>
' <?php if (isset ( $this->_tpl_vars['start_link_onclick'] )): ?> <?php echo $this->_tpl_vars['start_link_onclick']; ?>
 <?php endif; ?> class='button' <?php if (( $this->_tpl_vars['start_link_disabled'] )): ?> disabled <?php endif; ?>><?php echo $this->_tpl_vars['start_link_ImagePath']; ?>
</button>&nbsp;<button type='button' title='<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_PREVIOUS']; ?>
' <?php if (isset ( $this->_tpl_vars['prev_link_onclick'] )): ?> <?php echo $this->_tpl_vars['prev_link_onclick']; ?>
 <?php endif; ?> class='button' <?php if (( $this->_tpl_vars['prev_link_disabled'] )): ?> disabled <?php endif; ?>><?php echo $this->_tpl_vars['prev_link_ImagePath']; ?>
</button>&nbsp;(<?php echo $this->_tpl_vars['start_range']; ?>
 - <?php echo $this->_tpl_vars['end_range']; ?>
 <?php echo $this->_tpl_vars['mod_strings']['LBL_OF']; ?>
 <?php echo $this->_tpl_vars['total_count']; ?>
)&nbsp;<button type='button' title='<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_NEXT']; ?>
' <?php if (isset ( $this->_tpl_vars['next_link_onclick'] )): ?> <?php echo $this->_tpl_vars['next_link_onclick']; ?>
 <?php endif; ?> class='button' <?php if (( $this->_tpl_vars['next_link_disabled'] )): ?> disabled <?php endif; ?>><?php echo $this->_tpl_vars['next_link_ImagePath']; ?>
</button>&nbsp; <button type='button' title='<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_END']; ?>
' <?php if (isset ( $this->_tpl_vars['end_link_onclick'] )): ?> <?php echo $this->_tpl_vars['end_link_onclick']; ?>
 <?php endif; ?> class='button' <?php if (( $this->_tpl_vars['end_link_disabled'] )): ?> disabled <?php endif; ?>><?php echo $this->_tpl_vars['end_link_ImagePath']; ?>
</button></span>&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
</table>		