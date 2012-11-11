<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>
<?php global $desc; ?>
<div class="border">
<!-- The product name DIV. -->
 <?php if( $show_product_name ) : ?>
<div>
<a class="product_name" title="<?php echo $product_name ?>" href="<?php echo $product_link ?>"><?php echo $product_name; ?></a>
<br />
</div>
<?php endif;?>

<!-- The product image DIV. -->
<div class="pruduct_image">

<a title="<?php echo $product_name ?>" href="<?php echo $product_link ?>">
	<?php
		// Print the product image or the "no image available" image
		echo ps_product::image_tag( $product_thumb_image, "alt=\"".$product_name."\"");
	?>
</a>

</div>
<!-- The product Description DIV. -->
		<?php if ($desc) { ?>
			 <div class="productDescription"> <?php echo $desc; ?> </div>
		<?php  } ?>
		<!-- END The product Description DIV. -->
<!-- The product price DIV. -->
<div class="imageBorder2-bottom">
    <div class="imageBorder2-top">
        <div class="imageBorder2-right">
            <div class="imageBorder2-left">
                <div class="imageBorder2-bottom-right">
                    <div class="imageBorder2-bottom-left">
                        <div class="imageBorder2-top-right">
                            <div class="imageBorder2-top-left">
                                <div class="imageBorder2-indent">
                                    <div class="width">
<?php if( !empty($price) ) { ?>
	<div class="box_product_price"><em>Price:</em><?php echo $price; ?> </div>
<?php } ?>

<!-- The add to cart DIV. -->
<div class="product_buttons">
	<div style="padding: 0px 0px 0px 0px;">
    	<div class="width">
			<a class="details" title="<?php echo $product_name ?>" href="<?php echo $product_link ?>"><?php echo "Details" ?></a>
<?php
if( !empty($addtocart_link) ) {
	?>
	<form action="<?php echo  $mm_action_url ?>index.php" method="post" name="addtocart" id="addtocart" style="width:81px; margin:auto">
    <input type="hidden" name="option" value="com_virtuemart" />
    <input type="hidden" name="page" value="shop.cart" />
    <input type="hidden" name="Itemid" value="<?php echo ps_session::getShopItemid(); ?>" />
    <input type="hidden" name="func" value="cartAdd" />
    <input type="hidden" name="prod_id" value="<?php echo $product_id; ?>" />
    <input type="hidden" name="product_id" value="<?php echo $product_id ?>" />
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="set_price[]" value="" />
    <input type="hidden" name="adjust_price[]" value="" />
    <input type="hidden" name="master_product[]" value="" />
    <input type="submit" class="addtocart_button_module" value="<?php echo $VM_LANG->_('PHPSHOP_CART_ADD_TO') ?>" title="<?php echo $VM_LANG->_('PHPSHOP_CART_ADD_TO') ?>" />
    </form>
	<?php
}
?>

</div></div></div>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>