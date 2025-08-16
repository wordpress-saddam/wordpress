<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Team_Details_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'team_details';
    }

    public function get_title() {
        return __( 'Team Details', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Tab
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'team_member_name',
            [
                'label' => __( 'Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Sarah Albert', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'team_member_title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Senior SEO Analyst', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'team_member_description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring house in never fruit up. Pasture imagine my garrets...', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'team_member_image',
            [
                'label' => __( 'Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/team/2.jpg',
                ],
            ]
        );

        // Repeater for Contact Info
        $this->add_control(
            'contact_info',
            [
                'label' => __( 'Contact Info', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'c_link1',
                        'label' => __( 'Title Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                    ],
                    [
                        'name' => 'c_title',
                        'label' => __( 'Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Email:', 'gixus-core' ),
                    ],
                    [
                        'name' => 'c_value',
                        'label' => __( 'Content', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'wordpressriver@gmail.com', 'gixus-core' ),
                    ],

            
                ],
                'default' => [
                    [
                        'c_title' => 'Email:',
                        'c_value' => 'wordpressriver@gmail.com',
                        'c_link1' => '#',
                    ],
                    [
                        'c_title' => 'Phone:',
                        'c_value' => '+44-20-7328-4499',
                        'c_link1' => '#',
                    ],
                ],
                'title_field' => '{{{ c_title }}}',
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Contact Me'
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'contact-us.html',
                    'is_external' => true,
                ],
            ]
        );

        // Repeater for Social Links
        $this->add_control(
            'social_links',
            [
                'label' => __( 'Social Links', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'url',
                        'label' => __( 'URL', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                    ],
                    [
                        'name' => 'icon',
                        'label' => __( 'Icon', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                    ],
                ],
                'default' => [
                    [
                    'url' => '#',
                    'icon' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                    ],
                ],

                    [
                    'url' => '#',
                    'icon' =>  [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                    ],],

                    [
                    'url' => '#',
                    'icon' =>  [
                    'value' => 'fab fa-youtube',
                    'library' => 'brand',
                    ],],
            
                    
            ],
              
                'title_field' => '{{{ icon }}}',
            ]
        );

        $this->end_controls_section();

          // Skills Section
        $this->start_controls_section(
            'skills_section',
            [
                'label' => __( 'Skills', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'skills_heading',
            [
                'label' => __( 'Skills Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Personal Skills', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'skills_description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Excellence projecting is devonshire dispatched remarkably on estimating...', 'gixus-core' ),
            ]
        );

        // Repeater for Skills
        $this->add_control(
            'skills_repeater',
            [
                'label' => __( 'Skills', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'skill_name',
                        'label' => __( 'Skill Name', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Programming Language', 'gixus-core' ),
                    ],
                    [
                        'name' => 'skill_percentage',
                        'label' => __( 'Skill Percentage', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'default' => 80,
                    ],
                ],
                'default' => [
                    [
                        'skill_name' => __( 'Programming Language', 'gixus-core' ),
                        'skill_percentage' => 88,
                    ],
                    [
                        'skill_name' => __( 'Backend Development', 'gixus-core' ),
                        'skill_percentage' => 95,
                    ],
                    [
                        'skill_name' => __( 'Product Design', 'gixus-core' ),
                        'skill_percentage' => 80,
                    ],
                ],
                'title_field' => '{{{ skill_name }}}',
            ]
        );

        $this->end_controls_section();

        // Contact Section
        $this->start_controls_section(
            'contact_section',
            [
                'label' => __( 'Contact', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'contact_heading',
            [
                'label' => __( 'Contact Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Send a Message', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'contact_form_shortcode',
            [
                'label' => __( 'Contact Form 7 Shortcode', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '[contact-form-7 id="1" title="Contact form 1"]', // Replace with your actual shortcode
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
         <!-- Start Team Single Area
    ============================================= -->
    <div class="team-single-area default-padding-top">
        <div class="container">
            <div class="team-content-top">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <div class="thumb">
                            <img src="<?php echo esc_url( $settings['team_member_image']['url'] ); ?>" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-7 right-info">
                        <h2 class="title"><?php echo esc_html( $settings['team_member_name'] ); ?></h2>
                        <span><?php echo esc_html( $settings['team_member_title'] ); ?></span>
                        <p><?php echo esc_html( $settings['team_member_description'] ); ?></p>
                        
                        <ul>
                            <?php foreach ( $settings['contact_info'] as $info ) : ?>
                                <li>
                                <strong><?php echo esc_html( $info['c_title'] ); ?></strong>
                                <a href="<?php echo $info['c_link1']['url']; ?>"><?php echo esc_html( $info['c_value'] ); ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="social">
                            <a class="btn circle btn-sm btn-gradient animation" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>" target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"><?php echo esc_html( $settings['button_text'] ); ?></a>
                            <div class="share-link">
                                <i class="fas fa-share-alt"></i>
                                <ul>
                                    <?php foreach ( $settings['social_links'] as $link ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( $link['url']['url'] ); ?>" target="<?php echo esc_attr( $link['url']['is_external'] ? '_blank' : '_self' ); ?>">
                                                <?php \Elementor\Icons_Manager::render_icon( $link['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-info bg-gray default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="skill-items">
                            <h2><?php echo esc_html( $settings['skills_heading'] ); ?></h2>
                            <p><?php echo esc_html( $settings['skills_description'] ); ?></p>

                            <!-- Progress Bar Start -->
                            <?php foreach ( $settings['skills_repeater'] as $skill ) : ?>
                                <div class="progress-box">
                                    <h5><?php echo esc_html( $skill['skill_name'] ); ?></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="<?php echo esc_attr( $skill['skill_percentage'] ); ?>">
                                            <span><?php echo esc_html( $skill['skill_percentage'] ); ?>%</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- End Progress Bar -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="short-contact">
                            <h2 class="heading"><?php echo esc_html( $settings['contact_heading'] ); ?></h2>
                            <!-- Render Contact Form 7 -->
                            <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
