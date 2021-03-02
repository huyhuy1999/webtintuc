<?php
/**
* Custom Functions.
*
* @package Infinity News
*/

if( !function_exists( 'infinity_news_fonts_url' ) ) :

    //Google Fonts URL
    function infinity_news_fonts_url(){

        $fonts_url = '';
        $fonts = array();

        $infinity_news_font_1 = 'Roboto:300,300i,400,400i,500,500i,700,700i';
        $infinity_news_font_2 = 'Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i';

        $infinity_news_fonts = array();
        $infinity_news_fonts[] = $infinity_news_font_1;
        $infinity_news_fonts[] = $infinity_news_font_2;

        $infinity_news_fonts_stylesheet = '//fonts.googleapis.com/css?family=';

        $i = 0;
        for ( $i = 0; $i < count( $infinity_news_fonts ); $i++ ) {

            if ( 'off' !== sprintf( _x( 'on', '%s font: on or off', 'infinity-news' ), $infinity_news_fonts[$i] ) ) {
                $fonts[] = $infinity_news_fonts[$i];
            }

        }

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urldecode( implode( '|', $fonts ) ),
            ), 'https://fonts.googleapis.com/css' );
        }

        return esc_url_raw($fonts_url);
    }

endif;

if( !function_exists( 'infinity_news_post_category_list' ) ) :

    // Post Category List.
    function infinity_news_post_category_list( $select_cat = true ){

        $post_cat_lists = get_categories(
            array(
                'hide_empty' => '0',
                'exclude' => '1',
            )
        );

        $post_cat_cat_array = array();
        if( $select_cat ){
            $post_cat_cat_array[''] = esc_html__( '--Select Category--','infinity-news' );
        }

        foreach ( $post_cat_lists as $post_cat_list ) {

            $post_cat_cat_array[$post_cat_list->slug] = $post_cat_list->name;

        }

        return $post_cat_cat_array;
    }

endif;

if( !function_exists( 'infinity_news_sanitize_sidebar_option' ) ) :

    // Sidebar Option Sanitize.
    function infinity_news_sanitize_sidebar_option( $input ){
        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $input,$metabox_options ) ){
            return $input;
        }
        else{
            return '';
        }
    }

endif;

if( !function_exists( 'infinity_news_posts_navigation' ) ) :

     // Posts Navigations.
    function infinity_news_posts_navigation(){

        $default = infinity_news_get_default_theme_options();
        $pagination_layout = esc_html( get_theme_mod( 'pagination_layout',$default['pagination_layout'] ) );

        if( $pagination_layout == 'classic' ){
            the_posts_navigation();
        }else{
            the_posts_pagination();
        }

    }

endif;

if( !function_exists( 'infinity_news_breadcrumb' ) ) :

    // Trail Breadcrumb.
    function infinity_news_breadcrumb(){ ?>

        <div class="twp-inner-banner">
            <div class="wrapper">

                <?php 
                $default = infinity_news_get_default_theme_options();
                $breadcrumb_layout = get_theme_mod('breadcrumb_layout',$default['breadcrumb_layout']);
                if( $breadcrumb_layout != 'disable' && !is_front_page() ):
                        breadcrumb_trail();
                endif; ?>

                
                    <?php
                    if( is_search() ){ ?>
                        <div class="twp-banner-details">
                            <header class="page-header">
                                <h1 class="page-title">
                                    <?php
                                    /* translators: %s: search query. */
                                    printf( esc_html__( 'Search Results for: %s', 'infinity-news' ), '<span>' . get_search_query() . '</span>' );
                                    ?>
                                </h1>
                            </header><!-- .page-header -->
                        </div>
                    <?php } ?>

                    <?php
                    if( is_archive() && !is_author() ){ ?>

                        <div class="twp-banner-details">
                            <header class="page-header">
                                <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="archive-description">', '</div>' );
                                ?>
                            </header><!-- .page-header -->
                        </div>
                    <?php }

                    if( is_author() ){ ?>
                        <div class="twp-banner-details">
                            <header class="page-header">
                                <?php $author_img = get_avatar( get_the_author_meta('ID'),200, '', '', array('class' => 'avatar-img') ); ?>

                                <div class="author-image">
                                    <?php echo wp_kses_post( $author_img ); ?>
                                </div>

                                <div class="author-title-desc">
                                    <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="archive-description">', '</div>' );
                                    ?>
                                </div>
                            </header><!-- .page-header -->
                        </div>
                    <?php } ?>

            </div>
        </div>
    <?php
    }

endif;
add_action( 'infinity_news_header_banner_x','infinity_news_breadcrumb',20 );

if( !function_exists('infinity_news_post_formate_icon') ):

    // Post Formate Icon.
    function infinity_news_post_formate_icon( $formate ){

        if( $formate == 'video' ){
            $icon = 'ion-ios-play';
        }elseif( $formate == 'audio' ){
            $icon = 'ion-ios-musical-notes';
        }elseif( $formate == 'gallery' ){
            $icon = 'ion-md-images';
        }elseif( $formate == 'quote' ){
            $icon = 'ion-md-quote';
        }elseif( $formate == 'image' ){
            $icon = 'ion-ios-camera';
        }else{
            $icon = '';
        }

        return $icon;
    }

endif;

if( !function_exists('infinity_news_check_woocommerce_page') ):
    
    // Check if woocommerce pages.
    function infinity_news_check_woocommerce_page(){

        if( !class_exists( 'WooCommerce' ) ):
            return false;
        endif;

        if( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ){
            return true;
        }else{
            return false;
        }

    }
endif;

if( !function_exists('infinity_news_assign_menu') ):
   
    // Assign menus to their locations.
    function infinity_news_assign_menu() {
        
        $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
        $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );
        $social_menu = get_term_by( 'name', 'Social Menu', 'nav_menu' );
        set_theme_mod( 'nav_menu_locations', array(
                'twp-primary-menu' => $main_menu->term_id,
                'twp-footer-menu' => $footer_menu->term_id,
                'twp-social-menu' => $social_menu->term_id,
            )
        );
    }
endif;
add_action( 'pt-ocdi/after_import', 'infinity_news_assign_menu' );