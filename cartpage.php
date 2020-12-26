
<?php
/*
Template name: Cart page
 */
 get_header();?>
<div class="breadcrumbs">
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="bread-inner">
				<ul class="bread-list">
					<li><a href="<?php esc_url(home_url('/'));?>">Home<i class="ti-arrow-right"></i></a></li>
					<li class="active"><a href="<?php esc_url(home_url('/'));?>/cart">Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
			<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<?php the_content();?>
			</div>	
			</div>
		</section>
		<!--/ End Blog Single -->
			
<?php get_footer();?>