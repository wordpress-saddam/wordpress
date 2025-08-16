<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Project_Three_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'project_three_widget';
    }

    public function get_title() {
        return __( 'Project Three Widget', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
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
            'sub_title',
            [
                'label' => __( 'Sub Title', 'gixus-core' ),
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
                    'url' => get_template_directory_uri() . '/assets/img/projects/1.jpg',
                ],
            ]
        );

        $repeater->add_control(
            'project_category',
            [
                'label' => __( 'Project Category', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Consulting, Recruitment', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_title',
            [
                'label' => __( 'Project Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Innovative Solutions', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_description',
            [
                'label' => __( 'Project Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but.', 'gixus-core' ),
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

        $repeater->add_control(
            'know_more_text',
            [
                'label' => __( 'Know More Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Know More', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'know_more_icon',
            [
                'label' => __( 'Know More Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-long-arrow-right',
                    'library' => 'fa-solid',
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
                        'project_title' => __( 'Innovative Solutions', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/1.jpg',
                        ],
                    ],
                    [
                        'project_title' => __( 'Authorise Company', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/2.jpg',
                        ],
                    ],
                    [
                        'project_title' => __( 'Management Skills', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/3.jpg',
                        ],
                    ],
                    [
                        'project_title' => __( 'Business Analysis', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/4.jpg',
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
        <div class="gallery-style-twoa-rea default-padding mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="site-heading">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-navigation-items">
                            <!-- Navigation -->
                            <div class="project-swiper-nav">
                                <!-- Pagination -->
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
                    <div class="gallery-style-two-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ( $settings['project_items'] as $item ) : ?>
                                <div class="swiper-slide">
                                    <div class="gallery-style-two">
                                        <img src="<?php echo esc_url( $item['project_image']['url'] ); ?>" alt="Universus Consulting Service">
                                        <div class="overlay text-light">
                                            <div class="info">
                                                <span><?php echo esc_html( $item['project_category'] ); ?></span>
                                                <h4><a href="<?php echo esc_url( $item['project_link']['url'] ); ?>"><?php echo esc_html( $item['project_title'] ); ?></a></h4>
                                                <p><?php echo esc_html( $item['project_description'] ); ?></p>
                                            </div>
                                            <a href="<?php echo esc_url( $item['project_link']['url'] ); ?>">
                                                <?php if ( !empty( $item['know_more_icon']['value'] ) ) : ?>
                                                    <i class="<?php echo esc_attr( $item['know_more_icon']['value'] ); ?>"></i>
                                                <?php endif; ?>
                                                <?php echo esc_html( $item['know_more_text'] ); ?>
                                            </a>
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
