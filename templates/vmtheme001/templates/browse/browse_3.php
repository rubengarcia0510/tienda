<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__);
 ?>

<div class="imageBorder-bottom">
    <div class="imageBorder-top">
        <div class="imageBorder-right">
            <div class="imageBorder-left">
                <div class="imageBorder-bottom-right">
                    <div class="imageBorder-bottom-left">
                        <div class="imageBorder-top-right">
                            <div class="imageBorder-top-left equal">
                                <div class="imageBorder-item-padding">
                                    <div class="browseProductContainer">
                                        <h2><a class="product_name" href="<?php echo $product_flypage ?>"><?php echo $product_name ?></a></h2>
                                        <div class="pruduct_image"> 
                                        	<a href="<?php echo $product_flypage ?>" title="<?php echo $product_name ?>">
                                            	<?php echo ps_product::image_tag( $product_thumb_image, 'class="browseProductImage" border="0" title="'.$product_name.'" alt="'.$product_name .'"' ) ?> 
                                             </a> 
                                        </div>
                                        <div class="product_desc"><?php echo $product_s_desc ?></div>
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
                                                                                <div class="product_price">
                                                                                	<?php echo $product_price ?> 
                                                                                </div>
                                                                                <div class="product_buttons">
                                                                                	<div style="padding:0px 0px 0px 15px;">
                                                                                    	<div class="width">
                                                                                            <a href="<?php echo $product_flypage ?>"><?php echo "Details" ?></a>
                                                                                            <?php echo $form_addtocart ?>
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
                                            </div>
                                        </div>
                                        
                                        <div> <?php echo $product_rating ?> </div>
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
