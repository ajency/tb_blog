<div class="more-articles-section">
	<div class="container section-heading more-articles-heading">More Articles</div>
	<div class="more-articles">
		<div class="more-articles-slider">
			<?php
			$post_ids = get_query_var('post_ids');
			$args = array(
				'posts_per_page' => 5,
				'post_type' => array('post'),
				'post_status' => 'publish',
				'post__not_in' => $post_ids,
				'meta_query' => array(
					array(
						'key'     => 'choose_article_location',
						'value'   => '"More Articles Slider"',
						'compare' => 'LIKE'
					)
				)
			);
			$count = 0;
			$main_post = new wp_query( $args );
			if( $main_post->have_posts() ) :
				while( $main_post->have_posts() ) :
					$main_post->the_post();
					/* $post_ids[] = get_the_id(); */
					$count ++; ?>
					<div class="more-articles-single">
						<div class="wraper">
							<div class="more-articles-single-content">
								<div class="content-title">
									<h2 class="hide-mob title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8); ?></a></h2>
									<h2 class="hide-desk title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 7); ?></a></h2>
								</div>
								<div class="content-description hide-mob"><?php echo tb_get_excerpt(240); ?></div>
								<div class="content-description hide-desk"><?php echo tb_get_excerpt(110); ?></div>
							</div>
							<div class="more-articles-single-image"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
								<?php 
								$thumbnail = get_post_meta(get_the_id(), 'tb_large_image', true);
								if ( $thumbnail ) { ?>
									<img src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
								<?php } else if ( has_post_thumbnail() ) {
								the_post_thumbnail('large', ['title' => get_the_title()]); ?>
								<?php
								} else { ?>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/default.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
								<?php } ?>
							</a></div>
						</div>
					</div>
					<?php 
					if($count == 5){
						break;
					}
				endwhile;
			endif; ?>
			</div>
			<div class="slider-nav"><div class="arrows"><div class="dots"></div></div></div>
	</div>
</div>