<?php

/**
 * Gixus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gixus
 */

/**
 * Required Files
 */

require_once get_template_directory() . '/inc/redux/config.php';

require_once get_template_directory() . '/inc/redux/color.php';

require_once get_template_directory() . '/inc/class-gixus-walker-header-menu.php';

// /*TGM PLUGIN*/

require_once get_template_directory() . '/tgm-plugin/recommend_plugins.php';

function gixus_fonts() {
    wp_enqueue_style( 'gixus-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null, 'all' );
}

add_action('wp_enqueue_scripts', 'gixus_fonts');

function gixus_enqueue_styles() {

    // Enqueue Bootstrap
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null);

    // Enqueue Magnific Popup
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null);

    // Enqueue Swiper Bundle
    wp_enqueue_style('swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), null);

    // Enqueue Animate
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), null);

    // Enqueue ValidNavs
    wp_enqueue_style('validnavs-css', get_template_directory_uri() . '/assets/css/validnavs.css', array(), null);

    // Enqueue Helper
    wp_enqueue_style('helper-css', get_template_directory_uri() . '/assets/css/helper.css', array(), null);

    // Enqueue Unit Test
    wp_enqueue_style('gixus-unittest', get_template_directory_uri() . '/assets/css/unit-test.css', array(), null);
	
	// Enqueue Main Gixus Style
    wp_enqueue_style('gixus-style', get_template_directory_uri() . '/assets/css/style.css', array(), null);

    

}
add_action('wp_enqueue_scripts', 'gixus_enqueue_styles');

function gixus_enqueue_scripts() {

    // Enqueue Bootstrap Bundle
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue jQuery Appear
    wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), null, true);
    
    // Enqueue jQuery Easing
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array( 'jquery' ), null, true);

    // Enqueue Swiper Bundle
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);

    // Enqueue Progress Bar
    wp_enqueue_script('progress-bar', get_template_directory_uri() . '/assets/js/progress-bar.min.js', array('jquery'), null, true);

    // Enqueue Isotope
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true);

    // Enqueue ImagesLoaded
    wp_enqueue_script('imagesloaded');

    // Enqueue Magnific Popup
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), null, true);

    // Enqueue Count To
    wp_enqueue_script('count-to', get_template_directory_uri() . '/assets/js/count-to.js', array('jquery'), null, true);

    // Enqueue jQuery Nice Select
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);

    // Enqueue Circle Progress
    wp_enqueue_script('circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.js', array('jquery'), null, true);

    // Enqueue Wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);

    // Enqueue YTPlayer
    wp_enqueue_script('ytplayer', get_template_directory_uri() . '/assets/js/YTPlayer.min.js', array('jquery'), null, true);

    // Enqueue ValidNavs
    wp_enqueue_script('validnavs', get_template_directory_uri() . '/assets/js/validnavs.js', array('jquery'), null, true);

    // Enqueue jQuery Lettering
    wp_enqueue_script('lettering', get_template_directory_uri() . '/assets/js/jquery.lettering.min.js', array('jquery'), null, true);

    // Enqueue jQuery CircleType
    wp_enqueue_script('circletype', get_template_directory_uri() . '/assets/js/jquery.circleType.js', array('jquery'), null, true);

    // Enqueue GSAP
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.js', array('jquery'), null, true);

    // Enqueue ScrollTrigger
    wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('jquery'), null, true);

    // Enqueue SplitText
    wp_enqueue_script('splittext', get_template_directory_uri() . '/assets/js/SplitText.min.js', array('jquery'), null, true);

    // Enqueue Main Gixus Script
    wp_enqueue_script('gixus-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'gixus_enqueue_scripts');

function add_google_site_verification() {
    if (is_front_page()) {
        echo '<meta name="google-site-verification" content="-HHvB9qflyc0dJ2sDfecEdDrT1rksHZEHqv4sohmBw0" />' . "\n";
    }
}
add_action('wp_head', 'add_google_site_verification');


/**
 * Gixus Theme Configuration
 */

function gixus_theme_config() {
    // Add theme support
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_editor_style('assets/css/editor-style.css');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    // Set content width
    if (!isset($content_width)) $content_width = 900;

	//     Load theme textdomain
    $gixus_lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('gixus', $gixus_lang);

    // Check if the function exists to avoid errors
    if (function_exists('register_block_style')) {
        // Register a new style for the paragraph block
        register_block_style('core/paragraph', [
            'name'  => 'custom-style',
            'label' => __('Custom Style', 'gixus'),
        ]);
    }

    // Check if the function exists to avoid errors
    if (function_exists('register_block_pattern')) {
        register_block_pattern(
        'gixus/hero-section',
        array(
            'title'       => __('Hero Section', 'gixus'),
            'description' => _x('A custom hero section pattern', 'Block pattern description', 'gixus'),
            'content'     => '<!-- wp:heading --><h2>' . __('Welcome to Gixus', 'gixus') . '</h2><!-- /wp:heading -->',
            )
        );
    }

    register_nav_menus(
        array(
        'main-menu' => esc_html__( 'Main Menu', 'gixus' ),
		'footer-1'  => esc_html__( 'Footer Menu 1', 'gixus' ),
        'footer-2'  => esc_html__( 'Footer Menu 2', 'gixus' ),
        )
    );  
}
add_action('after_setup_theme', 'gixus_theme_config', 0);

/**
 * Add ONLY your required meta tags
 */
add_action('wp_head', function() {
	if (is_page(array('visa-application-form', 'license-application-form', 'thank-you'))) {
        echo '<meta name="robots" content="noindex, nofollow" />' . "\n";
    } else {
        echo '<meta name="robots" content="index, follow, notranslate" />' . "\n";
    }
    ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <?php
}, 1);
/**
 * GIXUS Pagination
 */

function gixus_pagination() {
    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) return;

    $big = 999999999; // an unlikely integer

    $current_page = max( 1, get_query_var('paged') );

    // Start the output
    echo '<ul class="pagination">';

    // Previous link
    echo '<li class="page-item"><a class="page-link" href="' . esc_url( get_pagenum_link( $current_page - 1 ) ) . '"><i class="fas fa-angle-double-left"></i></a></li>';

    // Loop through pages
    for ( $i = 1; $i <= $wp_query->max_num_pages; $i++ ) {
        if ( $i === $current_page ) {
            echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            echo '<li class="page-item"><a class="page-link" href="' . esc_url( get_pagenum_link( $i ) ) . '">' . $i . '</a></li>';
        }
    }

    // Next link
    echo '<li class="page-item"><a class="page-link" href="' . esc_url( get_pagenum_link( $current_page + 1 ) ) . '"><i class="fas fa-angle-double-right"></i></a></li>';

    // End the output
    echo '</ul>';
}

/**
 * Gixus Register Widgets
 */

add_action( 'widgets_init', 'gixus_widgets_init' );
function gixus_widgets_init() {

        register_sidebar( array(
        'name' => esc_html__( 'Main Sidebar', 'gixus' ),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'gixus' ),
        'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
    'after_widget'  => '</div>',
        'before_title'  => '<h4 class="title">',
        'after_title'   => '</h4>',
    ) );
}

/**
 * Gixus Tags Widget
 */

add_filter( 'widget_tag_cloud_args', 'gixus_change_tag_cloud_font_sizes');
function gixus_change_tag_cloud_font_sizes( array $args ) {
    $args['default'] = '13';
    $args['smallest'] = '13';
    $args['largest'] = '13';
    $args['unit'] = 'px';

    return $args;
}


/**
 * Gixus Comments
 */

function gixus_comment_callback($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment;
   $gravatar = get_avatar($comment,$size='100' ); ?>
    <div class="comment-item">
        <div class="avatar">
        <?php echo get_avatar($comment,$size='80' ); ?>
        </div>
        <div class="content">
            <div class="title">
                <h5><?php printf( get_comment_author_link()) ?></h5>
                <span><?php the_time('F j, Y'); ?></span>
            </div>
                <?php comment_text() ?> 
			<div class='comments-info'>
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <span class="unapproved"><?php esc_html_e( 'Your comment is awaiting moderation.', 'gixus' ); ?></span>
                <?php endif; ?>
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'],'reply_text' => '<i class="fa fa-reply"></i>Reply' ) ) ) ?>
            </div>
        </div>
    </div>
<?php
}

/**
 * Gixus Contact Form Filter 
 */

add_filter('wpcf7_autop_or_not', '__return_false'); 

// Elementor Font Awesome Free De-Register
	
function gixus_dequeue_elementor_fontawesome() {
    wp_dequeue_style('hfe-social-share-icons-fontawesome-css');
    wp_dequeue_style('hfe-nav-menu-icons-css');
}
add_action('wp_enqueue_scripts', 'gixus_dequeue_elementor_fontawesome', 999);

// Gixus Demo-Import

function gixus_import_files() {
    return array(

        array(
            'import_file_name'           => 'Business Consulting',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-1.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/',
        ),

        array(
            'import_file_name'           => 'IT Solutions',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-2.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-two/',
        ),

        array(
            'import_file_name'           => 'Creative Agency',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-3.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-three/',
        ),

        array(
            'import_file_name'           => 'Transportation Logistics',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-4.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-four/',
        ),

        array(
            'import_file_name'           => 'Financial Advisor',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-5.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-five/',
        ),
        
        array(
            'import_file_name'           => 'Artificial Intelligence',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-6.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-six/',
        ),

        array(
            'import_file_name'           => 'Business Consulting OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-1.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-one/',
        ),

        array(
            'import_file_name'           => 'IT Solutions OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-2.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-two/',
        ),

        array(
            'import_file_name'           => 'Creative Agency OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-3.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-three/',
        ),

        array(
            'import_file_name'           => 'Transportation Logistics OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-4.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-four/',
        ),

        array(
            'import_file_name'           => 'Financial Advisor OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-5.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-five/',
        ),
        
        array(
            'import_file_name'           => 'Artificial Intelligence OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-6.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-six/',
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'gixus_import_files' );

function gixus_ocdi_after_import( $selected_import ) {

    if ( 'Business Consulting' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'IT Solutions' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Creative Agency' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Three' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Transportation Logistics' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Four' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Financial Advisor' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Five' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }
    
    elseif ( 'Artificial Intelligence' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Business Consulting OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage One', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'IT Solutions OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Two', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Creative Agency OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Three', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Three' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Transportation Logistics OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Four', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Four' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Financial Advisor OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Five', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Five' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }
    
    elseif ( 'Artificial Intelligence OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Six', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
        )
    );

}
add_action( 'pt-ocdi/after_import', 'gixus_ocdi_after_import' );

function custom_breadcrumb_shortcode() {
    ob_start();
    ?>
    <style>
    .ast-header-breadcrumb {
        /* background-color: #f8f9fa; */
        background-color: transparent;
        padding: 10px 0;
        font-size: 14px;
        color: #555;
    }
    .ast-breadcrumbs-wrapper {
        display: flex;
        align-items: center;
    }
    .ast-breadcrumbs-inner nav {
        width: 100%;
    }
    .ast-breadcrumbs ul.trail-items {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
    }
    .ast-breadcrumbs li.trail-item {
        margin-right: 5px;
        display: flex;
        align-items: center;
    }
    .ast-breadcrumbs li.trail-item::after {
        content: ">";
        margin-left: 5px;
        margin-right: 5px;
        color: #aaa;
    }
    .ast-breadcrumbs li.trail-item.trail-end::after {
        content: "";
        margin: 0;
    }
    .ast-breadcrumbs a {
        text-decoration: none;
        color: #3061f7;
        transition: color 0.3s ease;
    }
    .ast-breadcrumbs a:hover {
        color: #005177;
    }
    </style>

    <div class="main-header-bar ast-header-breadcrumb">
        <div class="container">
            <div class="ast-breadcrumbs-wrapper">
                <div class="ast-breadcrumbs-inner">
                    <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <div class="ast-breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><span>Home</span></a>
                                </li>
                                <li class="trail-item trail-end">
                                    <span><span><?php echo esc_html(get_the_title()); ?></span></span>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_breadcrumb', 'custom_breadcrumb_shortcode');

add_action('wp_head', function () {
    global $post;
	$url = get_permalink();
	$title = get_the_title();
	$description = get_the_excerpt() ?: get_bloginfo('description');
	$image = get_the_post_thumbnail_url($post, 'full') ?: 'https://www.example.com/default-image.jpg';
	$site_name = get_bloginfo('name');
	$author = get_the_author_meta('display_name', $post->post_author);
	$published = get_the_date(DATE_ISO8601, $post);
	$modified = get_the_modified_date(DATE_ISO8601, $post);

?>
    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NS2H2XW2');</script>
	<!-- End Google Tag Manager -->

    <!-- Open Graph Meta Tags -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="<?php echo is_single() ? 'article' : 'website'; ?>" />
	<meta property="og:title" content="<?php echo esc_attr($title); ?>" />
	<meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags($description)); ?>" />
	<meta property="og:url" content="<?php echo esc_url($url); ?>" />
	<meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>" />
	<meta property="og:image" content="<?php echo esc_url($image); ?>" />
	<meta property="og:image:width" content="1280" />
	<meta property="og:image:height" content="720" />
	<meta property="og:image:type" content="image/jpeg" />
	<link rel="canonical" href="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>" />

    <?php if (is_single()) : ?>
	<meta name="author" content="<?php echo esc_attr($author); ?>" />
	<?php endif; ?>

    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@YourTwitter" />
	<meta name="twitter:creator" content="@<?php echo esc_attr($author); ?>" />
	<meta name="twitter:title" content="<?php echo esc_attr($title); ?>" />
	<meta name="twitter:description" content="<?php echo esc_attr(wp_strip_all_tags($description)); ?>" />
	<meta name="twitter:image" content="<?php echo esc_url($image); ?>" />
	
    <?php if (is_single()) : ?>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "NewsArticle",
	  "headline": "<?php echo esc_js($title); ?>",
	  "datePublished": "<?php echo $published; ?>",
	  "dateModified": "<?php echo $modified; ?>",
	  "url": "<?php echo esc_url($url); ?>",
	  "author": {
		"@type": "Person",
		"name": "<?php echo esc_js($author); ?>"
	  },
	  "publisher": {
		"@type": "Organization",
		"name": "<?php echo esc_js($site_name); ?>",
		"logo": {
		  "@type": "ImageObject",
		  "url": "https://www.example.com/logo.png"
		}
	  },
	  "image": {
		"@type": "ImageObject",
		"url": "<?php echo esc_url($image); ?>",
		"width": "1280",
		"height": "720"
	  },
	  "articleBody": <?php echo json_encode(wp_strip_all_tags(get_the_content())); ?>
	}
	</script>
	<?php endif; ?>

    <?php if (!is_front_page()) : ?>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "BreadcrumbList",
	  "itemListElement": [
		{
		  "@type": "ListItem",
		  "position": 1,
		  "name": "Home",
		  "item": "<?php echo esc_url(home_url()); ?>"
		},
		{
		  "@type": "ListItem",
		  "position": 2,
		  "name": "<?php echo esc_js(get_the_title()); ?>",
		  "item": "<?php echo esc_url(get_permalink()); ?>"
		}
	  ]
	}
	</script>
    <?php endif; ?>
    
    <?php

    if (is_front_page()) {
        ?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Universus Consulting",
        "url": "https://www.universusconsulting.com/",
        "logo": "https://www.universusconsulting.com/wp-content/uploads/2024/10/universus-consulting-logo-1.webp",
        "sameAs": [
            "https://www.linkedin.com/company/universus-consulting-fzco/",
            "https://www.x.com/UniversusFzco"
        ],
        "contactPoint": [
            {
            "@type": "ContactPoint",
            "telephone": "+971 55 539 7229",
            "contactType": "customer service",
            "email": "hello@universusconsulting.com",
            "areaServed": "AE",
            "availableLanguage": "en",
                "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dubai UAE",
            "postalCode": "342001",
            "streetAddress": "IFZA Business Park, Building A1, Dubai Silicon Oasis,"
                }
            },
            {
            "@type": "ContactPoint",
            "telephone": "+91 9999 105 777",
            "contactType": "customer service",
            "email": "hello@universusconsulting.com",
            "areaServed": "IN",
            "availableLanguage": [
                "en",
                "hi"
            ]
            }
        ]
        }
        </script>

        <?php
    }

    if (is_page('thank-you')) { ?>
        <!-- Google Ads Conversion Script -->
        <script>
          gtag('event', 'conversion', {
            'send_to': 'AW-17416943897/LGu1CLi20fwaEJnyhfFA'
          });
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17416943897"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-17416943897');
        </script>
    <?php }
});
add_action('wp_footer', function () {
    if (!is_singular()) return;

    global $post;
    ob_start();
    the_content(); // Render Elementor and shortcodes
    $rendered_content = ob_get_clean();

    // Match questions in <button class="accordion-button"> and answers in <div class="accordion-body">
    preg_match_all(
        '/<button[^>]*class="[^"]*accordion-button[^"]*"[^>]*>(.*?)<\/button>.*?<div[^>]*class="[^"]*accordion-body[^"]*"[^>]*>(.*?)<\/div>/is',
        $rendered_content,
        $matches
    );

    if (!empty($matches[1]) && !empty($matches[2])) {
        $faq_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => []
        ];

        foreach ($matches[1] as $i => $question) {

            // ✅ Clean answer: remove tags + normalize spaces
            $answer_text = wp_strip_all_tags($matches[2][$i]);
            $answer_text = preg_replace('/\s+/', ' ', $answer_text); // collapse multiple spaces
            $answer_text = trim($answer_text); // remove leading/trailing space

            $faq_schema['mainEntity'][] = [
                '@type' => 'Question',
                'name' => wp_strip_all_tags($question),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $answer_text
                ]
            ];
        }

        echo '<script type="application/ld+json">' .
            wp_json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) .
            '</script>';
    }
});


// Add floating phone call button to footer
function custom_floating_call_button() {
    ?>
    <!-- Floating Call Button HTML -->
    <div class="footer_content">
      <div class="hotline-phone-ring-wrap" id="hotline-phone-1">
        <div class="hotline-phone-ring">
          <div class="hotline-phone-ring-circle"></div>
          <div class="hotline-phone-ring-circle-fill"></div>
          <div class="hotline-phone-ring-img-circle">
            <a href="javascript:void(0)" class="pps-btn-img">
              <span class="background-call"></span>
            </a>
          </div>
        </div>
        <div class="hotline-bar">
		  <a href="tel:+971555397229" class="btn btn-gradient circle">
            <span class="text-hotline">+971 55 539 7229 (Global)</span>
          </a>
          <a href="tel:+919999105777" class="btn btn-gradient circle">
            <span class="text-hotline">+91 9999 105 777 (India)</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Floating Call Button CSS -->
	<style>

		.hotline-phone-ring {
		  opacity: 0;
		  visibility: hidden;
		  transition: opacity 0.8s ease, visibility 0.8s ease;
		}

		.hotline-phone-ring.show {
		  opacity: 1;
		  visibility: visible;
		}

		/* Show hotline-bar smoothly on hover */
		.hotline-phone-ring:hover + .hotline-bar,
		.hotline-bar:hover {
		  opacity: 1;
		  visibility: visible;
		}
	.hotline-phone-ring-wrap {
	  position: fixed;
	  bottom: 0;
	  right: 0;
	  z-index: 999999;
	}
	.hotline-phone-ring {
	  position: relative;
	  visibility: visible;
	  background-color: transparent;
	  width: 110px;
	  height: 110px;
	  cursor: pointer;
	  z-index: 11;
	  -webkit-backface-visibility: hidden;
	  -webkit-transform: translateZ(0);
	  transition: visibility 0.5s;
	  right: 0;
	  bottom: 0;
	  display: block;
	}
	.hotline-phone-ring-circle {
	  width: 110px;
	  height: 110px;
	  top: 0;
	  right: 0;
	  position: absolute;
	  background-color: transparent;
	  border-radius: 100%;
	  border: 2px solid #1564a7;
	  -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
	  animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
	  transition: all 0.5s;
	  -webkit-transform-origin: 50% 50%;
	  -ms-transform-origin: 50% 50%;
	  transform-origin: 50% 50%;
	  opacity: 0.5;
	}
	.hotline-phone-ring-circle-fill {
	  width: 80px;
	  height: 80px;
	  top: 16px;
	  right: 16px;
	  position: absolute;
	  background-color: rgba(21, 100, 167, 0.7);
	  border-radius: 100%;
	  border: 2px solid transparent;
	  -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
	  animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
	  transition: all 0.5s;
	  -webkit-transform-origin: 50% 50%;
	  -ms-transform-origin: 50% 50%;
	  transform-origin: 50% 50%;
	}
	.hotline-phone-ring-img-circle {
	  background-color: #25D366;
	  width: 50px;
	  height: 50px;
	  top: 31px;
	  left: 31px;
	  position: absolute;
	  background-size: 20px;
	  border-radius: 100%;
	  border: 2px solid transparent;
	  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
	  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
	  -webkit-transform-origin: 50% 50%;
	  -ms-transform-origin: 50% 50%;
	  transform-origin: 50% 50%;
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -ms-flexbox;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	}
	.hotline-phone-ring-img-circle .pps-btn-img {
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -ms-flexbox;
	  display: flex;
	}
	.hotline-bar {
	  display: none;
	  position: absolute;
	  width: 270px;
	  border-radius: 3px;
	  padding: 0 10px;
	  background-size: 100%;
	  cursor: pointer;
	  transition: all 0.8s;
	  -webkit-transition: all 0.8s;
	  z-index: 9;
	  border-radius: 50px;
	  right: 90px;
	  bottom: 0px;
	  opacity: 0;
	  visibility: hidden;
	  transition: opacity 0.5s ease, visibility 0.5s ease;
	}
/* 	 .hotline-phone-ring:hover + .hotline-bar {
	    display: block;
	  } */
	.hotline-bar > a {
	  font-size: 14px;
	  letter-spacing: 1px;
	  display: block;
	  margin-bottom: 4px
	}
	.hotline-bar > a:hover,
	.hotline-bar > a:active {
	  color: #fff;
	}
	span.background-zalo-ib,
	span.background-call {
	  width: 25px;
	  height: 25px;
	  background-size: cover;
	}
	span.background-call {
	  background-image: 	url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMA/fnwB9f2sUzq5dLDrDUi+t27jWpmXzALBOHNtJ6Dd1hUR0I9OB8Cx5mSiH1wGxkWEaWjUGLgVpsAAAFWSURBVDjLdZPpkoIwEIQn4RIFFA+8EURBXY+98v6vtrkYki38fqWmO0yqZwCDJjnsvHASbuPsC3oYjBhC4vF/+RwRxhwHLTRfm/I4IL4WkcA19CHrIVqB5pmqSjixHVetf3pMcnkVxHYMpL7Sr9/zngvbkDYAbZFs5JumtuMXOKrB8AMER9swFfno8wIkI8vg8zAifT4IebmjzGIJY/Nrruczmww7UN/lBoaJYeO5PjnshC8wmKOB58ANyYTZFFDq+5xKDHUjxvSDT60h6QypGM76nNU8/ZnSh7wirugR3KAjl5WYn4RX7wJ5QEfUhvN0ZAvFHfWEqJw4c2YgJyIjUx0Ezc50XOSl9U2Gpzd3JdwI2eaPu6rMcOFZLyH+HftenRSgedE+nZbQMuvT/SPqtRrQ9krM/icl4hpGA4AKl2GUudDxzbdJ+d0ySCn14gosgiCB9/wB7hZ8KfMqBEkAAAAASUVORK5CYII=);
	}
	span.background-zalo-ib {
	  background-image: url(data:image/png;base64,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);
	}
	.zalo-ben-phai {
	  position: fixed;
	  right: 0;
	  bottom: 0;
	  z-index: 999999;
	}
	/*! CSS Used keyframes */
	@-webkit-keyframes phonering-alo-circle-anim {
	  0% {
		-webkit-transform: rotate(0) scale(0.5) skew(1deg);
		-webkit-opacity: 0.1;
	  }
	  30% {
		-webkit-transform: rotate(0) scale(0.7) skew(1deg);
		-webkit-opacity: 0.5;
	  }
	  100% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
		-webkit-opacity: 0.1;
	  }
	}
	@-webkit-keyframes phonering-alo-circle-fill-anim {
	  0% {
		-webkit-transform: rotate(0) scale(0.7) skew(1deg);
		opacity: 0.6;
	  }
	  50% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
		opacity: 0.6;
	  }
	  100% {
		-webkit-transform: rotate(0) scale(0.7) skew(1deg);
		opacity: 0.6;
	  }
	}
	@-webkit-keyframes phonering-alo-circle-img-anim {
	  0% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
	  }
	  10% {
		-webkit-transform: rotate(-25deg) scale(1) skew(1deg);
	  }
	  20% {
		-webkit-transform: rotate(25deg) scale(1) skew(1deg);
	  }
	  30% {
		-webkit-transform: rotate(-25deg) scale(1) skew(1deg);
	  }
	  40% {
		-webkit-transform: rotate(25deg) scale(1) skew(1deg);
	  }
	  50% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
	  }
	  100% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
	  }
	}
	
	@media (min-width: 768px) {
	  .hotline-phone-ring:hover + .hotline-bar {
		display: block;
	  }
	}


  </style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
		const hotlineRing = document.querySelector('.hotline-phone-ring');
        if (!hotlineRing) return;

        setTimeout(() => {
            hotlineRing.classList.add('show');
        }, 3000); // 3 seconds
		
        const hotlineWrap = document.querySelector('.hotline-phone-ring-wrap');
        const hotlineBar = document.querySelector('.hotline-bar');

        if (!hotlineWrap || !hotlineRing || !hotlineBar) return;

        // Show on hover or click
        hotlineRing.addEventListener('mouseenter', () => {
            hotlineBar.style.display = 'block';
        });

        hotlineRing.addEventListener('click', (e) => {
			e.stopPropagation(); // prevent closing when clicking itself

			if (hotlineBar.style.display === 'block') {
				hotlineBar.style.display = 'none';   // hide if already visible
			} else {
				hotlineBar.style.display = 'block';  // show if hidden
			}
		});


        hotlineBar.addEventListener('click', (e) => {
            e.stopPropagation(); // don't hide when clicking inside bar
        });

        // Hide when clicking outside
        document.body.addEventListener('click', () => {
            hotlineBar.style.display = 'none';
        });

        // Optional: Keep showing while hovering over hotline-bar
        hotlineBar.addEventListener('mouseenter', () => {
            hotlineBar.style.display = 'block';
        });

        hotlineBar.addEventListener('mouseleave', () => {
            hotlineBar.style.display = 'none';
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'custom_floating_call_button');

add_filter('wpseo_schema_graph_pieces', function ($pieces, $context) {

    // Remove Breadcrumb schema ONLY on homepage
    if (is_front_page() || is_home()) {
        foreach ($pieces as $key => $piece) {
            // Remove the BreadcrumbList schema
            if ( $piece instanceof \Yoast\WP\SEO\Generators\Schema\Breadcrumb ) {
                unset( $pieces[$key] );
            }

            // Remove breadcrumb reference from WebPage piece
            if ( $piece instanceof \Yoast\WP\SEO\Generators\Schema\WebPage ) {
                if ( isset( $piece->context['breadcrumb'] ) ) {
                    unset( $piece->context['breadcrumb'] );
                }
            }
        }
    }

    return $pieces;
}, 11, 2);


// add_action('template_redirect', function () {
//     ob_start(function ($buffer) {

//         // Remove Yoast breadcrumb only on homepage
//         if (is_front_page() || is_home()) {
//             $buffer = preg_replace('/"breadcrumb":\s*\{[^}]+\},?/', '', $buffer);
//         }

//         $buffer = preg_replace('/<meta\s+name=["\']viewport["\'][^>]*>/i', '', $buffer);

//         $buffer = preg_replace('/<meta\s+name=[\'"]robots[\'"]\s+content=[\'"]index,\s*follow,[^>]+>/i', '', $buffer);


//         return $buffer;
//     });
// });
// add_action('template_redirect', function () {
//     ob_start(function ($buffer) {

//         // ✅ Replace the viewport meta tag with your custom one
//         $buffer = preg_replace(
//             '/<meta\s+name=["\']viewport["\'][^>]*>/i',
//             '<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>',
//             $buffer
//         );

//         // ✅ Replace the robots meta tag with your custom one
//         $buffer = preg_replace(
//             '/<meta\s+name=["\']robots["\'][^>]*>/i',
//             '<meta name="robots" content="index, follow, notranslate"/>',
//             $buffer
//         );

//         return $buffer;
//     });
// });

function ps_clean_meta_tags_start() {
    ob_start('ps_remove_specific_meta_tags');
}
add_action('template_redirect', 'ps_clean_meta_tags_start');

function ps_remove_specific_meta_tags($html) {
    // Define the exact meta tags you want to remove
    $remove = [
        '<meta name="viewport" content="width=device-width, initial-scale=1" />',
        "<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />",
    ];

    // Remove each exact meta tag
    foreach ($remove as $tag) {
        $html = str_replace($tag, '', $html);
    }

    return $html;
}