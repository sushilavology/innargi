<?php
/*
 * Template Name: Gallery
 */
get_header();
if( have_rows('gallery') ):
	$i=0;
	?>
	<section class="stad">
	  	<div class="container">
	  	 	<div class="row">
	  	 	 	<div class="stand_main">
					<?php
					while( have_rows('gallery') ) : the_row(); 
					$no_of_cols = sizeof(get_field('gallery')[$i]['columns']);
					$i++;
					?>
						<?php if( have_rows('columns') ): ?>
			  	 	 	 	<div class="stand_child">
								<?php while( have_rows('columns') ) : the_row(); ?>
					  	 	 	 	<div class="stad-item <?= $no_of_cols == 2 ? 'stad_max' : 'stad_min' ?>">
					  	 	 	 	 	<figure>
						  	 	 	 		<?php 
											$image = get_sub_field('image');
											if( !empty( $image ) ): ?>
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
											<?php else: ?> 
												<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mM8cULkPwAGqQKlRpmHvQAAAABJRU5ErkJggg==" class="img-fluid" />   
											<?php endif; ?>
					  	 	 	 	 	</figure>
					  	 	 	 	 	<div class="content">
					  	 	 	 	 		<?= get_sub_field('title') ? '<h3>'.get_sub_field('title').'</h3>' : '' ?>
					  	 	 	 	 		<?php the_sub_field('description') ?>
					  	 	 	 	 		<?php 
											$link = get_sub_field('link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
					  	 	 	 	 	</div>
					  	 	 	 	</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
	  	 	 	</div>
	  	 	</div>
	  	</div>
	</section>
	<?php
endif;
get_footer() ?>