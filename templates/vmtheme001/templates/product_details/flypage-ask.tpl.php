<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__);
 ?>

<?php echo $buttons_header // The PDF, Email and Print buttons ?>

<?php 
if( $this->get_cfg( 'showPathway' )) {
	echo "<div class=\"pathway\">$navigation_pathway</div>";
} 
if( $this->get_cfg( 'product_navigation', 1 )) {
	if( !empty( $previous_product )) {
		echo '<a class="previous_page" href="'.$previous_product_url.'">'.shopMakeHtmlSafe($previous_product['product_name']).'</a>';
	}
	if( !empty( $next_product )) {		
		echo '<a class="next_page" href="'.$next_product_url.'">'.shopMakeHtmlSafe($next_product['product_name']).'</a>';
	}
}
?>
<br style="clear:both;" />
<table border="0" align="center" style="width: 100%;" >
    <tr>
	    <td rowspan="1" colspan="2">
                <h2 class="product_name"><?php echo $product_name; echo ' ' . $edit_link; ?></h2>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td class="product_separator" colspan="2">
	        <?php echo $product_s_desc ?>
	    </td>
    </tr>
    <tr>
	    <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td align="center" valign="top" width="220" class="product_image_container">
            <?php echo $product_image ?>
        </td>
        <td valign="top" align="right">
            <?php echo $addtocart ?>
        </td></tr>
    <tr>
  <td rowspan="1" align="center"><?php echo $manufacturer_link ?><br /></td>
  <td>&nbsp;</td>
</tr>
<tr>
      <td valign="top" align="left"><?php echo $product_price ?><br /></td>
</tr>
<tr>
      <td valign="top"><?php echo $product_packaging ?><br /></td>
</tr>
	<tr>
	  <td colspan="2" class="product_separator ask_seller"><?php echo $ask_seller ?></td>
	</tr>
	<tr>
	    <td rowspan="1" colspan="2" class="product_description">
            <?php echo $product_description ?>
	        <br/><span style="font-style: italic;"><?php echo $file_list ?></span>
        </td>
	</tr>
	<tr>
	    <td colspan="2" class="product_separator">
	    <?php  echo $related_products ?>
	    </td>
	</tr>
    <tr>
	    <td colspan="2">
        <div style="text-align: center;">
                </div>
                <?php echo $navigation_childlist ?></td>
	</tr>
    
	<tr>
	  <td colspan="2"><?php echo $product_reviewform ?><br /></td>
	</tr>
  <tr>
	  <td colspan="3"><div style="text-align: center;"><?php echo $vendor_link ?><br /></div><br /></td>
	</tr>
</table><br style="clear:both"/>
<div class="back_button"><a href='javascript:history.go(-1)'> <?php echo $VM_LANG->_('BACK') ?></a></div>
