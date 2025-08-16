<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Four_Process_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_four_process';
    }

    public function get_title() {
        return __( 'Home Four Process', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-accordion';
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
            'banner_image',
            [
                'label' => __( 'Banner Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/16.jpg',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Process', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Fast delivery and <br> secure packages', 'gixus-core' ),
            ]
        );

        // Repeater for Process Steps
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'step_title',
            [
                'label' => __( 'Step Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Booking of freight', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'step_description',
            [
                'label' => __( 'Step Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'process_steps',
            [
                'label' => __( 'Process Steps', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'step_title' => __( 'Booking of freight', 'gixus-core' ),
                        'step_description' => __( 'Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
                    ],
                    [
                        'step_title' => __( 'Goods are processed', 'gixus-core' ),
                        'step_description' => __( 'Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
                    ],
                    [
                        'step_title' => __( 'Goods arrive in the country', 'gixus-core' ),
                        'step_description' => __( 'Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ step_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="process-style-three-area default-padding bg-gray">
            <div class="fixed-half-thumb">
                <img src="<?php echo esc_url($settings['banner_image']['url']); ?>" alt="Image Not Found">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="process-style-three-info">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title split-text"><?php echo wp_kses_post( $settings['main_title'] ); ?></h2>
                        </div>

                        <div class="process-style-three-items project-style-one-items">
                            <div class="accordion" id="projectAccordion">
                                <?php foreach ( $settings['process_steps'] as $index => $item ) : ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                            <button class="accordion-button<?php echo $index === 0 ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                                                <span><strong><?php echo sprintf('%02d', $index + 1); ?></strong></span>
                                                <b><?php echo esc_html( $item['step_title'] ); ?></b>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#projectAccordion">
                                            <div class="accordion-body">
                                                <p><?php echo esc_html( $item['step_description'] ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
