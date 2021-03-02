<?php
/**
* Jumbotron Block Function.
*
* @package Infinity News
*/

if ( !function_exists( 'infinity_news_jumbotron_posts' ) ):

    // Header jumbotron Post.
    function infinity_news_jumbotron_posts( $jumbotorn_section_title,$section_vertical_title,$jumbotron_category_1,$jumbotron_category_2,$add_image_1,$add_image_1_link,$add_image_2,$add_image_2_link,$ed_relevant_cat_jumbotron,$ed_arrows_jumbotron,$ed_autoplay_jumbotron ){
        
        $jumbotron_post_query_1 = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => esc_html( $jumbotron_category_1 ) ) );
        $jumbotron_post_query_2 = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 13, 'category_name' => esc_html( $jumbotron_category_1 ) ) );
        $jumbotron_post_query_3 = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 13, 'category_name' => esc_html( $jumbotron_category_2 ) ) );

        if( $jumbotron_category_1 ){
            $idObj = get_category_by_slug( $jumbotron_category_1 ); 
            $id = $idObj->term_id;
            $cat_name = $idObj->name;
            $cat_link = get_category_link( $id );
        }

        if( $jumbotron_category_2 ){
            $idObj1 = get_category_by_slug( $jumbotron_category_2 ); 
            $id1 = $idObj1->term_id;
            $cat_name1 = $idObj1->name;
            $cat_link1 = get_category_link( $id1 );
        }

        if ( $ed_autoplay_jumbotron == 'yes' ) {
            $autoplay = 'true';
        }else{
            $autoplay = 'false';
        }
        ?>

            <div class="jumbotron-block twp-blocks">
                <div class="wrapper">

                    <div class="twp-row twp-row-sm">

                        

                        <?php if( $jumbotron_post_query_1->have_posts() ){ ?>

                            <div class="column column-seven column-full-sm">

                                <?php if( $jumbotorn_section_title ){ ?>
                                    <header class="block-title-wrapper">
                                        
                                            <div class="hr-line"></div>

                                            <h2 class="block-title block-title-bg">
                                                <?php echo esc_html( $jumbotorn_section_title ); ?>
                                            </h2>

                                            <?php if( $jumbotron_category_1 ){ ?>
                                                <div class="title-controls title-controls-bg">
                                                    <a href="<?php echo esc_url( $cat_link ); ?>">
                                                        <?php esc_html_e( 'View More','infinity-news' ); ?>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        
                                    </header>
                                <?php } ?>

                                <?php
                                while( $jumbotron_post_query_1->have_posts() ){
                                    $jumbotron_post_query_1->the_post();
                                    $featured_image_1 = wp_get_attachment_image_src( get_post_thumbnail_id(),'large' );
                                ?>

                                    <article class="story-leader story-leader-jumbotron">
                                        <div class="post-panel block-bg-alt">
                                            <div class="post-thumb">
                                                <a href="<?php the_permalink(); ?>" class="data-bg data-bg-large" data-background="<?php echo esc_url( $featured_image_1[0]); ?>">
                                                    <span class="data-bg-overlay"></span>
                                                </a>
                                            </div>
                                            <div class="entry-content">
                                                
                                                <div class="entry-meta entry-meta-category">
                                                    <?php if( $ed_relevant_cat_jumbotron == 'yes' && $jumbotron_category_1 ){ ?>

                                                        <span class="cat-links">
                                                            <a class="twp_cat_<?php echo esc_attr( $jumbotron_category_1 ); ?>" href="<?php echo esc_url( $cat_link ); ?>" rel="category tag"><?php echo esc_html( $cat_name ); ?></a>
                                                        </span>

                                                    <?php
                                                    }else{

                                                        infinity_news_entry_footer( $cats = true,$tags = false,$edits = false );

                                                    } ?>
                                                </div>

                                                <h3 class="entry-title entry-title-full">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>

                                                <div class="entry-meta">
                                                    <?php
                                                    infinity_news_posted_by();
                                                    echo "<span class='sep-date-author'><i class='ion ion-ios-remove'></i></span>";
                                                    infinity_news_posted_on();
                                                    ?>
                                                </div><!-- .entry-meta -->

                                                <div class="entry-description">
                                                    <?php
                                                    if( has_excerpt() ){
                                                      the_excerpt();
                                                    }else{
                                                      echo wp_kses_post( wp_trim_words( get_the_content(),10,'...') );
                                                    } ?>
                                                </div>

                                                <?php
                                                $default = infinity_news_get_default_theme_options();
                                                $ed_social_icon = absint( get_theme_mod( 'ed_social_icon',$default['ed_social_icon'] ) );
                                                $ed_like_dislike = absint( get_theme_mod( 'ed_like_dislike',$default['ed_like_dislike'] ) );
                                                if( class_exists( 'Booster_Extension_Class') && ( $ed_social_icon || $ed_like_dislike ) ){

                                                    echo "<div class='archive-like-share'>";
                                                    $args = array('layout'=>'layout-2','status'=>'enable');
                                                    if( $ed_social_icon ){
                                                        do_action('booster_extension_social_icons',$args);
                                                    }
                                                    if( $ed_like_dislike ){
                                                        do_action('booster_extension_like_dislike','allenable');
                                                    }
                                                    echo "</div>";
                                                } ?>
                                                
                                            </div>
                                        </div>
                                    </article>

                                <?php } ?>

                               

                                <div class="twp-row twp-row-sm">
                                    <?php
                                    $i = 1;
                                    while( $jumbotron_post_query_2->have_posts() ){
                                        $jumbotron_post_query_2->the_post();
                                        $featured_image_2 = wp_get_attachment_image_src( get_post_thumbnail_id(),'medium' );
                                        if( $i !=1 ){ ?>

                                            <article class="story-list">
                                                <div class="column column-five">
                                                    <div class="post-panel block-bg" data-mh="jumbotron-list">
                                                        <div class="post-thumb">
                                                            <a href="<?php the_permalink(); ?>" class="data-bg data-bg-small" data-background="<?php echo esc_url( $featured_image_2[0] ); ?>">

                                                            </a>
                                                        </div>
                                                        <div class="entry-content">
                                                            
                                                            <div class="entry-meta entry-meta-category">
                                                                <?php if( $ed_relevant_cat_jumbotron == 'yes' && $jumbotron_category_2 ){ ?>

                                                                    <span class="cat-links">
                                                                        <a class="twp_cat_<?php echo esc_attr( $jumbotron_category_2 ); ?>" href="<?php echo esc_url( $cat_link1 ); ?>" rel="category tag"><?php echo esc_html( $cat_name1 ); ?></a>
                                                                    </span>

                                                                <?php
                                                                }else{

                                                                    infinity_news_entry_footer( $cats = true,$tags = false,$edits = false );

                                                                } ?>
                                                            </div>

                                                            <h3 class="entry-title entry-title-medium">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>

                                        <?php }
                                        $i++;
                                    } ?>

                                </div>

                            </div>

                        <?php wp_reset_postdata(); } ?>

                        <?php if ( $jumbotron_post_query_3->have_posts() ){ ?>

                            <div class="column column-three column-full-sm">
                                <div class="story-vertical">
                                    <header class="block-title-wrapper">

                                        <?php if( $section_vertical_title ){ ?>
                                            <div class="hr-line"></div>

                                            <h2 class="block-title block-title-bg">
                                                <?php echo esc_html( $section_vertical_title ); ?>
                                            </h2>
                                        <?php } ?>

                                        <?php if( $ed_arrows_jumbotron == 'yes' ){ ?>
                                            <div class="title-controls title-controls-bg">
                                                <div class="twp-slide-prev slide-icon-1 slide-prev-2 slick-arrow">
                                                    <i class="ion-ios-arrow-up slick-arrow"></i>
                                                </div>
                                                <div class="twp-slide-next slide-icon-1 slide-next-2 slick-arrow">
                                                    <i class="ion-ios-arrow-down slick-arrow"></i>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </header>

                                    <div class="news-story-vertical" data-slick='{"autoplay": <?php echo esc_attr( $autoplay ); ?>}'>
                                        <?php
                                        while( $jumbotron_post_query_3->have_posts() ){
                                            $jumbotron_post_query_3->the_post();
                                            $featured_image_2 = wp_get_attachment_image_src( get_post_thumbnail_id(),'medium' ); ?>
                                            <div class="item-vertical">
                                                <article class="story-list">
                                                    <div class="post-panel block-bg">
                                                        <div class="post-thumb">
                                                            <a href="<?php the_permalink(); ?>" class="data-bg data-bg-small" data-background="<?php echo esc_url( $featured_image_2[0] ); ?>">

                                                            </a>
                                                        </div>
                                                        <div class="entry-content">

                                                            <div class="entry-meta entry-meta-category">
                                                                <?php if( $ed_relevant_cat_jumbotron == 'yes' && $jumbotron_category_2 ){ ?>

                                                                    <span class="cat-links">
                                                                        <a class="twp_cat_<?php echo esc_attr( $jumbotron_category_2 ); ?>" href="<?php echo esc_url( $cat_link1 ); ?>" rel="category tag"><?php echo esc_html( $cat_name1 ); ?></a>
                                                                    </span>

                                                                <?php
                                                                }else{

                                                                    infinity_news_entry_footer( $cats = true,$tags = false,$edits = false );

                                                                } ?>
                                                            </div>
                                                            
                                                            <h3 class="entry-title entry-title-medium">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if( $add_image_1 || $add_image_1_link || $add_image_2 || $add_image_2_link ){ ?>
                                <div class="square-space">

                                    <?php if( $add_image_1 ){ ?>
                                        <div class="square-space-item square-space-item-1">
                                            <a href="<?php echo esc_url( $add_image_1_link ); ?>">
                                                <img src="<?php echo esc_url( $add_image_1 ); ?>" alt="<?php esc_html_e('Advertise Image 1','infinity-news' ); ?>">
                                            </a>
                                        </div>
                                    <?php } ?>

                                    <?php if( $add_image_2 ){ ?>
                                        <div class="square-space-item square-space-item-1">
                                            <a href="<?php echo esc_url( $add_image_2_link ); ?>">
                                                <img src="<?php echo esc_url( $add_image_2 ); ?>" alt="<?php esc_html_e('Advertise Image 2','infinity-news' ); ?>">
                                            </a>
                                        </div>
                                    <?php } ?>

                                </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>

    <?php
    }

endif;