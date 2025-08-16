<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Pages_Faq_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'pages_faq';
    }

    public function get_title() {
        return __( 'Pages FAQ Widget', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-help';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'faq_content_section',
            [
                'label' => __( 'FAQ Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/2.jpg',
                ],
            ]
        );
        
        $this->add_control(
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'faq-style-one-area chooseus-style-two-area default-padding', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'class1',
            [
                'label' => __( 'Class Secondary', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'faq-style-two-items chooseus-style-two-items bg-cover', 'gixus-core' ),
            ]
        );

        // FAQ Title
        $this->add_control(
            'faq_title',
            [
                'label' => __( 'FAQ Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Whatever plan we got you covered', 'gixus-core' ),
            ]
        );

        // FAQ Subtitle
        $this->add_control(
            'faq_sub_title',
            [
                'label' => __( 'FAQ Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Why Choose Us', 'gixus-core' ),
            ]
        );

        // Counter Value

        $this->add_control(
            'counter_title',
            [
                'label' => __( 'Counter Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'CLIENTS AROUND THE WORLD', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'counter_text',
            [
                'label' => __( 'Counter Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'K', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'counter_value',
            [
                'label' => __( 'Counter Value', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 56,
            ]
        );

        // FAQ Items Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'faq_switch',
            [
                'label' => __( 'Show/Closed', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'open' => __( 'Opened FAQ', 'gixus-core' ),
                    'close' => __( 'Closed FAQ', 'gixus-core' ),
                ],
                'default' => 'close',
            ]
        );

        // FAQ Question
        $repeater->add_control(
            'faq_question',
            [
                'label' => __( 'Question', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'What problem does your business solve?', 'gixus-core' ),
            ]
        );

        // FAQ Answer
        $repeater->add_control(
            'faq_answer',
            [
                'label' => __( 'Answer', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Bennings appetite disposed me an at subjects an.', 'gixus-core' ),
            ]
        );

        // Features Repeater
        $repeater->add_control(
            'faq_features',
            [
                'label' => __( 'Features', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'feature_text',
                        'label' => __( 'Feature Text', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Business Management consultation', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ feature_text }}}',
            ]
        );

        // FAQ Items Control
        $this->add_control(
            'faq_items',
            [
                'label' => __( 'FAQ Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_switch' => __( 'open', 'gixus-core' ),
                        'faq_question' => __( 'What problem does your business solve?', 'gixus-core' ),
                        'faq_answer' => __( 'Perfect appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite.', 'gixus-core' ),
                        'faq_features' => [
                            ['feature_text' => __( 'Business Management consultation', 'gixus-core' )],
                            ['feature_text' => __( 'Team Building Leadership', 'gixus-core' )],
                            ['feature_text' => __( 'Growth Method Analysis', 'gixus-core' )],
                        ],
                    ],
                    [
                        'faq_switch' => __( 'close', 'gixus-core' ),
                        'faq_question' => __( 'How does your business generate income?', 'gixus-core' ),
                        'faq_answer' => __( 'Perfect appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite.', 'gixus-core' ),
                        'faq_features' => [
                            ['feature_text' => __( 'Business Management consultation', 'gixus-core' )],
                            ['feature_text' => __( 'Team Building Leadership', 'gixus-core' )],
                            ['feature_text' => __( 'Growth Method Analysis', 'gixus-core' )],
                        ],
                    ],
                    [
                        'faq_switch' => __( 'close', 'gixus-core' ),
                        'faq_question' => __( ' Which parts of business are profitable?', 'gixus-core' ),
                       'faq_answer' => __( 'Perfect appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite.', 'gixus-core' ),
                        'faq_features' => [
                            ['feature_text' => __( 'Business Management consultation', 'gixus-core' )],
                            ['feature_text' => __( 'Team Building Leadership', 'gixus-core' )],
                            ['feature_text' => __( 'Growth Method Analysis', 'gixus-core' )],
                        ],
                    ],
                ],
                'title_field' => '{{{ faq_question }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="<?php //echo esc_attr( $settings['class'] ); ?>" faq-style-one-area chooseus-style-two-area>
            <div class="container">
                <div class="<?php echo esc_attr( $settings['class1'] ); ?>" style="background-image: url(<?php echo esc_url( $settings['bgimg']['url'] ); ?>);">
                    <div class="row">
                        <div class="col-xl-12 pr-50 pr-md-15 pr-xs-15">
                            <div class="site-heading text-center">
                                <h2 class="title split-text"><?php echo esc_html( $settings['faq_title'] ); ?></h2>
								<?php if(false): ?>
                                <div class="fun-fact-card-two mt-40 wow fadeInUp">
                                    <h4 class="sub-title"><?php echo esc_html( $settings['faq_sub_title'] ); ?></h4>
                                    <div class="counter-title">
                                        <div class="counter">
                                        <?php if(!empty($settings['counter_value'])): ?>
                                            <div class="timer" data-to="<?php echo esc_attr( $settings['counter_value'] ); ?>" data-speed="2000"><?php echo esc_html( $settings['counter_value'] ); ?></div>
                                            <?php endif; ?>
                                            <div class="operator"><?php echo esc_html( $settings['counter_text'] ); ?></div>
                                        </div>
                                    </div>
                                    <span class="medium"><?php echo esc_html( $settings['counter_title'] ); ?></span>
                                </div>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="choose-us-style-two">
                                <div class="accordion" id="faqAccordion">
                                    <?php foreach ( $settings['faq_items'] as $item ) : ?>
                                        <div class="accordion-item accordion-style-one">
                                            <h3 class="accordion-header" id="headingOne">
                                                <button class="accordion-button <?php echo esc_attr( $item['faq_switch'] === 'open' ? '' : 'collapsed' ); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo esc_attr( $item['_id'] ); ?>" aria-expanded="true" aria-controls="collapse-<?php echo esc_attr( $item['_id'] ); ?>">
                                                    <?php echo esc_html( $item['faq_question'] ); ?>
                                                </button>
                                            </h3>
                                            <div id="collapse-<?php echo esc_attr( $item['_id'] ); ?>" class="accordion-collapse collapse <?php echo esc_attr( $item['faq_switch'] === 'open' ? 'show' : '' ); ?>" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p><?php echo esc_html( $item['faq_answer'] ); ?></p>
                                                    <ul class="list-style-one">
                                                        <?php foreach ( $item['faq_features'] as $feature ) : ?>
                                                            <li><?php echo esc_html( $feature['feature_text'] ); ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
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
        </div>
        <?php
    }
}
