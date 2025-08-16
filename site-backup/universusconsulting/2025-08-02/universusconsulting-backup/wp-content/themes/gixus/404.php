<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gixus
 */ get_header(); 

if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    global $gixus_options;
    $gixus404title        = $gixus_options['404_heading'];
    $gixus404sub     = $gixus_options['404_sub'];
    $gixus404bttext      = $gixus_options['404_bttext'];
    $gixusbgimg1      = $gixus_options['404_bgimg1']['url'];
    $gixusbgimg2      = $gixus_options['404_bgimg2']['url'];
}
else {
    $gixus404title  = __( '404', 'gixus' );
    $gixus404sub      = __( 'SORRY PAGE WAS NOT FOUND!', 'gixus');    
    $gixus404bttext      = __( 'Back to home', 'gixus');  
    $gixusbgimg1      =  get_template_directory_uri() . '/assets/img/shape/44-left.png';
    $gixusbgimg1      =  get_template_directory_uri() . '/assets/img/shape/44-right.png';  
} ?>
<!-- Start 404 
============================================= -->
<div class="error-page-area default-padding text-center bg-cover">
    <!-- Shape -->
    <div class="shape-left" style="background: url(<?php echo esc_url($gixusbgimg1); ?>);"></div>
    <div class="shape-right" style="background: url(<?php echo esc_url($gixusbgimg2); ?>"></div>
    <!-- End Shape -->
    <div class="container">
        <div class="error-box">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1><?php echo esc_html($gixus404title); ?></h1>
                    <h2><?php echo esc_html($gixus404sub); ?></h2>
                    <a class="btn mt-20 btn-md btn-theme" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($gixus404bttext); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->

<?php get_footer(); ?>