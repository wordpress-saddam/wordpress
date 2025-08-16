<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Gixus_Parallax_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'gixus_parallax_widget';
    }

    public function get_title() {
        return __( 'Home Three Parallax Section', 'gixus' );
    }

    public function get_icon() {
        return 'eicon-image-rollover';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Tab
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Parallax Background Image
        $this->add_control(
            'parallax_background_image',
            [
                'label' => __( 'Parallax Background Image', 'gixus' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/27.png',
                ],
            ]
        );

        // Inner Image (Banner)
        $this->add_control(
            'inner_image',
            [
                'label' => __( 'Inner Image', 'gixus' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/20.jpg',
                ],
            ]
        );

        // Curved Circle Text
        $this->add_control(
            'circle_text',
            [
                'label' => __( 'Circle Text', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '.  Certified Creative   .  Digital Agency Company', 'gixus' ),
            ]
        );

        // Title
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Best creative & modern agency', 'gixus' ),
            ]
        );

        // Description
        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab veniam ullam vero officia incidunt ea, odio excepturi aut ipsum quis nihil eius ipsa at est libero reprehenderit sapiente iure voluptatem?', 'gixus' ),
            ]
        );

        // Link Icon (Arrow Icon)
        $this->add_control(
            'link_icon',
            [
                'label' => __( 'Link Icon', 'gixus' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-long-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );

        // Link URL
        $this->add_control(
            'link_url',
            [
                'label' => __( 'Link URL', 'gixus' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'gixus' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>

        <!-- Start Parallax Area -->
        <div class="parallax-area">
            <img src="<?php echo esc_url( $settings['parallax_background_image']['url'] ); ?>" alt="<?php esc_attr_e( 'Universus Consulting Service', 'gixus' ); ?>">
            <div class="img-container shape">
                <img src="<?php echo esc_url( $settings['inner_image']['url'] ); ?>" alt="<?php esc_attr_e( 'Universus Consulting Service', 'gixus' ); ?>">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="circle-progress-style-two text-center">
                            <div class="circle-text-card">
                                <div class="circle-text style-two">
                                    <div class="circle-text-item" data-circle-text-options='{"radius": 105, "forceWidth": true, "forceHeight": true }'>
                                        <?php echo esc_html( $settings['circle_text'] ); ?>
                                    </div>
                                </div>
                                <?php if ( ! empty( $settings['link_url']['url'] ) ) : ?>
                                    <a href="<?php echo esc_url( $settings['link_url']['url'] ); ?>">
                                        <i class="<?php echo esc_attr( $settings['link_icon']['value'] ); ?>"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <h2 class="title split-text"><?php echo esc_html( $settings['title'] ); ?></h2>
                            <p class="split-text"><?php echo esc_html( $settings['description'] ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Parallax Area -->

        <?php
    }
}
