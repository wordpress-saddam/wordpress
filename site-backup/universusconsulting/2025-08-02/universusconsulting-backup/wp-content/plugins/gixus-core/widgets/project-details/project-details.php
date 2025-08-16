<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Elementor_Project_Details_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'project_details';
    }

    public function get_title() {
        return __( 'Project Details', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-post';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function register_controls() {
        // Content Tab
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Project Title
        $this->add_control(
            'project_title',
            [
                'label' => __( 'Project Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Business planning solution', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'project_des1',
            [
                'label' => __( 'Project Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti cum vestibulum cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus vehicula pellentesque cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit parturient posuere mauris ad elementum fringilla facilisi volutpat fusce pharetra felis sapien varius quisque class convallis praesent est sollicitudin donec nulla venenatis, cursus fermentum netus posuere sociis porta risus habitant malesuada nulla habitasse hymenaeos.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'project_des2',
            [
                'label' => __( 'Project Description Two', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
            ]
        );

        // Main Image 1
        $this->add_control(
            'image_1',
            [
                'label' => __( 'Main Image 1', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/projects/9.jpg',
                ],
            ]
        );

        // Main Image 2
        $this->add_control(
            'image_2',
            [
                'label' => __( 'Main Image 2', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/projects/4.jpg',
                ],
            ]
        );

         $this->add_control(
            'project_info_title1',
            [
                'label' => __( 'Project Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Project Info', 'gixus-core' ),
            ]
        );

        // Repeater for Project Info (Client, Date, Address)
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'info_label',
            [
                'label' => __( 'Info Label', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Client', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'info_content',
            [
                'label' => __( 'Info Content', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'WordPressRiver Themes', 'gixus-core' ),
            ]
        );


        $this->add_control(
            'project_info',
            [
                'label' => __( 'Project Info', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'info_label' => 'Client',
                        'info_content' => 'WordPressRiver Themes',
                    ],
                    [
                        'info_label' => 'Date',
                        'info_content' => '25 February, 2022',
                    ],
                    [
                        'info_label' => 'Address',
                        'info_content' => '1401, 21st Street STE R4569, California',
                    ],
                ],
                'title_field' => '{{{ info_label }}}',
            ]
        );

        // Repeater for Social Links (Icon and Link)
        $social_repeater = new \Elementor\Repeater();

        $social_repeater->add_control(
            'social_icon',
            [
                'label' => __( 'Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );

        $social_repeater->add_control(
            'social_link',
            [
                'label' => __( 'Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'social_links',
            [
                'label' => __( 'Social Links', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $social_repeater->get_controls(),
                'default' => [
                    [
                        'social_icon' => [
                            'value' => 'fab fa-facebook-f',
                            'library' => 'brand',
                        ],
                        'social_link' => [ 'url' => '#' ],
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-twitter',
                            'library' => 'brand',
                        ],
                        'social_link' => [ 'url' => '#' ],
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-linkedin-in',
                            'library' => 'brand',
                        ],
                        'social_link' => [ 'url' => '#' ],
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-pinterest-p',
                            'library' => 'brand',
                        ],
                        'social_link' => [ 'url' => '#' ],
                    ],
                    
                ],
                'title_field' => '{{{ social_icon.value }}}',
            ]
        );

        // Repeater for Challenges
        $challenges_repeater = new \Elementor\Repeater();

        $challenges_repeater->add_control(
            'challenge_title',
            [
                'label' => __( 'Content Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Background', 'gixus-core' ),
            ]
        );

        $challenges_repeater->add_control(
            'challenge_description_1',
            [
                'label' => __( 'Content Description 1', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence', 'gixus-core' ),
            ]
        );

        $challenges_repeater->add_control(
            'challenge_description_2',
            [
                'label' => __( 'Content Description 2', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
            ]
        );

        $challenges_repeater->add_control(
            'challenge_list_title',
            [
                'label' => __( 'Content List Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Continue indulged speaking the horrible for domestic.', 'gixus-core' ),
            ]
        );

        $challenges_repeater->add_control(
            'challenge_list',
            [
                'label' => __( 'Content List', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Social media marketing,Search engine optimization (seo),Public Relations', 'gixus-core' ),
                'description' => __( 'Enter list items separated by commas.', 'gixus-core' ),
            ]
        );

        $challenges_repeater->add_control(
            'challenge_image',
            [
                'label' => __( 'Content Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/19.jpg',
                ],
            ]
        );

        $this->add_control(
            'challenges',
            [
                'label' => __( 'Contents', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $challenges_repeater->get_controls(),
                'default' => [
                    [
                        'challenge_title' => 'Background',
                        'challenge_description_1' => 'Contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence',
                        'challenge_description_2' => 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.',
                        'challenge_list' => '',
                        'challenge_list_title' => '',
                        'challenge_image' => [
                            'url' => '',
                        ],
                    ],

                    [
                        'challenge_title' => 'The Challenges',
                        'challenge_description_1' => 'Contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence',
                        'challenge_description_2' => 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.',
                        'challenge_list' => 'Social media marketing,Search engine optimization (seo),Public Relations',
                        'challenge_list_title' => 'Continue indulged speaking the horrible for domestic.',
                        'challenge_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/banner/19.jpg',
                        ],
                    ],

                    [
                        'challenge_title' => 'The Solution',
                        'challenge_description_1' => 'Contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence',
                        'challenge_description_2' => 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.',
                        'challenge_list' => '',
                        'challenge_list_title' => '',
                        'challenge_image' => [
                            'url' => '',
                        ],
                    ],
                ],
                'title_field' => '{{{ challenge_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
        <!-- Project Details Area -->
        <div class="project-details-area default-padding">
            <div class="container">
                <div class="project-details-items">
                    <div class="project-thumb">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="<?php echo esc_url( $settings['image_1']['url'] ); ?>" alt="Universus Consulting Service">
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo esc_url( $settings['image_2']['url'] ); ?>" alt="Universus Consulting Service">
                            </div>
                        </div>
                    </div>
                    <div class="top-info">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 order-lg-last right-info">
                                <div class="project-info">
                                    <h4 class="title"><?php echo esc_html( $settings['project_info_title1'] ); ?></h4>
                                    <ul>
                                        <?php foreach ( $settings['project_info'] as $info_item ) : ?>
                                            <li><?php echo esc_html( $info_item['info_label'] ); ?> <span><?php echo esc_html( $info_item['info_content'] ); ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <ul class="social">
                                        <?php foreach ( $settings['social_links'] as $social_item ) : ?>
                                            <li>
                                                <a href="<?php echo esc_url( $social_item['social_link']['url'] ); ?>">
                                                    <i class="<?php echo esc_attr( $social_item['social_icon']['value'] ); ?>"></i>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 pr-35 pr-md-15 pr-xs-15 left-info mt-md-10">
                                <h2 class="title"><?php echo esc_html( $settings['project_title'] ); ?></h2>
                                <p>
                                <?php echo esc_html( $settings['project_des1'] ); ?>
                            </p>
                            <p>
                                <?php echo esc_html( $settings['project_des2'] ); ?>
                            </p>
                            </div>
                        </div>
                    </div>

                    <!-- Challenges Section -->
                    <div class="project-details-items bg-gray default-padding mt-100 mt-xs-40">
                        <div class="item-grid-container">
                            <?php foreach ( $settings['challenges'] as $challenge ) : ?>
                                <div class="single-grid">
                                    <div class="item-grid-colum">
                                        <div class="left-info">
                                            <h2><?php echo esc_html( $challenge['challenge_title'] ); ?></h2>
                                        </div>
                                        <div class="right-info">
                                            <p><?php echo esc_html( $challenge['challenge_description_1'] ); ?></p>
                                            <p><?php echo esc_html( $challenge['challenge_description_2'] ); ?></p>
                                            <?php if ( ! empty( $challenge['challenge_list_title'] ) ) : ?>
                                            <h3><?php echo esc_html( $challenge['challenge_list_title'] ); ?></h3>
                                        <?php endif; ?>
                                            <?php if ( ! empty( $challenge['challenge_list'] ) ) : ?>
                                                <ul class="list-style-two">
                                                    <?php
                                                    $list_items = explode( ',', $challenge['challenge_list'] );
                                                    foreach ( $list_items as $item ) {
                                                        echo '<li>' . esc_html( trim( $item ) ) . '</li>';
                                                    }
                                                    ?>
                                                </ul>
                                            <?php endif; ?>
                                            <?php if ( ! empty( $challenge['challenge_image']['url'] ) ) : ?>
                                                <img src="<?php echo esc_url( $challenge['challenge_image']['url'] ); ?>" alt="Universus Consulting Service">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Details Area -->
        <?php
    }
}
