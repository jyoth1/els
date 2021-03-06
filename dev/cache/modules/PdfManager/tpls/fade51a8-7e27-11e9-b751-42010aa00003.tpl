<table border="0" cellspacing="2">
<tbody>
<tr>
<td rowspan="4" width="180%"><img src="./themes/default/images/cinepolis_logo.png" alt="" /></td>
<td width="60%"><strong>Quote</strong></td>
<td width="60%">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Quote number:</td>
<td width="75%">{$fields.quote_num}</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Sales Person:</td>
<td width="75%">{if isset($fields.assigned_user_link.name)}{$fields.assigned_user_link.name}{/if}</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%">Valid until:</td>
<td width="75%">{$fields.date_quote_expected_closed}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 50%;" border="0" cellspacing="2">
<tbody>
<tr style="color: #ffffff;" bgcolor="#4B4B4B">
<td>Bill To</td>
<td>Ship To</td>
</tr>
<tr>
<td>{$fields.billing_contact_name}</td>
<td>{$fields.shipping_contact_name}</td>
</tr>
<tr>
<td>{$fields.billing_account_name}</td>
<td>{$fields.shipping_account_name}</td>
</tr>
<tr>
<td>{$fields.billing_address_street}</td>
<td>{$fields.shipping_address_street}</td>
</tr>
<tr>
<td>{if $fields.billing_address_city!=""}{$fields.billing_address_city},{/if} {if $fields.billing_address_state!=""}{$fields.billing_address_state},{/if} {$fields.billing_address_postalcode}</td>
<td>{if $fields.shipping_address_city!=""}{$fields.shipping_address_city},{/if} {if $fields.shipping_address_state!=""}{$fields.shipping_address_state},{/if} {$fields.shipping_address_postalcode}</td>
</tr>
<tr>
<td>{$fields.billing_address_country}</td>
<td>{$fields.shipping_address_country}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>{foreach from=$product_bundles item="bundle"} {if $bundle.products|@count}</p>
<p>&nbsp;</p>
<h3>{$bundle.name}</h3>
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
{foreach from=$bundle.products item="product"}
<tr>
<td width="70%">{if isset($product.quantity)}{$product.quantity}{/if}</td>
<td width="175%">{if isset($product.mft_part_num)}{$product.mft_part_num}{/if}</td>
<td width="175%">{if isset($product.name)}{$product.name}{/if}{if isset($product.list_price)}<br />{$product.description}{/if}</td>
<td align="right" width="70%">{if isset($product.list_price)}{$product.list_price}{/if}</td>
<td align="right" width="70%">{if isset($product.discount_price)}{$product.discount_price}{/if}</td>
<td align="right" width="70%">{if isset($product.ext_price)}{$product.ext_price}{/if}</td>
<td align="right" width="70%">{if isset($product.discount_amount)} {if !empty($product.discount_select)} {sugar_number_format var=$product.discount_amount}% {else} {sugar_currency_format var=$product.discount_amount currency_id=$product.currency_id} {/if} {/if}</td>
</tr>
{/foreach}</tbody>
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
<td align="right" width="45%">{$bundle.subtotal}</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Discount:</td>
<td align="right" width="45%">{$bundle.deal_tot}</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Discounted Subtotal:</td>
<td align="right" width="45%">{$bundle.new_sub}</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%">Total</td>
<td align="right" width="45%">{$bundle.total}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>{/if} {/foreach}</p>
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
<td width="75%">{$fields.currency_iso}</td>
<td width="75%">Subtotal:</td>
<td align="right" width="75%">{$fields.subtotal}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td align="right" width="75%">&nbsp;</td>
<td width="75%">Discount:</td>
<td align="right" width="75%">{$fields.deal_tot}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">Discounted Subtotal:</td>
<td align="right" width="75%">{$fields.new_sub}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">Tax Rate:</td>
<td width="75%">{$fields.taxrate_value}</td>
<td width="75%">Tax:</td>
<td align="right" width="75%">{$fields.tax}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">Shipping Provider:</td>
<td width="75%">{$fields.shipper_name}</td>
<td width="75%">Shipping:</td>
<td align="right" width="75%">{$fields.shipping}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">Total</td>
<td align="right" width="75%">{$fields.total}</td>
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