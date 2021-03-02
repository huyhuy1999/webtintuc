<?php
$default = infinity_news_get_default_theme_options();
// Category Color Section.
$wp_customize->add_section(
    'twp_category_setting_setion',
    array(
        'title'     => esc_html__( 'Category Settings', 'infinity-news' ),
        'priority'  => 155,
        'panel'      => 'theme_option_panel',
    )
);

// Ticker Post Enable Disable.
$wp_customize->add_setting('ed_cat_color_setting',
    array(
        'default' => $default['ed_cat_color_setting'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'infinity_news_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_cat_color_setting',
    array(
        'label' => esc_html__('Enable Category Color Setting', 'infinity-news'),
        'section' => 'twp_category_setting_setion',
        'type' => 'checkbox',
        'priority' => 1,
    )
);

$ed_cat_color_setting = esc_html( get_theme_mod( 'ed_cat_color_setting',$default['ed_cat_color_setting'] ) );

if( $ed_cat_color_setting ){

    $infinity_news_post_category_list = infinity_news_post_category_list( $select_cat = false );

    if( $infinity_news_post_category_list ){

        foreach( $infinity_news_post_category_list as $key => $twp_Category ){

            $wp_customize->add_setting(
                'twp_cat_color_'.esc_html( $key ),
                array(
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'priority' => 1
                )
            );
        
            $wp_customize->add_control(
                new WP_Customize_Color_Control(
                    $wp_customize,
                    'twp_cat_color_'.esc_html( $key ),
                    array(
                        'settings'      => 'twp_cat_color_'.esc_html( $key ),
                        'section'       => 'twp_category_setting_setion',
                        'label'         => esc_html( $twp_Category).esc_html__(' Category Color ', 'infinity-news' ),
                    )
                )
            );

        }
    }
}