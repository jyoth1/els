<?php /* Smarty version 2.6.11, created on 2019-05-29 13:38:48
         compiled from cache/modules/PdfManager/tpls/fae079a6-7e27-11e9-926a-42010aa00003.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'cache/modules/PdfManager/tpls/fae079a6-7e27-11e9-926a-42010aa00003.tpl', 99, false),array('function', 'sugar_number_format', 'cache/modules/PdfManager/tpls/fae079a6-7e27-11e9-926a-42010aa00003.tpl', 121, false),array('function', 'sugar_currency_format', 'cache/modules/PdfManager/tpls/fae079a6-7e27-11e9-926a-42010aa00003.tpl', 121, false),)), $this); ?>
<table border="0" cellspacing="2">
<tbody>
<tr>
<td rowspan="8" width="180%">
<p><img src="./themes/default/images/cinepolis_logo.png" alt="" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table style="height: 70px; width: 610px;" border="0">
<tbody>
<tr>
<td colspan="2"><span style="background-color: #333333; color: #ffffff;">&nbsp;Cinepolis Corporate Office Contact Address</span></td>
</tr>
<tr>
<td>&nbsp;Cinepolis Head Offce Address</td>
<td>&nbsp;3rd Floor, Plot No.58 Near Chimes Building, Sector 44, Gurgaon, Haryana, 122003, India</td>
</tr>
<tr>
<td>&nbsp;Cinepolis Head Office Phone Number</td>
<td>&nbsp;+91 8146699987</td>
</tr>
<tr>
<td>&nbsp;Cinepolis Head Office Email ID</td>
<td>&nbsp;contact@cinepolis.com</td>
</tr>
</tbody>
</table>
</td>
<td width="60%"><strong>Invoice</strong></td>
<td width="60%">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Invoice number:</td>
<td width="75%"><?php echo $this->_tpl_vars['fields']['quote_num']; ?>
</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Sales Person:</td>
<td width="75%"><?php if (isset ( $this->_tpl_vars['fields']['assigned_user_link']['name'] )):  echo $this->_tpl_vars['fields']['assigned_user_link']['name'];  endif; ?></td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Valid until:</td>
<td width="75%"><?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']; ?>
</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Purchase Order Num:</td>
<td width="75%"><?php echo $this->_tpl_vars['fields']['purchase_order_num']; ?>
</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Payment Terms:</td>
<td width="75%">
<p><?php echo $this->_tpl_vars['fields']['payment_terms']; ?>
</p>
</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">GST Number</td>
<td width="75%">
<p><?php echo $this->_tpl_vars['fields']['gst_number_c']; ?>
</p>
</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">PAN</td>
<td style="width: 70%;">
<p><?php echo $this->_tpl_vars['fields']['pan_number_c']; ?>
</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table style="width: 50%;" border="0" cellspacing="2">
<tbody>
<tr style="color: #ffffff;" bgcolor="#4B4B4B">
<td>Bill To</td>
<td>Ship To</td>
</tr>
<tr>
<td><?php echo $this->_tpl_vars['fields']['billing_contact_name']; ?>
</td>
<td><?php echo $this->_tpl_vars['fields']['shipping_contact_name']; ?>
</td>
</tr>
<tr>
<td><?php echo $this->_tpl_vars['fields']['billing_account_name']; ?>
</td>
<td><?php echo $this->_tpl_vars['fields']['shipping_account_name']; ?>
</td>
</tr>
<tr>
<td><?php echo $this->_tpl_vars['fields']['billing_address_street']; ?>
</td>
<td><?php echo $this->_tpl_vars['fields']['shipping_address_street']; ?>
</td>
</tr>
<tr>
<td><?php if ($this->_tpl_vars['fields']['billing_address_city'] != ""):  echo $this->_tpl_vars['fields']['billing_address_city']; ?>
,<?php endif; ?> <?php if ($this->_tpl_vars['fields']['billing_address_state'] != ""):  echo $this->_tpl_vars['fields']['billing_address_state']; ?>
,<?php endif; ?> <?php echo $this->_tpl_vars['fields']['billing_address_postalcode']; ?>
</td>
<td><?php if ($this->_tpl_vars['fields']['shipping_address_city'] != ""):  echo $this->_tpl_vars['fields']['shipping_address_city']; ?>
,<?php endif; ?> <?php if ($this->_tpl_vars['fields']['shipping_address_state'] != ""):  echo $this->_tpl_vars['fields']['shipping_address_state']; ?>
,<?php endif; ?> <?php echo $this->_tpl_vars['fields']['shipping_address_postalcode']; ?>
</td>
</tr>
<tr>
<td><?php echo $this->_tpl_vars['fields']['billing_address_country']; ?>
</td>
<td><?php echo $this->_tpl_vars['fields']['shipping_address_country']; ?>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p><?php $_from = $this->_tpl_vars['product_bundles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bundle']):
?> <?php if (count($this->_tpl_vars['bundle']['products'])): ?></p>
<p>&nbsp;</p>
<h3><?php echo $this->_tpl_vars['bundle']['name']; ?>
</h3>
<table style="width: 100%;" border="0">
<tbody>
<tr style="color: #ffffff;" bgcolor="#4B4B4B">
<td width="70%">Quantity</td>
<td width="175%">Part Number</td>
<td width="175%">Quoted Line Item</td>
<td width="70%">List Price</td>
<td width="70%">Unit Price</td>
<td width="70%">Ext. Price</td>
<td width="70%">Discount:</td>
</tr>
<?php $_from = $this->_tpl_vars['bundle']['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
<tr>
<td width="70%"><?php if (isset ( $this->_tpl_vars['product']['quantity'] )):  echo $this->_tpl_vars['product']['quantity'];  endif; ?></td>
<td width="175%"><?php if (isset ( $this->_tpl_vars['product']['mft_part_num'] )):  echo $this->_tpl_vars['product']['mft_part_num'];  endif; ?></td>
<td width="175%"><?php if (isset ( $this->_tpl_vars['product']['name'] )):  echo $this->_tpl_vars['product']['name'];  endif;  if (isset ( $this->_tpl_vars['product']['list_price'] )): ?><br /><?php echo $this->_tpl_vars['product']['description'];  endif; ?></td>
<td align="right" width="70%"><?php if (isset ( $this->_tpl_vars['product']['list_price'] )):  echo $this->_tpl_vars['product']['list_price'];  endif; ?></td>
<td align="right" width="70%"><?php if (isset ( $this->_tpl_vars['product']['discount_price'] )):  echo $this->_tpl_vars['product']['discount_price'];  endif; ?></td>
<td align="right" width="70%"><?php if (isset ( $this->_tpl_vars['product']['ext_price'] )):  echo $this->_tpl_vars['product']['ext_price'];  endif; ?></td>
<td align="right" width="70%"><?php if (isset ( $this->_tpl_vars['product']['discount_amount'] )): ?> <?php if (! empty ( $this->_tpl_vars['product']['discount_select'] )): ?> <?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['product']['discount_amount']), $this);?>
% <?php else: ?> <?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product']['discount_amount'],'currency_id' => $this->_tpl_vars['product']['currency_id']), $this);?>
 <?php endif; ?> <?php endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?></tbody>
</table>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<table style="width: 100%; margin: auto;" border="0">
<tbody>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Subtotal:</td>
<td align="right" width="45%"><?php echo $this->_tpl_vars['bundle']['subtotal']; ?>
</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Discount:</td>
<td align="right" width="45%"><?php echo $this->_tpl_vars['bundle']['deal_tot']; ?>
</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Discounted Subtotal:</td>
<td align="right" width="45%"><?php echo $this->_tpl_vars['bundle']['new_sub']; ?>
</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Total</td>
<td align="right" width="45%"><?php echo $this->_tpl_vars['bundle']['total']; ?>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><?php endif; ?> <?php endforeach; endif; unset($_from); ?></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 100%; margin: auto;" border="0">
<tbody>
<tr>
<td width="200%">&nbsp;</td>
<td style="font-weight: bold;" colspan="2" align="center" width="150%"><strong>Grand Total</strong></td>
<td width="75%">&nbsp;</td>
<td align="right" width="75%">&nbsp;</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">Currency:</td>
<td width="75%"><?php echo $this->_tpl_vars['fields']['currency_iso']; ?>
</td>
<td width="75%">Subtotal:</td>
<td align="right" width="75%"><?php echo $this->_tpl_vars['fields']['subtotal']; ?>
</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td align="right" width="75%">&nbsp;</td>
<td width="75%">Discount:</td>
<td align="right" width="75%"><?php echo $this->_tpl_vars['fields']['deal_tot']; ?>
</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">Discounted Subtotal:</td>
<td align="right" width="75%"><?php echo $this->_tpl_vars['fields']['new_sub']; ?>
</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">Tax Rate:</td>
<td width="75%"><?php echo $this->_tpl_vars['fields']['taxrate_value']; ?>
</td>
<td width="75%">Tax:</td>
<td align="right" width="75%"><?php echo $this->_tpl_vars['fields']['tax']; ?>
</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">Shipping Provider:</td>
<td width="75%"><?php echo $this->_tpl_vars['fields']['shipper_name']; ?>
</td>
<td width="75%">Shipping:</td>
<td align="right" width="75%"><?php echo $this->_tpl_vars['fields']['shipping']; ?>
</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">Total</td>
<td align="right" width="75%"><?php echo $this->_tpl_vars['fields']['total']; ?>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>