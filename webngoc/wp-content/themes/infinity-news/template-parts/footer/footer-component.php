<?php
/**
 * Template for Footer Components
 * @since infinity-news 1.0.0
 */
?>

<?php if ( is_active_sidebar('infinity-news-offcanvas-widget') ): ?>
    <div id="sidr-nav">
        <div class="sidr-area">
            <div class="sidr-close-holder">
                <a class="sidr-class-sidr-button-close" href="#sidr-nav">
                    <?php echo esc_html__('Close', 'infinity-news');?><i class="ion ion-ios-close"></i>
                </a>
            </div>
            <?php dynamic_sidebar('infinity-news-offcanvas-widget'); ?>
        </div>
    </div>
<?php endif; ?>


<?php if( is_singular('post') ):
    // Single Posts Related Posts.
    infinity_news_related_posts();
endif; ?>


<?php 
// Footer Ticker Posts
infinity_news_ticker_posts(); ?>