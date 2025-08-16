<?php 
if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
// Output Customize CSS
function gixus_customize_css() { 
  global $gixus_options; ?>
	<style>
    /* Varialbes */
:root {
  --font-default: 'Outfit', sans-serif;
  --font-heading: 'Outfit', sans-serif;
  --fontawesome: "Font Awesome 5 Pro";
  --black: <?php echo esc_html($gixus_options['colorcode1']); ?>;
  --dark: <?php echo esc_html($gixus_options['colorcode2']); ?>;
  --dark-secondary: <?php echo esc_html($gixus_options['colorcode3']); ?>;
  --dark-optional: <?php echo esc_html($gixus_options['colorcode4']); ?>;
  --white: <?php echo esc_html($gixus_options['colorcode5']); ?>;
  --color-primary: <?php echo esc_html($gixus_options['colorcode6']); ?>;
  --color-secondary: <?php echo esc_html($gixus_options['colorcode7']); ?>;
  --color-optional: <?php echo esc_html($gixus_options['colorcode8']); ?>;
  --color-style-two: <?php echo esc_html($gixus_options['colorcode9']); ?>;
  --color-heading: <?php echo esc_html($gixus_options['colorcode10']); ?>;
  --color-paragraph: <?php echo esc_html($gixus_options['colorcode11']); ?>;
  --box-shadow-primary: -1px 3px 10px 0 rgba(0, 0, 0, 0.6);
  --box-shadow-secondary: 0 10px 30px 0 rgba(44, 130, 237, 0.4);
  --box-shadow-regular: 0px 2px 12px 0px #e7e7e7;
  --bg-gray: <?php echo esc_html($gixus_options['colorcode12']); ?>;
  --bg-gray-secondary: <?php echo esc_html($gixus_options['colorcode13']); ?>;
  --bg-gradient: linear-gradient(90deg, <?php echo esc_html($gixus_options['color-gra1']['from']); ?>  0%, <?php echo esc_html($gixus_options['color-gra1']['to']); ?> 100%);
  --bg-gradient-reverse: linear-gradient(90deg, <?php echo esc_html($gixus_options['color-gra2']['from']); ?>  0%, <?php echo esc_html($gixus_options['color-gra2']['to']); ?> 100%);
}
		
.gixus-preloader .animation-preloader::after{
	background: url(<?php echo esc_url($gixus_options['preloader_img']['url']); ?>);
	background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}
		
.btn.btn-gradient::after{
	background-image: linear-gradient(to right, <?php echo esc_html($gixus_options['color-gra3']['from']); ?> , <?php echo esc_html($gixus_options['color-gra3']['to']); ?>, <?php echo esc_html($gixus_options['color-gra3']['from']); ?> );
}
  </style>

<?php }

add_action('wp_head', 'gixus_customize_css');

} ?>