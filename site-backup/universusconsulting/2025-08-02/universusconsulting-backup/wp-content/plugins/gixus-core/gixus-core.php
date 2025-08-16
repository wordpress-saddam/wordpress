<?php
/**
 * Plugin Name: Gixus Core
 * Description: Gixus Core Plugin Contains Elementor Widgets Specifically created for gixus WordPress Theme.
 * Version: 2.5
 * Author: WordPressRiver
 * Text Domain: gixus-core
 * Elementor tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

final class gixus_Core {
    const VERSION = '1.0';
    const MINIMUM_ELEMENTOR_VERSION = '3.0.0';
    const MINIMUM_PHP_VERSION = '5.6';

    private static $_instance = null;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
            self::$_instance->init();
        }
        return self::$_instance;
    }

    private function init() {
        // Load necessary files and hooks
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
        add_action( 'init', [ $this, 'load_textdomain' ] );
        add_action( 'elementor/init', [ $this, 'add_elementor_category' ] );
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'gixus-core', false, dirname( __FILE__ ) . '/languages' );
    }

    public function add_elementor_category() {
            \Elementor\Plugin::instance()->elements_manager->add_category( 'gixus', [
                'title' => __( 'Gixus Elements', 'gixus-core' ),
            ], 1 );
        }


    public function register_widgets() {


        // Home Version One

        require_once( __DIR__ . '/widgets/home1/header-v1.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Gixus_Header_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/footer-v1.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Footer_Widget() );

        require_once( __DIR__ . '/widgets/home1/hero.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Hero_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/features.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Features_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_About_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/service.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Service_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/choose.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Choose_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/project.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Project_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/team.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Team_Widget() ); 

        require_once( __DIR__ . '/widgets/home1/counter.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Counter_Widget() );

        require_once( __DIR__ . '/widgets/home1/testimonial.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Testimonial_Widget() );

        require_once( __DIR__ . '/widgets/home1/blog.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Blog_Widget() ); 
		
		require_once( __DIR__ . '/widgets/home1/faq.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home1_Faq_Widget() ); 

        // Service Details

        require_once( __DIR__ . '/widgets/service-details/service-details1.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Service_Details_Widget() ); 

        require_once( __DIR__ . '/widgets/service-details/service-details2.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Service_Details_Widget_Two() ); 

        require_once( __DIR__ . '/widgets/service-details/service-details3.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Service_Details_Widget_Three() ); 

		require_once( __DIR__ . '/widgets/service-details/service-details4.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Service_Details_Widget_Four() ); 

        // Project Details

        require_once( __DIR__ . '/widgets/project-details/project-details.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Project_Details_Widget() ); 

        // Team Details

        require_once( __DIR__ . '/widgets/team-details/team-details.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Team_Details_Widget() );

        // Pages

        require_once( __DIR__ . '/widgets/pages/header-pages.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Gixus_Header_Pages_Widget() ); 

        require_once( __DIR__ . '/widgets/pages/footer-pages.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_pages_Footer_Widget() ); 

        //About Us

        require_once( __DIR__ . '/widgets/pages/about/team.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_About_Team_Widget() );

        require_once( __DIR__ . '/widgets/pages/about/award.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Award_Section_Widget() );

        require_once( __DIR__ . '/widgets/pages/about/testimonial.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Pages_Testimonial_Section_Widget() );

        //About Us V2

        require_once( __DIR__ . '/widgets/pages/about-v2/about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_About_Two_Section_Widget() );

        require_once( __DIR__ . '/widgets/pages/about-v2/partner.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Partner_Section_Widget() );

        require_once( __DIR__ . '/widgets/pages/about-v2/choose.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Pages_Choose_Us_Widget() );

        require_once( __DIR__ . '/widgets/pages/about-v2/process.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Pages_Process_Widget() );

        // Pricing

        require_once( __DIR__ . '/widgets/pages/pricing.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Pricing_Widget() );

        // FAQ

        require_once( __DIR__ . '/widgets/pages/faq.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Pages_Faq_Widget() );

        // Contact

        require_once( __DIR__ . '/widgets/pages/contact/contact.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_pages_contact_Section_Widget() );
		
		require_once( __DIR__ . '/widgets/pages/contact/contact-us.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_pages_contact_Us_Widget() );

        require_once( __DIR__ . '/widgets/pages/contact/map.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_pages_contact_map_Section_Widget() );

        // Projects V1

        require_once( __DIR__ . '/widgets/projects/v1/project.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Project_One_Widget() );

        // Projects V2

        require_once( __DIR__ . '/widgets/projects/v2/project.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Project_Two_Widget() );

        require_once( __DIR__ . '/widgets/projects/v2/project-about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Project_About_Widget() );

        // Projects V3

        require_once( __DIR__ . '/widgets/projects/v3/project.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Project_Three_Widget() );

        // Services V1

        require_once( __DIR__ . '/widgets/services/v1/service-partner.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Services_Partner_Widget() );

        require_once( __DIR__ . '/widgets/services/v1/service-expertise.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Services_Expertise_Widget() );

        // Services V2

        require_once( __DIR__ . '/widgets/services/v2/service.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Services_Two_Widget() );

        // Services V3

        require_once( __DIR__ . '/widgets/services/v3/service.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Services_Three_Widget() );

    // Home Version Two

        require_once( __DIR__ . '/widgets/home2/header-v2.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Two_Header_Widget() );

        require_once( __DIR__ . '/widgets/home2/hero.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home2_Hero_Widget() );

        require_once( __DIR__ . '/widgets/home2/about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home2_About_Widget() );

        require_once( __DIR__ . '/widgets/home2/feature.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home2_Features_Widget() );

        require_once( __DIR__ . '/widgets/home2/blog.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home2_Blog_Widget() );

    // Home Version Three

        require_once( __DIR__ . '/widgets/home3/hero.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home3_Hero_Widget() );

        require_once( __DIR__ . '/widgets/home3/parallex.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Gixus_Parallax_Widget() );

        require_once( __DIR__ . '/widgets/home3/team.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home3_Team_Widget() );

        require_once( __DIR__ . '/widgets/home3/text-slider.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_gixus_Home3_Slider_Text_Widget() );

        require_once( __DIR__ . '/widgets/home3/testimonial.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_gixus_Home3_Testimonial_Widget() );
        
    // Home Version Four

        require_once( __DIR__ . '/widgets/home4/header-v4.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Four_Header_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/hero.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Four_Hero_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home4_About_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/service.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home4_Service_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/process.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Four_Process_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/global.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Four_Global_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/quote.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Four_Quote_Widget() );
        
        require_once( __DIR__ . '/widgets/home4/testimonial.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Four_Testimonial_Widget() );
        
    // Home Version Five

        require_once( __DIR__ . '/widgets/home5/hero.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Five_Hero_Widget() );
		
		require_once( __DIR__ . '/widgets/home5/banner.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Five_Banner_Widget() );
    
        require_once( __DIR__ . '/widgets/home5/service.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Five_Service_Section_Widget() );
        
        require_once( __DIR__ . '/widgets/home5/about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home5_About_Widget() );
        
    // Home Version Six
    
        require_once( __DIR__ . '/widgets/home6/header-v6.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Gixus_Header_v6_Widget() );

        require_once( __DIR__ . '/widgets/home6/hero.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Hero_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/about.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_About_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/features.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Features_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/brand.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Brand_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/counter.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Counter_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/process.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Process_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/try.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Try_Gixus_Widget() );
        
        require_once( __DIR__ . '/widgets/home6/testimonial.php' ); 
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home6_Testimonial_Widget() );



    }
}

// Initialize the plugin
function gixus_core_load() {
    return gixus_Core::instance();
}
gixus_core_load();
