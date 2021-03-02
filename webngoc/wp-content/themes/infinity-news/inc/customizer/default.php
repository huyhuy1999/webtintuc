<?php
/**
 * Default theme options.
 *
 * @package Infinity News
 */

if ( ! function_exists( 'infinity_news_get_default_theme_options' ) ) :

	/**
	 * Get default theme options
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function infinity_news_get_default_theme_options() {

		$defaults = array();
		
		
		// Home options.
		$defaults['home_sidebar_layout'] 			= 'right-sidebar';
		$defaults['twp_infinity_news_home_sections'] 	= array(
										                array(
										                        'home_section_type' => 'grid-posts',
										                        'section_title'     => esc_html__('Banner Block 1','infinity-news'),
										                        'post_category'     => '',
										                        'section_ed'		=> 'no',
										                        'advertise_link'	=> 'no',
										                        'ed_title_control'	=> 'yes',
										                        'ed_relevant_cat'	=> 'no',
										                ),
										                 array(
										                        'home_section_type' => 'grid-posts-2',
										                        'section_title'     => esc_html__('Banner Block 2','infinity-news'),
										                        'post_category'     => '',
										                        'post_category_1'   => '',
										                        'post_category_2'   => '',
										                        'section_ed'		=> 'no',
										                        'advertise_link'	=> 'no',
										                        'ed_title_control'	=> 'yes',
										                        'ed_arrows_carousel'	=> 'yes',
										                        'ed_dots_carousel'	=> 'no',
										                        'ed_autoplay_carousel'	=> 'no',
										                        'ed_relevant_cat'	=> 'no',
										                ),
										                array(
										                        'home_section_type' => 'carousel-posts',
										                        'section_title'     => esc_html__('Carousel Posts','infinity-news'),
										                        'post_category'     => '',
										                        'ed_carouser_overlay_layout'     => '',
										                        'section_ed'		=> 'no',
										                        'advertise_link'	=> 'no',
										                        'ed_title_control'	=> 'yes',
										                        'ed_arrows_carousel'	=> 'yes',
										                        'ed_dots_carousel'	=> 'no',
										                        'ed_autoplay_carousel'	=> 'no',
										                        'ed_relevant_cat'	=> 'no',
										                ),
										                array(
										                        'home_section_type' => 'jumbotron-block',
										                        'section_title'     => esc_html__('Jumbotron Posts','infinity-news'),
										                        'section_vertical'     => esc_html__('Recent Posts','infinity-news'),
										                        'post_category'     => '',
										                        'post_category_1'   => '',
										                        'post_category_2'   => '',
										                        'section_ed'		=> 'no',
										                        'add_image_1'		=> '',
										                        'add_image_1_link'	=> '',
										                        'add_image_2'		=> '',
										                        'add_image_2_link'	=> '',
										                        'advertise_link'	=> 'no',
										                        'ed_title_control'	=> 'yes',
										                        'ed_arrows_carousel'	=> 'yes',
										                        'ed_autoplay_carousel'	=> 'yes',
										                        'ed_relevant_cat'	=> 'no',
										                ),
										                array(
										                        'home_section_type' => 'multiple-category-posts',
										                        'section_title'     => '',
										                        'post_category'     => '',
										                        'post_category_1'   => '',
										                        'post_category_2'   => '',
										                        'post_category_3'   => '',
										                        'section_ed'		=> 'no',
										                        'advertise_link'	=> 'no',
										                        'ed_title_control'	=> 'yes',
										                        'ed_escerpt_content'=> 'no',
										                        'ed_relevant_cat'	=> 'no',
										                        'block_1_title'		=> '',
										                        'block_2_title'		=> '',
										                        'block_3_title'		=> '',
										                ),
										                array(
										                        'home_section_type' => 'latest-post',
										                        'section_title'     => '',
										                        'section_ed'		=> 'yes',
										                        'slider_ed'			=> 'yes',
										                        'slider_category'   => '',
										                        'slider_autoplay'	=> 'yes',
										                        'slider_dots'		=> 'no',
										                        'slider_arrows'		=> 'yes',
										                        'sidebar_layout' 	=> 'right-sidebar',
										                        'latest_post_layout'=> 'index-layout-1',
										                ),
										                 array(
										                        'home_section_type' => 'recommended-posts',
										                        'section_title'     => esc_html__('Recommended Posts','infinity-news'),
										                        'post_category'     => '',
										                        'section_ed'		=> 'no',
										                        'advertise_link'	=> 'no',
										                        'ed_title_control'	=> 'yes',
										                        'ed_relevant_cat'	=> 'no',
										                ),
										                array(
										                        'home_section_type' => 'advertise-area',
										                        'advertise_link'    => '',
										                        'advertise_image'   => '',
										                        'section_ed'		=> 'no',
										                ),
										            );

		// Theme Options
		$defaults['ed_mid_header_search']			= 1;
		$defaults['breadcrumb_layout']				= 'simple';
		$defaults['pagination_layout']				= 'numeric';
		$defaults['ed_preloader']					= 1;
		$defaults['header_logo_position']			= 'left';
		$defaults['ed_top_header_social_icon']		= 1;
		$defaults['ed_cat_color_setting']		= 1;

		// Single Posts Option.
		$defaults['ed_related_post']				= 1;
		$defaults['related_post_title']				= esc_html__('Related Post','infinity-news');

		// Layout Options.
		$defaults['global_sidebar_layout'] 			= 'right-sidebar';
		$defaults['infinity_news_archive_layout'] 	= 'archive-layout-1';

		// Footer Options.
		$defaults['footer_column_layout'] 			= 3;
		$defaults['ed_ticker_post'] 				= 1;
		$defaults['ed_ticker_post_arrow'] 			= 1;
		$defaults['ed_ticker_post_dots'] 			= '';
		$defaults['ed_ticker_post_autoplay'] 		= 1;
		$defaults['ed_footer_social_icon'] 			= 1;
		$defaults['ed_footer_search'] 				= 1;
		$defaults['footer_copyright_text'] 			= esc_html__( 'Copyright All rights reserved', 'infinity-news' );

		// Booster Extensions Opotions
		$defaults['ed_social_icon']					= 1;
		$defaults['ed_like_dislike']				= 1;
		$defaults['ed_social_share_on_single_page']	= 1;
		$defaults['ed_social_share_on_archive_page']	= 1;
		$defaults['ed_like_dislike_archive']	= 1;

		// Woocommerce.
		$defaults['product_sidebar_layout']			= 'no-sidebar';

		// Pass through filter.
		$defaults = apply_filters( 'infinity_news_filter_default_theme_options', $defaults );

		return $defaults;

	}

endif;
