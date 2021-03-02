<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Infinity News
 */

get_header();
$default = infinity_news_get_default_theme_options();
$twp_infinity_news_home_sections = get_theme_mod( 'twp_infinity_news_home_sections', json_encode( $default['twp_infinity_news_home_sections'] ) );
$paged_active = false;
if ( !is_paged() ) {
	$paged_active = true;
}
$twp_infinity_news_home_sections = json_decode( $twp_infinity_news_home_sections );

foreach( $twp_infinity_news_home_sections as $infinity_news_home_section ){

	$home_section_type = isset( $infinity_news_home_section->home_section_type ) ? $infinity_news_home_section->home_section_type : '' ;

	switch( $home_section_type ){

		case 'grid-posts':

		$ed_grid_1 = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
		$banner_1_title = isset( $infinity_news_home_section->section_title ) ? $infinity_news_home_section->section_title : '' ;
		$grid_posts_category = isset( $infinity_news_home_section->post_category ) ? $infinity_news_home_section->post_category : '' ;
		$ed_relevant_cat_grid_1 = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;
		$ed_title_control_grid = isset( $infinity_news_home_section->ed_title_control ) ? $infinity_news_home_section->ed_title_control : '' ;
		
		if( $ed_grid_1 == 'yes' && $paged_active ){
			infinity_news_grid_posts( $banner_1_title,$grid_posts_category,$ed_relevant_cat_grid_1,$ed_title_control_grid );
		}

        break;

        case 'grid-posts-2':

		$ed_grid_2 = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
		$banner_2_title = isset( $infinity_news_home_section->section_title ) ? $infinity_news_home_section->section_title : '' ;
		$grid_post_2_category_1	= isset( $infinity_news_home_section->post_category_1 ) ? $infinity_news_home_section->post_category_1 : '' ;
		$grid_post_2_category_2	= isset( $infinity_news_home_section->post_category_2 ) ? $infinity_news_home_section->post_category_2 : '' ;
		$ed_relevant_cat_grid_2 = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;
		$ed_arrows_grid_2 = isset( $infinity_news_home_section->ed_arrows_carousel ) ? $infinity_news_home_section->ed_arrows_carousel : '' ;
		$ed_dots_grid_2 = isset( $infinity_news_home_section->ed_dots_carousel ) ? $infinity_news_home_section->ed_dots_carousel : '' ;
		$ed_autoplay_grid_2 = isset( $infinity_news_home_section->ed_autoplay_carousel ) ? $infinity_news_home_section->ed_autoplay_carousel : '' ;

		if( $ed_grid_2 == 'yes' && $paged_active ){
			infinity_news_grid_posts_2( $banner_2_title,$grid_post_2_category_1,$grid_post_2_category_2,$ed_relevant_cat_grid_2,$ed_arrows_grid_2,$ed_dots_grid_2,$ed_autoplay_grid_2 );
		}

        break;

        case 'carousel-posts':
		
        $ed_carousel_posts = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
		$carousel_section_title = isset( $infinity_news_home_section->section_title ) ? $infinity_news_home_section->section_title : '' ;
		$carousel_category = isset( $infinity_news_home_section->post_category ) ? $infinity_news_home_section->post_category : '' ;
		$ed_carouser_overlay_layout = isset( $infinity_news_home_section->ed_carouser_overlay_layout ) ? $infinity_news_home_section->ed_carouser_overlay_layout : '' ;
		$ed_relevant_cat_carousel = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;
		$ed_title_control_grid = isset( $infinity_news_home_section->ed_title_control ) ? $infinity_news_home_section->ed_title_control : '' ;
		$ed_arrows_carousel = isset( $infinity_news_home_section->ed_arrows_carousel ) ? $infinity_news_home_section->ed_arrows_carousel : '' ;
		$ed_dots_carousel = isset( $infinity_news_home_section->ed_dots_carousel ) ? $infinity_news_home_section->ed_dots_carousel : '' ;
		$ed_autoplay_carousel = isset( $infinity_news_home_section->ed_autoplay_carousel ) ? $infinity_news_home_section->ed_autoplay_carousel : '' ;

		if( $ed_carousel_posts == 'yes' && $paged_active ){
	        infinity_news_carousel_posts( $carousel_section_title,$carousel_category,$ed_carouser_overlay_layout,$ed_relevant_cat_carousel,$ed_arrows_carousel,$ed_dots_carousel,$ed_autoplay_carousel );
	    }

        break;

        case 'jumbotron-block':
		
        $ed_jumbotron = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
        $jumbotorn_section_title = isset( $infinity_news_home_section->section_title ) ? $infinity_news_home_section->section_title : '' ;
        $section_vertical_title = isset( $infinity_news_home_section->section_vertical ) ? $infinity_news_home_section->section_vertical : '' ;
		$jumbotron_category_1	= isset( $infinity_news_home_section->post_category_1 ) ? $infinity_news_home_section->post_category_1 : '' ;
		$jumbotron_category_2	= isset( $infinity_news_home_section->post_category_2 ) ? $infinity_news_home_section->post_category_2 : '' ;
		$add_image_1	= isset( $infinity_news_home_section->add_image_1 ) ? $infinity_news_home_section->add_image_1 : '' ;
		$add_image_1_link	= isset( $infinity_news_home_section->add_image_1_link ) ? $infinity_news_home_section->add_image_1_link : '' ;
		$add_image_2	= isset( $infinity_news_home_section->add_image_2 ) ? $infinity_news_home_section->add_image_2 : '' ;
		$add_image_2_link	= isset( $infinity_news_home_section->add_image_2_link ) ? $infinity_news_home_section->add_image_2_link : '' ;
		$ed_relevant_cat_jumbotron = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;
		$ed_arrows_jumbotron	= isset( $infinity_news_home_section->ed_arrows_carousel ) ? $infinity_news_home_section->ed_arrows_carousel : '' ;
		$ed_autoplay_jumbotron = isset( $infinity_news_home_section->ed_autoplay_carousel ) ? $infinity_news_home_section->ed_autoplay_carousel : '' ;

		if( $ed_jumbotron == 'yes' && $paged_active ){
			infinity_news_jumbotron_posts( $jumbotorn_section_title,$section_vertical_title,$jumbotron_category_1,$jumbotron_category_2,$add_image_1,$add_image_1_link,$add_image_2,$add_image_2_link,$ed_relevant_cat_jumbotron,$ed_arrows_jumbotron,$ed_autoplay_jumbotron );
		}

        break;

        case 'multiple-category-posts':
		
		$ed_multiple_cat_posts = $infinity_news_home_section->section_ed;

		$multipal_category_lists = array();
		$multipal_category_lists[] 	= isset( $infinity_news_home_section->post_category_1 ) ? $infinity_news_home_section->post_category_1 : '' ;
		$multipal_category_lists[] 	= isset( $infinity_news_home_section->post_category_2 ) ? $infinity_news_home_section->post_category_2 : '' ;
		$multipal_category_lists[] 	= isset( $infinity_news_home_section->post_category_3 ) ? $infinity_news_home_section->post_category_3 : '' ;
		$ed_relevant_cat_multiple = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;
		$ed_escerpt_content_multiple = isset( $infinity_news_home_section->ed_escerpt_content ) ? $infinity_news_home_section->ed_escerpt_content : '' ;
		$block_1_title = isset( $infinity_news_home_section->block_1_title ) ? $infinity_news_home_section->block_1_title : '' ;
		$block_2_title = isset( $infinity_news_home_section->block_2_title ) ? $infinity_news_home_section->block_2_title : '' ;
		$block_3_title = isset( $infinity_news_home_section->block_3_title ) ? $infinity_news_home_section->block_3_title : '' ;

		if( $ed_multiple_cat_posts == 'yes' && $paged_active ){
	        infinity_news_multipal_cat_posts( $multipal_category_lists,$ed_relevant_cat_multiple,$ed_escerpt_content_multiple,$block_1_title,$block_2_title,$block_3_title );
	    }

        break;

        case 'latest-post':
        $ed_latest_post = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
        $slider_ed 	= isset( $infinity_news_home_section->slider_ed ) ? $infinity_news_home_section->slider_ed : '' ;
        $slider_category 	= isset( $infinity_news_home_section->slider_category ) ? $infinity_news_home_section->slider_category : '' ;
        $slider_autoplay 	= isset( $infinity_news_home_section->slider_autoplay ) ? $infinity_news_home_section->slider_autoplay : '' ;
        $slider_dots 	= isset( $infinity_news_home_section->slider_dots ) ? $infinity_news_home_section->slider_dots : '' ;
        $slider_arrows 	= isset( $infinity_news_home_section->slider_arrows ) ? $infinity_news_home_section->slider_arrows : '' ;
        $sidebar_layout = isset( $infinity_news_home_section->sidebar_layout ) ? $infinity_news_home_section->sidebar_layout : '' ;
        if( $ed_latest_post == 'yes' ){
        ?>

			<div id="content" class="site-content <?php if ( is_paged() ){ echo 'twp-frontpage-paged'; } ?>">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						
						<?php 
				        if( is_front_page() ):
				            infinity_news_slider( $slider_ed,$slider_category,$slider_autoplay,$slider_dots,$slider_arrows );
				        endif;
					    
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif; ?>

							<div class="article-wraper">
								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );

								endwhile; ?>
							</div>

							<?php infinity_news_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

					</main><!-- #main -->
				</div><!-- #primary -->

				<?php
				if( $sidebar_layout != 'no-sidebar' ):
					get_sidebar();
				endif; ?>

				<?php
				if ( !is_home() && is_front_page() ) :

					$global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$default['global_sidebar_layout'] ) );
					$infinity_news_post_sidebar_option = esc_html( get_post_meta( $post->ID, 'infinity_news_post_sidebar_option', true ) );

					if( $infinity_news_post_sidebar_option == 'global-sidebar' || empty( $infinity_news_post_sidebar_option ) ){
						$infinity_news_post_sidebar_option = $global_sidebar_layout;
					}

					if( $infinity_news_post_sidebar_option != 'no-sidebar' ):

						if( infinity_news_check_woocommerce_page() ){

							if ( is_active_sidebar( 'infinity-news-woocommerce-widget' ) ) { ?>

								<aside id="secondary" class="widget-area">
									<?php dynamic_sidebar( 'infinity-news-woocommerce-widget' ); ?>
								</aside><!-- #secondary -->
								
							<?php
							}
							
						}else{
							get_sidebar();
						}
						

					endif;

				endif; ?>

			</div><?php
		}
		
        break;

        case 'recommended-posts':
		
		$ed_recommended_posts = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
		$recommeneed_section_title = isset( $infinity_news_home_section->section_title ) ? $infinity_news_home_section->section_title : '' ;
		$recommended_posts_category = isset( $infinity_news_home_section->post_category ) ? $infinity_news_home_section->post_category : '' ;
		$ed_relevant_cat_recommend = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;

		if( $ed_recommended_posts == 'yes' && $paged_active ){
	        infinity_news_recommended_posts( $recommeneed_section_title,$recommended_posts_category,$ed_relevant_cat_recommend );
	    }

        break;

        case 'advertise-area':
		
		$ed_advertise = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
		$advertise_image = isset( $infinity_news_home_section->advertise_image ) ? $infinity_news_home_section->advertise_image : '' ;
		$advertise_link = isset( $infinity_news_home_section->advertise_link ) ? $infinity_news_home_section->advertise_link : '' ;

		if( $ed_advertise == 'yes' && $paged_active && $advertise_image ){
	        infinity_news_advertise( $advertise_image,$advertise_link );
	    }

        break;

        default:

		$ed_grid_1 = isset( $infinity_news_home_section->section_ed ) ? $infinity_news_home_section->section_ed : '' ;
		$banner_1_title = isset( $infinity_news_home_section->section_title ) ? $infinity_news_home_section->section_title : '' ;
		$grid_posts_category = isset( $infinity_news_home_section->post_category ) ? $infinity_news_home_section->post_category : '' ;
		$ed_relevant_cat_grid_1 = isset( $infinity_news_home_section->ed_relevant_cat ) ? $infinity_news_home_section->ed_relevant_cat : '' ;
		$ed_title_control_grid = isset( $infinity_news_home_section->ed_title_control ) ? $infinity_news_home_section->ed_title_control : '' ;
		
		if( $ed_grid_1 == 'yes' && $paged_active ){
			infinity_news_grid_posts( $banner_1_title,$grid_posts_category,$ed_relevant_cat_grid_1,$ed_title_control_grid );
		}

		break;

	}

}

get_footer();
