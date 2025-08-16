<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Project_One_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'project_widget';
    }

    public function get_title() {
        return __( 'Project One', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-portfolio';
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
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Recent Work', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Featured Works', 'gixus-core' ),
            ]
        );

        // Repeater for Portfolio Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'portfolio_image',
            [
                'label' => __( 'Portfolio Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/portfolio/1.jpg',
                ],
            ]
        );

        $repeater->add_control(
            'portfolio_title',
            [
                'label' => __( 'Portfolio Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Project Title', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'portfolio_tags',
            [
                'label' => __( 'Portfolio Tags', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Tag1, Tag2', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'portfolio_link',
            [
                'label' => __( 'Portfolio Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'project-details.html',
                ],
            ]
        );

        $this->add_control(
            'portfolio_items',
            [
                'label' => __( 'Portfolio Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'portfolio_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/portfolio/1.jpg',
                        ],
                        'portfolio_title' => __( 'Photo shooting & creative product editing', 'gixus-core' ),
                        'portfolio_tags' => __( 'Marketing, 2024', 'gixus-core' ),
                        'portfolio_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                    [
                        'portfolio_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/portfolio/2.jpg',
                        ],
                        'portfolio_title' => __( 'Quality in digital industrial', 'gixus-core' ),
                        'portfolio_tags' => __( 'Creative, 2023', 'gixus-core' ),
                        'portfolio_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                    [
                        'portfolio_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/projects/4.jpg',
                        ],
                        'portfolio_title' => __( 'Blue business and mockup cards color standard', 'gixus-core' ),
                        'portfolio_tags' => __( 'Design, 2024', 'gixus-core' ),
                        'portfolio_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                    [
                        'portfolio_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/portfolio/4.jpg',
                        ],
                        'portfolio_title' => __( 'Simple black & white design', 'gixus-core' ),
                        'portfolio_tags' => __( 'Business, 2023', 'gixus-core' ),
                        'portfolio_link' => [
                            'url' => 'project-details.html',
                        ],
                    ],
                ],
                'title_field' => '{{{ portfolio_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="portfolio-style-three-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt--100 mt-md--50 mt-xs--50">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row gutter-xl">
                            <?php foreach ( $settings['portfolio_items'] as $item ) : ?>
                                <div class="col-lg-6 col-md-6 item-center">
                                    <div class="portfolio-style-one wow fadeInUp">
                                        <a href="<?php echo esc_url( $item['portfolio_link']['url'] ); ?>" class="cursor-target">
                                            <div class="thumb-zoom">
                                                <img class="img-reveal" src="<?php echo esc_url( $item['portfolio_image']['url'] ); ?>" alt="Image Not Found">
                                            </div>
                                            <div class="pf-item-info">
                                                <div class="content">
                                                    <div class="pf-tags">
                                                        <span><?php echo esc_html( $item['portfolio_tags'] ); ?></span>
                                                    </div>
                                                    <h2><?php echo esc_html( $item['portfolio_title'] ); ?></h2>
                                                </div>
                                            </div>
                                        </a>
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
