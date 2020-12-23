<?php

remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);
remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices',10);
// remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);

if(!function_exists('loop_columns')) {
	function loop_columns(){
		return 3;
	}
}
add_filter( 'loop_shop_columns', 'loop_columns' );

remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);

// add image and button 
add_action('woocommerce_before_shop_loop_item_title','techecom_product_thumb');

function techecom_product_thumb(){?>
	<div class="product-img">
    <a href="<?php the_permalink();?>">
    	<?php woocommerce_template_loop_product_thumbnail();?>
    	 <?php woocommerce_show_product_loop_sale_flash();?>
        <!-- <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#"> -->
    </a>
    <div class="button-head">
        <div class="product-action">
            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
        </div>
        <div class="product-action-2">
        	<?php woocommerce_template_loop_add_to_cart();?>
            <!-- <a title="Add to cart" href="#">Add to cart</a> -->
        </div>
    </div>
</div>
<?php }


// loop content 
add_action('woocommerce_shop_loop_item_title','techecom_pdcontent');

function techecom_pdcontent(){?>
	<div class="product-content">
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		<div class="product-price">
			<?php woocommerce_template_loop_price();?>
		</div>
	</div>
<?php }