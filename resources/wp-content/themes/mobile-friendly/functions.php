<?php
/**
 * mobile-friendly functions and definitions
 *
 * @package mobile-friendly
 */

global $class_name;
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'mobile_friendly_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mobile_friendly_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mobile-friendly, use a find and replace
	 * to change 'mobile-friendly' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mobile-friendly', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mobile-friendly' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Adds support for editor color palette.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Gray', 'mobile-friendly' ),
				'slug'  => 'gray',
				'color' => '#777',
			),
			array(
				'name'  => __( 'Light Gray', 'mobile-friendly' ),
				'slug'  => 'light-gray',
				'color' => '#f5f5f5',
			),
			array(
				'name'  => __( 'Black', 'mobile-friendly' ),
				'slug'  => 'black',
				'color' => '#000000',
			),

			array(
				'name'  => __( 'Blue', 'mobile-friendly' ),
				'slug'  => 'blue',
				'color' => '#0286cf',
			),

			array(
				'name'  => __( 'Legacy', 'mobile-friendly' ),
				'slug'  => 'legacy',
				'color' => '#b6b6b6',
			),

			array(
				'name'  => __( 'Red', 'mobile-friendly' ),
				'slug'  => 'red',
				'color' => '#c80a00',
			),
			array(
				'name'  => __( 'Text', 'mobile-friendly' ),
				'slug'  => 'textdefault',
				'color' => '#444444',
			),

			array(
				'name'  => __( 'Link', 'mobile-friendly' ),
				'slug'  => 'linkdefault',
				'color' => '#1eaedb',
			),

			array(
				'name'  => __( 'Hover', 'mobile-friendly' ),
				'slug'  => 'hoverdefault',
				'color' => '#000',
			),
		)
	);

}
endif; // mobile_friendly_setup
add_action( 'after_setup_theme', 'mobile_friendly_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mobile_friendly_widgets_init() {
global $class_name;
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'mobile-friendly' ),
		'id'            => 'sidebar-1',
		'description'   => __('This widget is located in the left off-screen sidebar, underneath the menu.', 'mobile-friendly'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'mobile-friendly' ),
		'id'            => 'right-sidebar',
		'description'   => __('This widget is located in the right off-screen sidebar.', 'mobile-friendly'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'First Homepage Widget', 'mobile-friendly' ),
		'id'            => 'homepage-first',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Homepage Widget', 'mobile-friendly' ),
		'id'            => 'homepage-second',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Third Homepage Widget', 'mobile-friendly' ),
		'id'            => 'homepage-third',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget', 'mobile-friendly' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="'.$class_name.'">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'mobile_friendly_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mobile_friendly_scripts() {

	wp_enqueue_style( 'mobile-friendly-style', get_stylesheet_uri(), array() );

	wp_enqueue_style( 'mobile-friendly-icons', get_template_directory_uri() . '/fonts/mobilefirst.css' );

	wp_enqueue_style( 'mobile-friendly-animate', get_template_directory_uri() . '/css/animate.css' );

	wp_enqueue_script( 'mobile-friendly-wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.2', true );

	wp_enqueue_script( 'mobile-friendly-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mobile-friendly-bigslide', get_template_directory_uri() . '/js/bigslide.js', array( 'jquery' ), '0.5.0', true );

	wp_enqueue_script( 'mobile-friendly-jsfunctions', get_template_directory_uri() . '/js/functions.js', array(), '', true );

	wp_enqueue_script( 'mobile-friendly-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'mobile-friendly-bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script( 'mobile-friendly-bootstrap-js', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js');
	wp_enqueue_style( 'mobile-friendly-fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', false, '4.7.0');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mobile_friendly_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() .'/widget.php';

function mobile_friendly_footer_sidebar_params($params) {
	$sidebar_id = $params[0]['id'];
	if ( $sidebar_id == 'footer' ) {
	$total_widgets = wp_get_sidebars_widgets();
	$count = count($total_widgets[$sidebar_id]);
	$params[0]['before_widget'] = str_replace('class="', 'class="span' . floor(12 / $count) . ' ', $params[0]['before_widget']);
	}
    return $params;
}
add_filter('dynamic_sidebar_params','mobile_friendly_footer_sidebar_params');

function mobile_friendly_featured_image() {
	global $post;
	if( has_post_thumbnail() ): ?>
			<div class="featured-image">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'mobile-friendly' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
					<?php the_post_thumbnail( apply_filters( 'cyberchimps_post_thumbnail_size', 'thumbnail' ) ); ?>
				</a>
			</div>
		<?php    endif;

}

//Enqueue google font
function mobile_friendly_google_fonts() {
	$query_args = array(
		'family' => 'Source+Sans+Pro:400,300,700',
		'subset' => 'latin,latin-ext',
	);
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }

add_action('wp_enqueue_scripts', 'mobile_friendly_google_fonts');

add_action( 'admin_notices', 'mobile_friendly_admin_notice' );
function mobile_friendly_admin_notice(){
	global $mobile_friendly_check_screen;
	$mobile_friendly_check_screen = get_admin_page_title();

   if ( $mobile_friendly_check_screen == 'Manage Themes' )
{
          echo '<div class="notice notice-info is-dismissible"><p class="charitypurelite-upgrade-callout" style="font-size:18px; "><a href="https://cyberchimps.com/free-download-50-stock-images-use-please/?utm_source=mobile-friendly" target="_blank" style="text-decoration:none;">FREE - Download CyberChimps\' Pack of 50 High-Resolution Stock Images Now</a></p></div>';
}
}

function mobile_friendly_customize_edit_links( $wp_customize ) {


   $wp_customize->selective_refresh->add_partial( 'blogname', array(
'selector' => '.site-title a'
) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description'
	) );

	$wp_customize->selective_refresh->add_partial( 'cyberchimps_options[custom_logo]', array(
		'selector' => '#logo'
	) );

	$wp_customize->selective_refresh->add_partial( 'cyberchimps_options[theme_backgrounds]', array(
		'selector' => '#social'
	) );

	$wp_customize->selective_refresh->add_partial( 'cyberchimps_options[searchbar]', array(
		'selector' => '#navigation #searchform'
	) );

	$wp_customize->selective_refresh->add_partial( 'cyberchimps_options[footer_copyright_text]', array(
		'selector' => '#copyright'
	) );

	$wp_customize->selective_refresh->add_partial( 'nav_menu_locations[primary]', array(
		'selector' => '.main-navigation'
	) );

	$wp_customize->selective_refresh->add_partial( 'nav_menu_locations[secondary]', array(
		'selector' => '.second-navigation'
	) );

	$wp_customize->selective_refresh->add_partial( 'cyberchimps_options[blog_title]', array(
		'selector' => '.page-title'
	) );

	$wp_customize->selective_refresh->add_partial( 'cyberchimps_options[footer_show_toggle]', array(
		'selector' => '#footer_wrapper'
	) );

	$wp_customize->selective_refresh->add_partial( 'hero_heading', array(
		'selector' => '.hero-content h1'
	) );

	$wp_customize->selective_refresh->add_partial( 'hero_secondary', array(
		'selector' => '.hero-content h2'
	) );

	$wp_customize->selective_refresh->add_partial( 'hero_button_text', array(
		'selector' => '.hero-content .button p'
	) );

	$wp_customize->selective_refresh->add_partial( 'hero_image', array(
		'selector' => '.achimps'
	) );

	$wp_customize->selective_refresh->add_partial( 'cta_text', array(
		'selector' => '.cta-content h2'
	) );

	$wp_customize->selective_refresh->add_partial( 'cta_button_text', array(
		'selector' => '.first-button p'
	) );

	$wp_customize->selective_refresh->add_partial( 'cta_second_button_text', array(
		'selector' => '.second-button p'
	) );

	$wp_customize->selective_refresh->add_partial( 'cta_image', array(
		'selector' => '.cta-content .featured-image'
	) );

	$wp_customize->selective_refresh->add_partial( 'teaser_text', array(
		'selector' => '.teaser-content h3'
	) );

	$wp_customize->selective_refresh->add_partial( 'copyright', array(
		'selector' => '.copyright'
	) );

	$wp_customize->selective_refresh->add_partial( 'site_info', array(
		'selector' => '.site-info-inner'
	) );

}
add_action( 'customize_register', 'mobile_friendly_customize_edit_links' );
add_theme_support( 'customize-selective-refresh-widgets' );

add_action( 'admin_notices', 'mobile_friendly_admin_notices' );
function mobile_friendly_admin_notices()
{
	$admin_check_screen = get_admin_page_title();

	if( !class_exists('SlideDeckPlugin') )
	{
	$plugin='slidedeck/slidedeck.php';
	$slug = 'slidedeck';
	$installed_plugins = get_plugins();

	 if ( $admin_check_screen == 'Manage Themes' || $admin_check_screen == 'Theme Options Page' )
	{
		?>
		<div class="notice notice-info is-dismissible" style="margin-top:15px;">
		<p>
			<?php if( isset( $installed_plugins[$plugin] ) )
			{
			?>
				 <a href="<?php echo admin_url( 'plugins.php' ); ?>">Activate the SlideDeck Lite plugin</a>
			 <?php
			}
			else
			{
			 ?>
			 <a href="<?php echo wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . $slug ), 'install-plugin_' . $slug ); ?>">Install the SlideDeck Lite plugin</a>
			 <?php } ?>

		</p>
		</div>
		<?php
	}
	}

	if( !class_exists('WPForms') )
	{
	$plugin = 'wpforms-lite/wpforms.php';
	$slug = 'wpforms-lite';
	$installed_plugins = get_plugins();
	 if ( $admin_check_screen == 'Manage Themes' || $admin_check_screen == 'Theme Options Page' )
	{
		?>
		<div class="notice notice-info is-dismissible" style="margin-top:15px;">
		<p>
			<?php if( isset( $installed_plugins[$plugin] ) )
			{
			?>
				 <a href="<?php echo admin_url( 'plugins.php' ); ?>">Activate the WPForms Lite plugin</a>
			 <?php
			}
			else
			{
			 ?>
	 		 <a href="<?php echo wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . $slug ), 'install-plugin_' . $slug ); ?>">Install the WP Forms Lite plugin</a>
			 <?php } ?>
		</p>
		</div>
		<?php
	}
	}

	if ( $admin_check_screen == 'Manage Themes' || $admin_check_screen == 'Theme Options Page' )
	{
	?>
		<div class="notice notice-success is-dismissible">
				<b><p>Liked this theme? <a href="https://wordpress.org/support/theme/mobile-friendly/reviews/#new-post" target="_blank">Leave us</a> a ***** rating. Thank you! </p></b>
		</div>
		<?php
	}

}



add_action( 'add_meta_boxes', 'mobile_friendly_team_add_meta_box' );

function mobile_friendly_team_add_meta_box()
{   global $post;

add_meta_box( 'mobile_friendly_team_meta_box', 'Team Section Options', 'mobile_friendly_team_meta_box_cb', 'post', 'normal', 'high' );
}
function mobile_friendly_team_meta_box_cb()
{
	global $post;
	$values = get_post_custom( $post->ID );
	$mobile_friendly_meta_box_designation = isset( $values['mobile_friendly_meta_box_designation'] ) ? $values['mobile_friendly_meta_box_designation'][0] : '';
	$mobile_friendly_meta_box_facebook = isset( $values['mobile_friendly_meta_box_facebook'] ) ? $values['mobile_friendly_meta_box_facebook'][0] : '';
	$mobile_friendly_meta_box_twitter = isset( $values['mobile_friendly_meta_box_twitter'] ) ? $values['mobile_friendly_meta_box_twitter'][0] : '';
	$mobile_friendly_meta_box_googleplus = isset( $values['mobile_friendly_meta_box_googleplus'] ) ? $values['mobile_friendly_meta_box_googleplus'][0] : '';
	$mobile_friendly_meta_box_linkedin = isset( $values['mobile_friendly_meta_box_text_linkedin'] ) ? $values['mobile_friendly_meta_box_text_linkedin'][0] : '';

	wp_nonce_field( 'mobile_friendly_meta_box_nonce', 'meta_box_nonce' );
	?>
	<p><?php echo esc_html(__("To use this post for front page's team section, please enter below details:",'mobile-friendly')); ?>
    </p>
	<p>
        <label for="mobile_friendly_meta_box_designation"><?php echo esc_html(__('Member designation','mobile-friendly')); ?></label>
        <input type="text" name="mobile_friendly_meta_box_designation" id="mobile_friendly_meta_box_designationion" value="<?php echo $mobile_friendly_meta_box_designation; ?>" />
    </p>
	<p>
        <label for="mobile_friendly_meta_box_facebook"><?php echo esc_html(__('Facebook Link','mobile-friendly')); ?></label>
        <input type="text" name="mobile_friendly_meta_box_facebook" id="mobile_friendly_meta_box_facebook" value="<?php echo $mobile_friendly_meta_box_facebook; ?>" />
    </p>
	<p>
        <label for="mobile_friendly_meta_box_twitter"><?php echo esc_html(__('Twitter Link','mobile-friendly')); ?></label>
        <input type="text" name="mobile_friendly_meta_box_twitter" id="mobile_friendly_meta_box_twitter" value="<?php echo $mobile_friendly_meta_box_twitter; ?>" />
    </p>
	<p>
        <label for="mobile_friendly_meta_box_googleplus"><?php echo esc_html(__('GooglePlus Link','mobile-friendly')); ?></label>
        <input type="text" name="mobile_friendly_meta_box_googleplus" id="mobile_friendly_meta_box_googleplus" value="<?php echo $mobile_friendly_meta_box_googleplus; ?>" />
    </p>
	<p>
        <label for="mobile_friendly_meta_box_text_linkedin"><?php echo esc_html(__('LinkedIn Link','mobile-friendly')); ?></label>
        <input type="text" name="mobile_friendly_meta_box_text_linkedin" id="mobile_friendly_meta_box_text_linkedin" value="<?php echo $mobile_friendly_meta_box_linkedin; ?>" />
    </p>

<?php
}
add_action( 'save_post', 'mobile_friendly_team_meta_box_save' );
function mobile_friendly_team_meta_box_save( $post_id )
{
	$allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );

	if( isset( $_POST['mobile_friendly_meta_box_designation'] ) )
        update_post_meta( $post_id, 'mobile_friendly_meta_box_designation', wp_kses( $_POST['mobile_friendly_meta_box_designation'], $allowed ) );
	if( isset( $_POST['mobile_friendly_meta_box_facebook'] ) )
        update_post_meta( $post_id, 'mobile_friendly_meta_box_facebook', wp_kses( $_POST['mobile_friendly_meta_box_facebook'], $allowed ) );
	if( isset( $_POST['mobile_friendly_meta_box_twitter'] ) )
        update_post_meta( $post_id, 'mobile_friendly_meta_box_twitter', wp_kses( $_POST['mobile_friendly_meta_box_twitter'], $allowed ) );
	if( isset( $_POST['mobile_friendly_meta_box_googleplus'] ) )
        update_post_meta( $post_id, 'mobile_friendly_meta_box_googleplus', wp_kses( $_POST['mobile_friendly_meta_box_googleplus'], $allowed ) );
	if( isset( $_POST['mobile_friendly_meta_box_text_linkedin'] ) )
        update_post_meta( $post_id, 'mobile_friendly_meta_box_text_linkedin', wp_kses( $_POST['mobile_friendly_meta_box_text_linkedin'], $allowed ) );
}


if( !function_exists('mobile_friendly_get_attachment_id_from_url') ) :
function mobile_friendly_get_attachment_id_from_url( $attachment_url = '' ) {
	global $wpdb;
	$attachment_id = false;
	// If there is no url, return.
	if ( '' == $attachment_url )
		return;
	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();
	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
	}
	return $attachment_id;
}
endif;


/**
 *  Enqueue block styles  in editor
 */
function mobile_friendlyblock_styles() {
	$text_color       = get_theme_mod( 'mobile_friendly_text_color' ) ? get_theme_mod( 'mobile_friendly_text_color' ) : '#444444';
	$bg_color         = get_theme_mod( 'mobile_friendly_bg_color' ) ? get_theme_mod( 'mobile_friendly_bg_color' ) : '#ffffff';
	$link_color       = get_theme_mod( 'mobile_friendly_hyperlink_color' ) ? get_theme_mod( 'mobile_friendly_hyperlink_color' ) : '#1eaedb';
	$link_hover_color = get_theme_mod( 'mobile_friendly_hyperlink_hover_color' ) ? get_theme_mod( 'mobile_friendly_hyperlink_hover_color' ) : '#000';
	?>
	<style>
	.wp-block-freeform,
	.editor-writing-flow,
	.editor-post-title__block,
	.editor-styles-wrapper{
		color: <?php echo esc_html( $text_color ); ?>;
	}
	.editor-writing-flow{
		background-color:<?php echo esc_html( $bg_color ); ?>;
		background-image:url('<?php echo esc_url( get_theme_mod( 'background_image' ) ); ?>');
	}

	/**
	 * Link styles
	 * -----------------------------------------------------------
	 */
	.wp-block-freeform.block-library-rich-text__tinymce a,
	.editor-writing-flow a{
		color: <?php echo esc_html( $link_color ); ?>;
		text-decoration: none;
	}

	.wp-block-freeform.block-library-rich-text__tinymce a:hover,
	.wp-block-freeform.block-library-rich-text__tinymce a:focus,
	.editor-writing-flow a:hover,
	.editor-writing-flow a:focus{
		color: <?php echo esc_html( $link_hover_color ); ?>;
	}

	</style>
	<?php
	wp_enqueue_style( 'mobile-friendly-gutenberg-blocks', get_stylesheet_directory_uri() . '/css/gutenberg-blocks.css', array(), '1.0' );

}
add_action( 'enqueue_block_editor_assets', 'mobile_friendlyblock_styles' );
