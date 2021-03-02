<?php
add_action('wp_enqueue_scripts','infinity_news_dynamic_style',100);
function infinity_news_dynamic_style(){


    $infinity_news_dynamic_style = '';
    $default = infinity_news_get_default_theme_options();
    $ed_cat_color_setting = esc_html( get_theme_mod( 'ed_cat_color_setting',$default['ed_cat_color_setting'] ) );

    if( $ed_cat_color_setting ){
        $infinity_news_post_category_list = infinity_news_post_category_list( $select_cat = false );

        if( $infinity_news_post_category_list ){
        foreach( $infinity_news_post_category_list as $key => $twp_Category ){

                $cat_color = get_theme_mod( 'twp_cat_color_'.esc_html( $key ) );
                if($cat_color){
                    $infinity_news_dynamic_style .= ".entry-meta-category .twp_cat_".esc_html( $key )."{color:".esc_html( $cat_color )."}";
                    $infinity_news_dynamic_style .= ".entry-meta-category .twp_cat_".esc_html( $key )."{border-color:".esc_html( $cat_color )."}";
                    $infinity_news_dynamic_style .= ".block-bg-alt .entry-meta-category .twp_cat_".esc_html( $key )."{background:".esc_html( $cat_color )."}";
                    $infinity_news_dynamic_style .= ".home-carousel-overlay .entry-meta-category .twp_cat_".esc_html( $key )."{background:".esc_html( $cat_color )."}";
                }
            }
        }
    }
    
    wp_add_inline_style( 'infinity-news-style', $infinity_news_dynamic_style );
}