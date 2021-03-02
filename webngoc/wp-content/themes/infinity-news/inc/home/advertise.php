<?php
function infinity_news_advertise( $advertise_image,$advertise_link ){ ?>

<div class="home-lead-block twp-blocks">
    <div class="wrapper">
        <div class="twp-row">
            <div class="column">
                <a href="<?php echo esc_url( $advertise_link ); ?>" target="_blank" class="home-lead-link">
                    <img src="<?php echo esc_url( $advertise_image ); ?>" alt="<?php esc_html_e('Advertise Image','infinity-news'); ?>">
                </a>
            </div>
        </div>
    </div>
</div>

<?php } ?>