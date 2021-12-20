<?php
function fetch_category_articles(){
	if($_POST['type'] == 'video'){
		get_template_part( 'page-templates/theme-sections/video/explore-articles', 'component' );
	}
	else{
		get_template_part( 'page-templates/theme-sections/explore-articles', 'component' );
	}
	die;
}
add_action('wp_ajax_fetch_category_articles', 'fetch_category_articles'); 
add_action('wp_ajax_nopriv_fetch_category_articles', 'fetch_category_articles');

function fetch_category_page_articles(){
	$args = array(
		'posts_per_page' => 15,
		'post_type' => array($_POST['type']),
		'post_status' => 'publish',
		'paged' => $_POST['page'],
	);
	if($_POST['taxonomy'] == 'category'){
		$args['category__in'] = $_POST['category'];
	}
	if($_POST['taxonomy'] == 'post_tag'){
		$args['tag_id'] = $_POST['category'];
	}
	if($_POST['taxonomy'] == 'search_page'){
		$args['s'] = $_POST['search'];
	}
	query_posts( $args ); 
	switch($_POST['type']){
		case 'post':
			$template['primary'] = 'page-templates/theme-sections/category';
			$template['secondary'] = 'component';
		break;
	}
	?>
	<div class="category-post-row row m-0">
		<?php if( have_posts() ) :
			while( have_posts() ): the_post();
				get_template_part( $template['primary'], $template['secondary'] );
			endwhile;
		endif; ?>
	</div>
	<div class="my-5 loader category-loader d-none justify-content-center">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/loader.svg">
	</div> 
	<?php die; 
}
add_action('wp_ajax_fetch_category_page_articles', 'fetch_category_page_articles'); 
add_action('wp_ajax_nopriv_fetch_category_page_articles', 'fetch_category_page_articles');

function fetch_category_alphaposts(){
	get_template_part( 'page-templates/theme-sections/category-alphaposts', 'section' );
	die;
}
add_action('wp_ajax_fetch_category_alphaposts', 'fetch_category_alphaposts'); 
add_action('wp_ajax_nopriv_fetch_category_alphaposts', 'fetch_category_alphaposts');
