<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Footer_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_footer';
    }

    public function get_title() {
        return __( 'Home One Footer', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-footer';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Contact Information Section
        $this->start_controls_section(
            'contact_section',
            [
                'label' => __( 'Contact Information', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		
		$this->add_control(
            'logo',
            [
                'label' => __( 'Logo', 'gixus' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/logo-light.png',
                ],
            ]
        );

        $this->add_control(
            'des',
            [
                'label' => __( 'Description', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Excellence decisively nay man twins impression maximum contrasted remarkably is perfect.', 'gixus' ),
            ]
        );

        $this->add_control(
            'contact_items',
            [
                'label' => __( 'Contact Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'contact_label',
                        'label' => __( 'Label', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Want to connect?', 'gixus-core' ),
                    ],
                    [
                        'name' => 'contact_value',
                        'label' => __( 'Value', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => 'info@validthemes.com',
                    ],
                    [
                        'name' => 'contact_link',
                        'label' => __( 'Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '',
                        'placeholder' => __( 'e.g., mailto:info@validthemes.com or tel:+4733378901', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    ['contact_label' => 'Want to connect?', 'contact_value' => 'info@validthemes.com', 'contact_link' => 'mailto:info@validthemes.com'],
                    ['contact_label' => 'Call us anytime', 'contact_value' => '+4733378901', 'contact_link' => 'tel:+4733378901'],
                    ['contact_label' => 'Our Location', 'contact_value' => '175 10h Street, Office 375 Berlin, Devolina 21562', 'contact_link' => '#'],
                ],
                'title_field' => '{{{ contact_label }}}',
            ]
        );

        $this->end_controls_section();

        // Services Section
        $this->start_controls_section(
            'services_section',
            [
                'label' => __( 'Our Services', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'link_one_text',
            [
                'label' => __( 'Link Heading', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Quick Links', 'gixus' ),
            ]
        );

        $this->add_control(
            'link_one',
            [
                'label' => __( 'Link One', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'service_title',
                        'label' => __( 'Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Company Profile', 'gixus-core' ),
                    ],
                    [
                        'name' => 'service_link',
                        'label' => __( 'Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => 'services-details.html',
                        ],
                        'placeholder' => __( 'Enter your service link here', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    ['service_title' => __( 'Company Profile', 'gixus-core' ), 'service_link' => ['url' => 'services-details.html']],
                    ['service_title' => __( 'Help Center', 'gixus-core' ), 'service_link' => ['url' => 'services-details.html']],
                    ['service_title' => __( 'Career', 'gixus-core' ), 'service_link' => ['url' => 'services-details.html']],
                    ['service_title' => __( 'Plans & Pricing', 'gixus-core' ), 'service_link' => ['url' => 'services-details.html']],
                    ['service_title' => __( 'News & Blog', 'gixus-core' ), 'service_link' => ['url' => 'services-details.html']],
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );

        $this->add_control(
            'link_two_text',
            [
                'label' => __( 'Link Heading', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Services', 'gixus' ),
            ]
        );

        $this->add_control(
            'link_two',
            [
                'label' => __( 'Link Two', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'service_title2',
                        'label' => __( 'Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Manage investment', 'gixus-core' ),
                    ],
                    [
                        'name' => 'service_link2',
                        'label' => __( 'Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => 'services-details.html',
                        ],
                        'placeholder' => __( 'Enter your service link here', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    ['service_title2' => __( 'Manage investment', 'gixus-core' ), 'service_link2' => ['url' => 'services-details.html']],
                    ['service_title2' => __( 'Email Marketing', 'gixus-core' ), 'service_link2' => ['url' => 'services-details.html']],
                    ['service_title2' => __( 'Growth Hacking', 'gixus-core' ), 'service_link2' => ['url' => 'services-details.html']],
                    ['service_title2' => __( 'Lead Generation', 'gixus-core' ), 'service_link2' => ['url' => 'services-details.html']],
                    ['service_title2' => __( 'Offline SEO', 'gixus-core' ), 'service_link2' => ['url' => 'services-details.html']],
                ],
                'title_field' => '{{{ service_title2 }}}',
            ]
        );

        $this->end_controls_section();

        // Contact Form 7 Section
        $this->start_controls_section(
            'contact_form_section',
            [
                'label' => __( 'Contact Form', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'content_html',
            [
                'label' => __( 'HTML Content', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '', 'gixus' ),
            ]
        );

        $this->add_control(
            'contact_form_des',
            [
                'label' => __( 'Description', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Join our subscribers list to get the latest
news and special offers.', 'gixus' ),
            ]
        );

        $this->add_control(
            'contact_form_shortcode',
            [
                'label' => __( 'Contact Form 7 Shortcode', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '[contact-form-7 id="a611387" title="Footer Subscribe Form"]',
                'placeholder' => __( '[contact-form-7 id="a611387" title="Footer Subscribe Form"]', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();

        // Contact Form 7 Section
        $this->start_controls_section(
            'footer_bottom',
            [
                'label' => __( 'Footer Copyright Section', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
         $this->add_control(
            'enable_dynamic',
            [
                'label' => __('Enable Dynamic Copyright Text', 'gixus-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('On', 'gixus-core'),
                'label_off' => __('Off', 'gixus-core'),
                'default' => 'no',
            ]
        );

        $this->add_control(
            'copyright',
            [
                'label' => __( 'Description', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '&copy; Copyright 2024. All Rights Reserved by <a href="https://themeforest.net/user/wordpressriver/portfolio">WordPressRiver</a>', 'gixus' ),
            ]
        );

        $this->add_control(
            'link_three',
            [
                'label' => __( 'Link Three', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'service_title3',
                        'label' => __( 'Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Terms', 'gixus-core' ),
                    ],
                    [
                        'name' => 'service_link3',
                        'label' => __( 'Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => '#',
                        ],
                        'placeholder' => __( 'Enter your service link here', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    ['service_title3' => __( 'Terms', 'gixus-core' ), 'service_link' => ['url' => '#']],
                    ['service_title3' => __( 'Privacy', 'gixus-core' ), 'service_link' => ['url' => '#']],
                    ['service_title3' => __( 'Support', 'gixus-core' ), 'service_link' => ['url' => '#']],
                    
                ],
                'title_field' => '{{{ service_title3 }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$settings['contact_heading'] = "Location";
        ?>
        <!-- Start Footer 
    ============================================= -->
    <?php if($settings['layout'] === 'layout1'): ?>
    <footer class="bg-gray-secondary overflow-hidden">
    <?php else: ?>
    <footer class="bg-gray-secondary overflow-hidden">
    <?php endif; ?>
    
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-item pr-30 pr-md-15 pr-xs-15">
                        <div class="f-item address">
                            <img src="<?php echo esc_url( $settings['logo']['url'] ); ?>" alt="Universus Consulting">
                            <p>
                                <?php echo esc_html( $settings['des'] ); ?>
                            </p>
                            <?php  if ( 'yes' === $settings['enable_social'] ) : ?>
                                <ul class="footer-social">
                                  <?php foreach ( $settings['social_icons'] as $icons ) : ?>
    <li>
        <a href="<?php echo esc_url( $icons['link']['url'] ); ?>" 
           <?php if ( $icons['link']['is_external'] ) : ?>target="_blank"<?php endif; ?> 
           <?php if ( $icons['link']['nofollow'] ) : ?>rel="nofollow"<?php endif; ?>>
            <i class="<?php echo esc_attr( $icons['icon']['value'] ); ?>"></i>
        </a>
    </li>
<?php endforeach; ?>

                                </ul>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                                    
                                
                        <div class="col-lg-2 col-md-6 footer-item">
                            <div class="f-item link">
                                <h4 class="widget-title"><?php echo esc_html( $settings['link_one_text'] ); ?></h4>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-1',
									'container'      => false,
									'items_wrap'     => '<ul>%3$s</ul>',
									'walker'         => new Gixus_Walker_Header_Menu(),
								) );
								?>

<!--                                 <ul>
                                    <?php foreach ( $settings['link_one'] as $service ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( $service['service_link']['url'] ); ?>">
                                                <?php echo esc_html( $service['service_title'] ); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 footer-item">
                            <div class="f-item link">
                                <h4 class="widget-title"><?php echo esc_html( $settings['link_two_text'] ); ?></h4>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-2',
									'container'      => false,
									'items_wrap'     => '<ul>%3$s</ul>',
									'walker'         => new Gixus_Walker_Header_Menu(),
								) );
								?>
<!--                                 <ul>
                                    <?php foreach ( $settings['link_two'] as $service ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( $service['service_link2']['url'] ); ?>">
                                                <?php echo esc_html( $service['service_title2'] ); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul> -->
                            </div>
                        </div>
        <div class="col-lg-4 col-md-6 footer-item">
                        <div class="f-item ">
                            <?php if(!empty($settings['contact_heading'])): ?>
                            <h4 class="widget-title"><?php echo esc_html( $settings['contact_heading'] ); ?></h4>
                        <?php endif; ?>
							<p>
								175 10h Street, Office 375 Berlin, Devolina 21562
							</p>
<!-- 							<ul class="contact-address mt-25">
                                <?php foreach ( $settings['contact_items'] as $item ) : ?>
                                        <li>
                                            <p><?php echo esc_html( $item['contact_label'] ); ?></p>
                                            <h4>
                                                <?php if ( ! empty( $item['contact_link'] ) ) : ?>
                                                    <a href="<?php echo esc_url( $item['contact_link'] ); ?>"><?php echo esc_html( $item['contact_value'] ); ?></a>
                                                <?php endif; ?>
                                            </h4>
                                        </li>
                                    <?php endforeach; ?>
                            </ul> -->
<!-- 							 <?php if(!empty($settings['contact_form_des'])): ?>
								<p>
									<?php echo ( $settings['contact_form_des'] ); ?>
								</p>
							<?php endif; ?>
							 <?php if(!empty($settings['contact_form_shortcode'])): ?>
                             <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
							<?php endif; ?>
							 <?php if(!empty($settings['content_html'])): ?>
                             <?php echo $settings['content_html']; ?>
							<?php endif; ?> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php if($settings['layout'] === 'layout1'): ?>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
            <?php else: ?>
            </div>
            <!-- Start Footer Bottom -->
        <div class="bg-gray-secondary footer-bottom">
            <div class="container">
                <div class="row">
            <?php endif; ?>
            
                    <div class="col-lg-6">		
                       <?php if ('yes' === $settings['enable_dynamic']): ?>
                        <?php esc_html_e('&copy; Copyright ','gixus-core'); ?><?php echo date("Y"); ?><?php esc_html_e('.','gixus-core'); ?> 
						<?php endif; ?>
						<?php echo ( $settings['copyright'] ); ?>
                    </div>
<!--                     <div class="col-lg-6 text-end">
                        <ul class="link-list">
                        <?php foreach ( $settings['link_three'] as $service3 ) : ?>
                            <li>
                                <a href="<?php echo esc_url( $service3['service_link3']['url'] ); ?>">
                                    <?php echo esc_html( $service3['service_title3'] ); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php if($settings['layout'] === 'layout1'): ?>
             </div> -->
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->
            <?php else: ?>
           </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
            <?php endif; ?>
                   
        <?php
    }
}
