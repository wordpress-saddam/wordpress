<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Service_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_service';
    }

    public function get_title() {
        return __( 'Home One Service', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-services';
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
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'services-style-one-area default-padding', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/12.png',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Services', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Empower your business with our services.', 'gixus-core' ),
            ]
        );

        // Repeater for Service Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'service_icon',
            [
                'label' => __( 'Service Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/5.png',
                ],
            ]
        );

        $repeater->add_control(
            'service_title',
            [
                'label' => __( 'Service Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Advanced Business Intelligence', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_description',
            [
                'label' => __( 'Service Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Seeing rather her you not esteem men settle genius excuse. Deal say over you age devonshire Comparison new ham melancholy son themselves instrument out reasonably.', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_link',
            [
                'label' => __( 'Service Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'services-details.html',
                ],
            ]
        );

        $this->add_control(
            'service_items',
            [
                'label' => __( 'Service Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_title' => __( 'Advanced Business Intelligence', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/5.png',
                        ],
                    ],
                    [
                        'service_title' => __( 'Business Research And Development', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/6.png',
                        ],
                    ],
                    [
                        'service_title' => __( 'Digital Project Management System', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/7.png',
                        ],
                    ],
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );
        
         $this->add_control(
        'background_color',
        [
            'label' => __( 'Background Color', 'gixus-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .services-style-one-item.out' => 'background-color: {{VALUE}};',
            ],
        ]
    );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="<?php echo esc_html( $settings['class'] ); ?>" style="background: url(<?php echo esc_url( $settings['bgimg']['url'] ); ?>);">
            <div class="container">
                <?php if(!empty($settings['sub_title'] && $settings['main_title'])): ?>
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <?php if(!empty($settings['sub_title'])): ?>
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <?php endif; ?>
                            <?php if(!empty($settings['main_title'])): ?>
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services-style-one-items">
                            <?php foreach ( $settings['service_items'] as $index => $item ) : ?>
                                <div class="services-style-one-item<?php echo $index === 0 ? ' out' : ''; ?>  wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                    <div class="icon">
                                        <img src="<?php echo esc_url( $item['service_icon']['url'] ); ?>" alt="Universus Consulting Services">
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?php echo esc_url( $item['service_link']['url'] ); ?>"><?php echo esc_html( $item['service_title'] ); ?></a></h4>
                                        <p><?php echo  $item['service_description']; ?></p>
                                    </div>
                                    <div class="button">
                                        <a class="btn" href="<?php echo esc_url( $item['service_link']['url'] ); ?>"><i class="fas fa-arrow-right"></i></a>
                                    </div>
									<?php if(false): ?>
                                    <span><?php echo sprintf('%02d', $index + 1); ?></span>
									<?php endif; ?>
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
