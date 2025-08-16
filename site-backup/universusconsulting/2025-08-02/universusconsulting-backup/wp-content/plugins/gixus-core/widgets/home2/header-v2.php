<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Elementor_Home_Two_Header_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_two_header';
    }

    public function get_title() {
        return __( 'Home Two Header', 'elementor-custom-widget' );
    }

    public function get_icon() {
        return 'eicon-site-logo';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'elementor-custom-widget' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'menu_type',
            [
                'label' => __( 'Menu Type', 'gixus' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'default' => __( 'Default Menu', 'gixus' ),
                    'megamenu' => __( 'MegaMenu', 'gixus' ),
                ],
                'default' => 'default',
            ]
        );

        // Light Logo
        $this->add_control(
            'logo_light',
            [
                'label' => __( 'Logo (Light)', 'elementor-custom-widget' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/logo-light.png',
                ],
            ]
        );

        // Scrolled Logo
        $this->add_control(
            'logo_scrolled',
            [
                'label' => __( 'Logo (Scrolled)', 'elementor-custom-widget' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/logo.png',
                ],
            ]
        );
        
        $this->add_control(
            'width',
            [
                'label' => esc_html__( 'Width', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .navbar-brand>img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_control(
            'height',
            [
                'label' => esc_html__( 'Height', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .navbar-brand>img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_control(
            'logo1',
            [
                'label' => __( 'Hamburger Logo', 'gixus' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/logo.png',
                ],
            ]
        );
        
        
        
        $this->add_control(
            'width1',
            [
                'label' => esc_html__( 'Hamburger Logo Width', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '',
                    'size' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}} nav.navbar.validnavs .navbar-collapse.collapse.show img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_control(
            'height1',
            [
                'label' => esc_html__( 'Hamburger Logo Height', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} nav.navbar.validnavs .navbar-collapse.collapse.show img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // Email
        $this->add_control(
            'email',
            [
                'label' => __( 'Email Address', 'elementor-custom-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'info@bestup.com',
                'placeholder' => __( 'Enter email address', 'elementor-custom-widget' ),
            ]
        );

        // Question Text
        $this->add_control(
            'question_text',
            [
                'label' => __( 'Question Text', 'elementor-custom-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Have any Questions?',
            ]
        );

        // Icon
        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'elementor-custom-widget' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-comments-alt-dollar',
                    'library' => 'solid',
                ],
            ]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
            'content_section1',
            [
                'label' => __( 'Content Custom Menu', 'gixus' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'menu_type' => 'megamenu',
                ],
            ]
        );

        $this->add_control(
            'megamenu_title',
            [
                'label' => __( 'MegaMenu Text', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Demos', 'gixus' ),
            ]
        );

        // Button Link
        $this->add_control(
            'megamenu_link',
            [
                'label' => __( 'MegaMenu Link', 'gixus' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                ],
            ]
        );
        
        $this->add_control(
            'megamenu_intro_title',
            [
                'label' => __( 'MegaMenu Intro Text', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Watch Intro Video', 'gixus' ),
            ]
        );
        
        $this->add_control(
            'megamenu_intro_link',
            [
                'label' => __( 'MegaMenu Intro Link', 'gixus' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=aTC_RNYtEb0',
                    'is_external' => false,
                ],
            ]
        );
        
       $this->add_control(
            'megamenu_intro_image',
            [
                'label' => __( 'MegaMenu Intro Image', 'gixus' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/71.jpg',
                ],
            ]
        );

        $this->add_control(
            'megamenu_items',
            [
                'label' => __( 'MegaMenu Items', 'gixus' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    // Title Field
                    [
                        'name' => 'title',
                        'label' => __( 'Title', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Home One', 'gixus' ),
                    ],
                    // Link Field
                    [
                        'name' => 'link',
                        'label' => __( 'Link', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => get_site_url() . '/',
                            'is_external' => false,
                        ],
                    ],
                    // Image Field
                    [
                        'name' => 'image',
                        'label' => __( 'Image', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/demo/home-1.jpg',
                        ],
                    ],
                    // Overlay Title 1 Field
                    [
                        'name' => 'otitle1',
                        'label' => __( 'Overlay Title 1', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'MultiPage', 'gixus' ),
                    ],
                    // Overlay Link 1 Field
                    [
                        'name' => 'olink1',
                        'label' => __( 'Overlay Link 1', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => get_site_url() . '/',
                            'is_external' => false,
                        ],
                    ],
                    // Overlay Title 2 Field
                    [
                        'name' => 'otitle2',
                        'label' => __( 'Overlay Title 2', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'OnePage', 'gixus' ),
                    ],
                    // Overlay Link 2 Field
                    [
                        'name' => 'olink2',
                        'label' => __( 'Overlay Link 2', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => get_site_url() . '/onepage-one/',
                            'is_external' => false,
                        ],
                    ],
                ],
                'title_field' => '{{{ title }}}',
                'default' => [
                    [
                        'title' => __( 'Business Consulting', 'gixus' ),
                        'link' => [ 'url' => get_site_url() . '/', 'is_external' => false ],
                        'image' => [ 'url' => get_template_directory_uri() . '/assets/img/demo/home-1.jpg' ],
                        'otitle1' => __( 'MultiPage', 'gixus' ),
                        'olink1' => [ 'url' => get_site_url() . '/', 'is_external' => false ],
                        'otitle2' => __( 'OnePage', 'gixus' ),
                        'olink2' => [ 'url' => get_site_url() . '/onepage-one/', 'is_external' => false ],
                    ],
                    [
                        'title' => __( 'IT Solutions', 'gixus' ),
                        'link' => [ 'url' => get_site_url() . '/home-version-two/', 'is_external' => false ],
                        'image' => [ 'url' => get_template_directory_uri() . '/assets/img/demo/home-2.jpg' ],
                        'otitle1' => __( 'MultiPage', 'gixus' ),
                        'olink1' => [ 'url' => get_site_url() . '/home-version-two/', 'is_external' => false ],
                        'otitle2' => __( 'OnePage', 'gixus' ),
                        'olink2' => [ 'url' => get_site_url() . '/onepage-two/', 'is_external' => false ],
                    ],
                    [
                        'title' => __( 'Creative Agency', 'gixus' ),
                        'link' => [ 'url' => get_site_url() . '/home-version-three/', 'is_external' => false ],
                        'image' => [ 'url' => get_template_directory_uri() . '/assets/img/demo/home-3.jpg' ],
                        'otitle1' => __( 'MultiPage', 'gixus' ),
                        'olink1' => [ 'url' => get_site_url() . '/home-version-three/', 'is_external' => false ],
                        'otitle2' => __( 'OnePage', 'gixus' ),
                        'olink2' => [ 'url' => get_site_url() . '/onepage-three/', 'is_external' => false ],
                    ],
                    [
                        'title' => __( 'Financial Advisor', 'gixus' ),
                        'link' => [ 'url' => get_site_url() . '/home-version-five/', 'is_external' => false ],
                        'image' => [ 'url' => get_template_directory_uri() . '/assets/img/demo/home-5.jpg' ],
                        'otitle1' => __( 'MultiPage', 'gixus' ),
                        'olink1' => [ 'url' => get_site_url() . '/home-version-five/', 'is_external' => false ],
                        'otitle2' => __( 'OnePage', 'gixus' ),
                        'olink2' => [ 'url' => get_site_url() . '/onepage-five/', 'is_external' => false ],
                    ],
                    [
                        'title' => __( 'Artificial Intelligence', 'gixus' ),
                        'link' => [ 'url' => get_site_url() . '/home-version-six/', 'is_external' => false ],
                        'image' => [ 'url' => get_template_directory_uri() . '/assets/img/demo/home-6.jpg' ],
                        'otitle1' => __( 'MultiPage', 'gixus' ),
                        'olink1' => [ 'url' => get_site_url() . '/home-version-six/', 'is_external' => false ],
                        'otitle2' => __( 'OnePage', 'gixus' ),
                        'olink2' => [ 'url' => get_site_url() . '/onepage-six/', 'is_external' => false ],
                    ],
                    [
                        'title' => __( 'Transport & Logistics', 'gixus' ),
                        'link' => [ 'url' => get_site_url() . '/home-version-four/', 'is_external' => false ],
                        'image' => [ 'url' => get_template_directory_uri() . '/assets/img/demo/home-4.jpg' ],
                        'otitle1' => __( 'MultiPage', 'gixus' ),
                        'olink1' => [ 'url' => get_site_url() . '/home-version-four/', 'is_external' => false ],
                        'otitle2' => __( 'OnePage', 'gixus' ),
                        'olink2' => [ 'url' => get_site_url() . '/onepage-four/', 'is_external' => false ],
                    ],
                    
                    
                ],
                'condition' => [
                    'menu_type' => 'megamenu',
                ],
            ]
        );

        $this->add_control(
            'menu_items',
            [
                'label' => __( 'Menu Items', 'gixus' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'menu_title',
                        'label' => __( 'Menu Title', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Pages', 'gixus' ),
                    ],
                    [
                        'name' => 'menu_link',
                        'label' => __( 'Menu Link', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => '#',
                        ],
                    ],
                    [
                        'name' => 'sub_menu_items',
                        'label' => __( 'Sub Menu Items', 'gixus' ),
                        'type' => \Elementor\Controls_Manager::REPEATER,
                        'fields' => [
                            [
                                'name' => 'sub_item_title',
                                'label' => __( 'Sub Item Title', 'gixus' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'default' => __( 'About Us', 'gixus' ),
                            ],
                            [
                                'name' => 'sub_item_link',
                                'label' => __( 'Sub Item Link', 'gixus' ),
                                'type' => \Elementor\Controls_Manager::URL,
                                'default' => [
                                    'url' => get_site_url() . '/about-us/',
                                ],
                            ],
                        ],
                        'title_field' => '{{{ sub_item_title }}}',
                    ],
                ],
                'title_field' => '{{{ menu_title }}}',
                'default' => [
                    [
                        'menu_title' => __( 'Pages', 'gixus' ),
                        'menu_link' => [
                            'url' => '#',
                        ],
                        'sub_menu_items' => [
                            [
                                'sub_item_title' => __( 'About Us', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/about-us/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'About Us Two', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/about-us-v2/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Team', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/team/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Team Two', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/team-two/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Team Details', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/daniyel-joe/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Pricing', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/pricing/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'FAQ', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/faq/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Contact Us', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/contact/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Error Page', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/error-page',
                                ],
                            ],
                        ],
                    ],
                    [
                        'menu_title' => __( 'Projects', 'gixus' ),
                        'menu_link' => [
                            'url' => '#',
                        ],
                        'sub_menu_items' => [
                            [
                                'sub_item_title' => __( 'Project style one', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/project-v1/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Project style two', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/project-v2/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Project style three', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/project-v3/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Strategy Development', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/strategy-development/',
                                ],
                            ],
                        ],
                    ],
                    [
                        'menu_title' => __( 'Services', 'gixus' ),
                        'menu_link' => [
                            'url' => '#',
                        ],
                        'sub_menu_items' => [
                            [
                                'sub_item_title' => __( 'Services Version One', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/services-v1/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Services Version Two', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/services-v2/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Services Version Three', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/services-v3/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Advanced Business', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/advanced-business-intelligence/',
                                ],
                            ],
                        ],
                    ],
                    [
                        'menu_title' => __( 'Blog', 'gixus' ),
                        'menu_link' => [
                            'url' => '#',
                        ],
                        'sub_menu_items' => [
                            [
                                'sub_item_title' => __( 'Blog Standard', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/blog-standard/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Blog With Sidebar', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/latest-blog/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Blog Grid Two Column', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/latest-blog-v2/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Blog Grid Three Column', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/latest-blog-v3/',
                                ],
                            ],
                            [
                                'sub_item_title' => __( 'Blog Single', 'gixus' ),
                                'sub_item_link' => [
                                    'url' => get_site_url() . '/minuter-him-own-clothes-but-observe-country/',
                                ],
                            ],
                        ],
                    ],
                    [
                        'menu_title' => __( 'Contact', 'gixus' ),
                        'menu_link' => [
                            'url' => get_site_url() . '/contact/',
                        ],

                    ],
                ],
            ]
        );
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
        <header>
            <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">
                <div class="container d-flex justify-content-between align-items-center">
                    
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( $settings['logo_light']['url'] ); ?>" class="logo logo-display" alt="Logo">
                            <img src="<?php echo esc_url( $settings['logo_scrolled']['url'] ); ?>" class="logo logo-scrolled" alt="Logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="collapse-header">
                        <?php if(!empty($settings['logo1']['url'])): ?>
                        <img src="<?php echo esc_url( $settings['logo1']['url'] ); ?>" alt="Logo">
                        <?php else: ?>
                        <style>@media only screen and (max-width: 1023px){.no-logo-padding{padding-top: 50px;}}</style>
                        <div class="no-logo-padding"></div>
                        <?php endif; ?>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div> 
                    <?php if ( true || 'default' === $settings['menu_type'] ) : ?>
                    <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main-menu', // Ensure this matches your theme location
                                'menu_class'     => 'nav navbar-nav navbar-center',
                                'container'      => false,
                                'walker'         => new Gixus_Walker_Header_Menu(),
                                'items_wrap'     => '<ul id="%1$s" class="%2$s" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
                            ) );
                                        ?>
                    <?php else : ?>
                            <!-- MegaMenu -->
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="dropdown megamenu-fw">
                                    <a href="<?php echo esc_url( $settings['megamenu_link']['url'] ); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo esc_html( $settings['megamenu_title'] ); ?></a>
                                    <ul class="dropdown-menu megamenu-content" role="menu">
                                        <li>
                                            <div class="col-menu-wrap">
                                                <?php foreach ( $settings['megamenu_items'] as $item ) : ?>
                                                    <div class="col-item">
                                                        <div class="menu-thumb">
                                                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="Universus Consulting Service">
                                                            <div class="overlay">
                                                                <?php if(!empty($item['otitle1'])): ?>
                                                                <a href="<?php echo esc_url( $item['olink1']['url'] ); ?>"><?php echo esc_html( $item['otitle1'] ); ?></a>
                                                                <?php endif; ?>
                                                                <?php if(!empty($item['otitle2'])): ?>
                                                                 <a href="<?php echo esc_url( $item['olink2']['url'] ); ?>"><?php echo esc_html( $item['otitle2'] ); ?></a>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <h6 class="title"><a href="<?php echo esc_url( $item['link']['url'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a></h6>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="megamenu-banner">
                                        <img src="<?php echo esc_url( $settings['megamenu_intro_image']['url'] ); ?>" alt="Universus Consulting Service">
                                        <a href="<?php echo esc_url( $settings['megamenu_intro_link']['url'] ); ?>" class="popup-youtube video-play-button"><i class="fas fa-play"></i></a>
                                        <h6 class="title"><a href="#"><?php echo esc_html( $settings['megamenu_intro_title'] ); ?></a></h6>
                                    </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php foreach ( $settings['menu_items'] as $menu_item ) : ?>
                                   <?php if ( ! empty( $menu_item['sub_menu_items'] ) ) : ?>
                                    <li class="dropdown">
                                    <a href="<?php echo esc_url( $menu_item['menu_link']['url'] ); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                            <?php echo esc_html( $menu_item['menu_title'] ); ?>
                                        </a>
                                    <?php else: ?>
                                    <li>
                                    <a href="<?php echo esc_url( $menu_item['menu_link']['url'] ); ?>">
                                            <?php echo esc_html( $menu_item['menu_title'] ); ?>
                                        </a>
                                    <?php endif; ?>
                                        <?php if ( ! empty( $menu_item['sub_menu_items'] ) ) : ?>
                                            <ul class="dropdown-menu">
                                                <?php foreach ( $menu_item['sub_menu_items'] as $sub_item ) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url( $sub_item['sub_item_link']['url'] ); ?>">
                                                            <?php echo esc_html( $sub_item['sub_item_title'] ); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                </div><!-- /.navbar-collapse -->
                    
                    <!-- Contact Info -->
                    <div class="attr-right">
                        <div class="attr-nav">
                            <ul>
                                <li class="contact">
                                    <div class="call">
                                        <div class="icon">
                                            <i class="<?php echo esc_attr( $settings['icon']['value'] ); ?>"></i>
                                        </div>
                                        <div class="info">
                                            <p><?php echo esc_html( $settings['question_text'] ); ?></p>
                                            <h5><a href="mailto:<?php echo esc_attr( $settings['email'] ); ?>"><?php echo esc_html( $settings['email'] ); ?></a></h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="overlay-screen"></div>
        </header>
        <?php
    }
}
