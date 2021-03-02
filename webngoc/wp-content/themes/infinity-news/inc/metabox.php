<?php
/**
* Sidebar Metabox.
*
* @package Infinity News
*/
 
add_action( 'add_meta_boxes', 'infinity_news_metabox' );

if( ! function_exists( 'infinity_news_metabox' ) ):


    function  infinity_news_metabox() {
        
        add_meta_box(
            'infinity_news_post_metabox',
            esc_html__( 'Sidebar Layouts', 'infinity-news' ),
            'infinity_news_post_metafield_callback',
            'post', 
            'normal', 
            'high'
        );
        add_meta_box(
            'infinity_news_page_metabox',
            esc_html__( 'Sidebar Layouts', 'infinity-news' ),
            'infinity_news_post_metafield_callback',
            'page',
            'normal', 
            'high'
        ); 
    }

endif;

$infinity_news_post_sidebar_fields = array(
    'global-sidebar' => array(
                    'id'        => 'post-global-sidebar',
                    'value' => 'global-sidebar',
                    'label' => esc_html__( 'Global sidebar', 'infinity-news' ),
                ),
    'right-sidebar' => array(
                    'id'        => 'post-left-sidebar',
                    'value' => 'right-sidebar',
                    'label' => esc_html__( 'Right sidebar', 'infinity-news' ),
                ),
    'left-sidebar' => array(
                    'id'		=> 'post-right-sidebar',
                    'value'     => 'left-sidebar',
                    'label'     => esc_html__( 'Left sidebar', 'infinity-news' ),
                ),
    'no-sidebar' => array(
                    'id'		=> 'post-no-sidebar',
                    'value'     => 'no-sidebar',
                    'label'     => esc_html__( 'No sidebar', 'infinity-news' ),
                ),
);

/**
 * Callback function for post option.
*/
if( ! function_exists( 'infinity_news_post_metafield_callback' ) ):
	function infinity_news_post_metafield_callback() {
		global $post, $infinity_news_post_sidebar_fields;
		wp_nonce_field( basename( __FILE__ ), 'infinity_news_post_meta_nonce' ); ?>
        <table class="form-table">
        
            <tr>
                <td>
                    <?php
                    $default = infinity_news_get_default_theme_options();
                    $global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$default['global_sidebar_layout'] ) );
                    $infinity_news_post_sidebar = esc_html( get_post_meta( $post->ID, 'infinity_news_post_sidebar_option', true ) ); 
                    if( $infinity_news_post_sidebar == '' ){ $infinity_news_post_sidebar = 'global-sidebar'; }

                    foreach ( $infinity_news_post_sidebar_fields as $infinity_news_post_sidebar_field) { ?>
                            
                            <div class="radio-button-wrapper" style="float:left; margin-right:30px;">
                                <label class="description">
                                    <input type="radio" name="infinity_news_post_sidebar_option" value="<?php echo esc_attr( $infinity_news_post_sidebar_field['value'] ); ?>" <?php if( $infinity_news_post_sidebar_field['value'] == $infinity_news_post_sidebar ){ echo "checked='checked'";} if( empty( $infinity_news_post_sidebar ) && $infinity_news_post_sidebar_field['value']=='right-sidebar' ){ echo "checked='checked'"; } ?>/>&nbsp;<?php echo esc_html( $infinity_news_post_sidebar_field['label'] ); ?>
                                </label>
                            </div>
                    <?php } ?>
                    <div class="clear"></div>
                </td>
            </tr>
            
        </table>
    <?php }
endif;

// Save metabox value.
add_action( 'save_post', 'infinity_news_save_post_meta' );

if( ! function_exists( 'infinity_news_save_post_meta' ) ):

function infinity_news_save_post_meta( $post_id ) {

    global $post, $infinity_news_post_sidebar_fields;

    if ( !isset( $_POST[ 'infinity_news_post_meta_nonce' ] ) || !wp_verify_nonce( wp_unslash( $_POST['infinity_news_post_meta_nonce'] ), basename( __FILE__ ) ) )
        return;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )  
        return;
        
    if ( 'page' == $_POST['post_type'] ) {  
        if ( !current_user_can( 'edit_page', $post_id ) )  
            return $post_id;  
    } elseif ( !current_user_can( 'edit_post', $post_id ) ) {  
            return $post_id;  
    }


    foreach ( $infinity_news_post_sidebar_fields as $infinity_news_post_sidebar_field ) {  
        
        $old = esc_html( get_post_meta( $post_id, 'infinity_news_post_sidebar_option', true ) ); 
        $new = infinity_news_sanitize_sidebar_option( wp_unslash( $_POST['infinity_news_post_sidebar_option'] ) );
        if ( $new && $new != $old ) {  
            update_post_meta ( $post_id, 'infinity_news_post_sidebar_option', $new );  
        } elseif ( '' == $new && $old ) {  
            delete_post_meta( $post_id,'infinity_news_post_sidebar_option', $old );  
        }
    }
}
endif;   