<?php
/**
* Sections Repeater Options.
*
* @package Infinity News
*/

$infinity_news_post_category_list = infinity_news_post_category_list();
$default = infinity_news_get_default_theme_options();
$home_sections = array(
        
        'grid-posts' => esc_html__('Banner Block 1','infinity-news'),
        'grid-posts-2' => esc_html__('Banner Block 2','infinity-news'),
        'carousel-posts' => esc_html__('Carousel Block','infinity-news'),
        'jumbotron-block' => esc_html__('Jumbotron Block','infinity-news'),
        'multiple-category-posts' => esc_html__('Multiple Category Block','infinity-news'),
        'latest-post' => esc_html__('Latest Blog Block','infinity-news'),
        'recommended-posts' => esc_html__('Recommended Block','infinity-news'),
        'advertise-area' => esc_html__('Advertisement Block','infinity-news'),
    );

$home_sidebar = array(
            'right-sidebar' => esc_html__( 'Right Sidebar', 'infinity-news' ),
            'left-sidebar'  => esc_html__( 'Left Sidebar', 'infinity-news' ),
            'no-sidebar'    => esc_html__( 'No Sidebar', 'infinity-news' ),
            );


$home_layout = array(
            'index-layout-1' => esc_html__( 'Grid Layout', 'infinity-news' ),
            'index-layout-2'  => esc_html__( 'Full Width Layout', 'infinity-news' ),
            );

// Slider Section.
$wp_customize->add_section( 'home_sections_repeater',
	array(
	'title'      => esc_html__( 'Homepage Content', 'infinity-news' ),
	'priority'   => 150,
	'capability' => 'edit_theme_options',
	)
);

// Recommended Posts Enable Disable.
$wp_customize->add_setting( 'twp_infinity_news_home_sections', array(
    'sanitize_callback' => 'infinity_news_sanitize_repeater',
    'default' => json_encode( $default['twp_infinity_news_home_sections'] ),
));

$wp_customize->add_control(  new Infinity_News_Repeater_Controler( $wp_customize, 'twp_infinity_news_home_sections', 
    array(
        'section' => 'home_sections_repeater',
        'settings' => 'twp_infinity_news_home_sections',
        'infinity_news_box_label' => esc_html__('New Section','infinity-news'),
        'infinity_news_box_add_control' => esc_html__('Add New Section','infinity-news'),
    ),
        array(
            'section_ed' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Section', 'infinity-news' ),
                'class'       => 'home-section-ed'
            ),
            'home_section_type' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Section Type', 'infinity-news' ),
                'options'     => $home_sections,
                'class'       => 'home-section-type'
            ),
            'slider_ed' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Slider', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
            'slider_category' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Slider Category', 'infinity-news' ),
                'options'     => $infinity_news_post_category_list,
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
            'slider_autoplay' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Autoplay', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
            'slider_dots' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Dots', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
            'slider_arrows' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Arrows', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
             'sidebar_layout' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Sidebar Layout', 'infinity-news' ),
                'options'     => $home_sidebar,
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
            'latest_post_layout' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Latest Posts Layout', 'infinity-news' ),
                'options'     => $home_layout,
                'class'       => 'home-repeater-fields-hs latest-post-fields'
            ),
            'section_title' => array(
                'type'        => 'text',
                'label'       => esc_html__( 'Section Title', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields carousel-posts-fields grid-posts-fields grid-posts-2-fields recommended-posts-fields'
            ),
            'section_vertical' => array(
                'type'        => 'text',
                'label'       => esc_html__( 'Recent Post Title', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields'
            ),
            'post_category_1' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Post Category One', 'infinity-news' ),
                'options'     => $infinity_news_post_category_list,
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields grid-posts-2-fields multiple-category-posts-fields'
            ),
            'block_1_title' => array(
                'type'        => 'text',
                'label'       => esc_html__( 'Block One Title', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs multiple-category-posts-fields'
            ),
            'post_category_2' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Post Category Two', 'infinity-news' ),
                'options'     => $infinity_news_post_category_list,
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields grid-posts-2-fields multiple-category-posts-fields'
            ),
            'block_2_title' => array(
                'type'        => 'text',
                'label'       => esc_html__( 'Block Two Title', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs multiple-category-posts-fields'
            ),
            'post_category' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Post Category', 'infinity-news' ),
                'options'     => $infinity_news_post_category_list,
                'class'       => 'home-repeater-fields-hs carousel-posts-fields grid-posts-fields recommended-posts-fields'
            ),

            'post_category_3' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Post Category Three', 'infinity-news' ),
                'options'     => $infinity_news_post_category_list,
                'class'       => 'home-repeater-fields-hs multiple-category-posts-fields'
            ),
            'block_3_title' => array(
                'type'        => 'text',
                'label'       => esc_html__( 'Block Three Title', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs multiple-category-posts-fields'
            ),
            'ed_arrows_carousel' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Arrows', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs carousel-posts-fields grid-posts-2-fields jumbotron-block-fields'
            ),
            'ed_dots_carousel' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Dot', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs carousel-posts-fields grid-posts-2-fields'
            ),
            'ed_autoplay_carousel' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Autoplay', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs carousel-posts-fields grid-posts-2-fields jumbotron-block-fields'
            ),
            'ed_title_control' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Title Control', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs grid-posts-fields recommended-posts-fields multiple-category-posts-fields'
            ),
            'ed_relevant_cat' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Show Relevant Category Only', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields carousel-posts-fields grid-posts-fields grid-posts-2-fields recommended-posts-fields multiple-category-posts-fields'
            ),
            'ed_escerpt_content' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Excerpt Content', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs multiple-category-posts-fields'
            ),
            'add_image_1' => array(
                'type'        => 'upload',
                'label'       => esc_html__( 'Advertise Image 1', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields'
            ),
            'add_image_1_link' => array(
                'type'        => 'link',
                'label'       => esc_html__( 'Advertise Image Link 1', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields'
            ),
            'add_image_2' => array(
                'type'        => 'upload',
                'label'       => esc_html__( 'Advertise Image 2', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields'
            ),
            'add_image_2_link' => array(
                'type'        => 'link',
                'label'       => esc_html__( 'Advertise Image Link 2', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs jumbotron-block-fields'
            ),
            'ed_carouser_overlay_layout' => array(
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Enable Overlay Layout', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs carousel-posts-fields'
            ),
            'advertise_image' => array(
                'type'        => 'upload',
                'label'       => esc_html__( 'Advertise Image', 'infinity-news' ),
                'description' => esc_html__( 'Recommended Image Size is 970x250 PX.', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs advertise-area-fields'
            ),
            'advertise_link' => array(
                'type'        => 'link',
                'label'       => esc_html__( 'Advertise Image Link', 'infinity-news' ),
                'class'       => 'home-repeater-fields-hs advertise-area-fields'
            ),
            
            

    )
));

// Notiece Pro.
$wp_customize->add_setting(
    'infinity_news_notiece_pro',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new Infinity_News_Notiece_Control( 
        $wp_customize,
        'infinity_news_notiece_pro',
        array(
            'settings' => 'infinity_news_notiece_pro',
            'section'       => 'home_sections_repeater',
            'label'         => esc_html__( 'More Blocks available on Premium version.', 'infinity-news' ),
        )
    )
);

// Info.
$wp_customize->add_setting(
    'infinity_news_notiece_info',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new Infinity_News_Info_Notiece_Control( 
        $wp_customize,
        'infinity_news_notiece_info',
        array(
            'settings' => 'infinity_news_notiece_info',
            'section'       => 'home_sections_repeater',
            'label'         => esc_html__( 'Info', 'infinity-news' ),
        )
    )
);