<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Project_Two_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'project_two_widget';
    }

    public function get_title() {
        return __( 'Project Two Widget', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'gallery-style-one-area default-padding', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Case Studies', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Have a view of our amazing projects with our clients', 'gixus-core' ),
            ]
        );

        // Repeater for Project Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'project_image',
            [
                'label' => __( 'Project Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/projects/5.jpg',
                ],
            ]
        );

        $repeater->add_control(
            'project_title',
            [
                'label' => __( 'Project Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Project Title', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_tags',
            [
                'label' => __( 'Project Tags', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Tags', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_description',
            [
                'label' => __( 'Project Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Description of the project.', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_link_text',
            [
                'label' => __( 'Project Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Explore', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_link',
            [
                'label' => __( 'Project Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'project-details.html',
                ],
            ]
        );

        $this->add_control(
            'project_items',
            [
                'label' => __( 'Project Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/5.jpg',
                        ],
                        'project_title' => __( 'Cyber Security', 'gixus-core' ),
                        'project_tags' => __( 'Technology, IT', 'gixus-core' ),
                        'project_description' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                    [
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/6.jpg',
                        ],
                        'project_title' => __( 'IT Consultancy', 'gixus-core' ),
                        'project_tags' => __( 'Security, Firewall', 'gixus-core' ),
                        'project_description' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                    [
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/7.jpg',
                        ],
                        'project_title' => __( 'Analysis of Security', 'gixus-core' ),
                        'project_tags' => __( 'Support, Tech', 'gixus-core' ),
                        'project_description' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                    [
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/8.jpg',
                        ],
                        'project_title' => __( 'Business Analysis', 'gixus-core' ),
                        'project_tags' => __( 'Network, Error', 'gixus-core' ),
                        'project_description' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                ],
                'title_field' => '{{{ project_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="<?php echo esc_attr( $settings['class'] ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9">
                        <div class="site-heading">
                        <?php if(!empty($settings['sub_title'])): ?>
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <?php endif; ?>
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3">
                        <div class="project-navigation-items">
                            <div class="project-swiper-nav">
                                <div class="project-pagination"></div>
                                <div class="project-button-prev"></div>
                                <div class="project-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fill">
                <div class="row">
                    <div class="gallery-style-one-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ( $settings['project_items'] as $item ) : ?>
                                <div class="swiper-slide">
                                    <div class="gallery-style-one">
                                        <img src="<?php echo esc_url( $item['project_image']['url'] ); ?>" alt="Image Not Found">
                                        <div class="overlay">
                                            <div class="info">
                                                <h4><a href="<?php echo esc_url( $item['project_link']['url'] ); ?>"><?php echo esc_html( $item['project_title'] ); ?></a></h4>
                                                <span><?php echo esc_html( $item['project_tags'] ); ?></span>
                                                <p><?php echo esc_html( $item['project_description'] ); ?></p>
                                            </div>
                                            <?php if(!empty($item['project_link']['url'])): ?>
                                            <a href="<?php echo esc_url( $item['project_link']['url'] ); ?>"><?php echo esc_html( $item['project_link_text'] ); ?> <i class="fas fa-long-arrow-right"></i></a>
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
        <?php
    }
}