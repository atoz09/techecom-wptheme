<?php get_header();?>
			
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
										<img src="https://via.placeholder.com/950x460" alt="#">
									</div>
									<div class="blog-detail">
										<h2 class="blog-title"><?php the_title(); ?></h2>
										<div class="blog-meta">
											<span class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>"><i class="fa fa-user"></i>By <?php the_author();?></a><a href="#"><i class="fa fa-calendar"></i><?php the_date('m d, Y');?></a><?php comments_number('0');?></span>
										</div>
										<div class="content">
											<?php the_content();?>
										</div>
									</div>
									<div class="share-social">
										<div class="row">
											<div class="col-12">
												<div class="content-tags">
													<h4>Tags:</h4>
													<?php the_tags(' ');?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
                                    <?php comments_template();?>
                                </div>											 			
							</div>
						</div>
					</div>
					<?php get_sidebar();?>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
			
<?php get_footer();?>