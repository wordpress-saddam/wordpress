<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Choose_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_choose';
    }

    public function get_title() {
        return __( 'Home One Choose', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-check-circle';
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
            'experience_years_text',
            [
                'label' => __( 'Years of Experience', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Years of Experience',
            ]
        );

        $this->add_control(
            'experience_years',
            [
                'label' => __( 'Years of Experience', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 26,
            ]
        );

        // Repeater for Progress Bars
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'progress_label',
            [
                'label' => __( 'Progress Label', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Business Development', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'progress_percent',
            [
                'label' => __( 'Progress Percentage', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 65,
            ]
        );

        $this->add_control(
            'progress_items',
            [
                'label' => __( 'Progress Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'progress_label' => __( 'Business Development', 'gixus-core' ),
                        'progress_percent' => 65,
                    ],
                    [
                        'progress_label' => __( 'Investment Analysis', 'gixus-core' ),
                        'progress_percent' => 84,
                    ],
                ],
                'title_field' => '{{{ progress_label }}}',
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Building great future Together, Be with us', 'gixus-core' ),
            ]
        );

        // Repeater for Process Items
        $repeater_process = new \Elementor\Repeater();

        $repeater_process->add_control(
            'process_number',
            [
                'label' => __( 'Process Number', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 1,
            ]
        );

        $repeater_process->add_control(
            'process_title',
            [
                'label' => __( 'Process Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Information Collection', 'gixus-core' ),
            ]
        );

        $repeater_process->add_control(
            'process_description',
            [
                'label' => __( 'Process Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'process_switch',
            [
                'label' => __( 'Enable Process Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Enable', 'plugin-name' ),
                'label_off' => __( 'Disable', 'plugin-name' ),
                'default' => 'yes',
            ]
        );


        $this->add_control(
            'process_items',
            [
                'label' => __( 'Process Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_process->get_controls(),
                'default' => [
                    [
                        'process_number' => 1,
                        'process_title' => __( 'Information Collection', 'gixus-core' ),
                        'process_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                    [
                        'process_number' => 2,
                        'process_title' => __( 'Projection Report Analysis', 'gixus-core' ),
                        'process_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                    [
                        'process_number' => 3,
                        'process_title' => __( 'Consultation Solution', 'gixus-core' ),
                        'process_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ process_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'progressbar_style_section',
            [
                'label' => __('Progress Bar Colors', 'gixus-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'gradient_color_1',
            [
                'label' => __('Gradient Color 1', 'gixus-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#2667FF',
            ]
        );

        $this->add_control(
            'gradient_color_2',
            [
                'label' => __('Gradient Color 2', 'gixus-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#6c19ef',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="choose-us-style-one-area overflow-hidden bg-gray">
			<?php if(false): ?>
            <div class="container">
                <div class="heading-left">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1">
                            <div class="experience-style-one">
                                <h2><strong><?php echo esc_html( $settings['experience_years'] ); ?></strong> <?php echo esc_html( $settings['experience_years_text'] ); ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="circle-progress">
                                <?php foreach ( $settings['progress_items'] as $item ) : ?>
                                    <div class="progressbar">
                                        <div class="circle" data-percent="<?php echo esc_attr( $item['progress_percent'] ); ?>">
                                            <strong></strong>
                                        </div>
                                        <h4><?php echo esc_html( $item['progress_label'] ); ?></h4>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <script>
    (function($) {
        function animateElements() {
            $('.progressbar').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.circle').attr('data-percent');
                var animate = $(this).data('animate');

                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.circle').circleProgress({
                        value: percent / 100,
                        size: 130,
                        thickness: 3,
                        lineCap: 'round',
                        emptyFill: '#e7e7e7',
                        fill: {
                            gradient: ['<?php echo esc_js( $settings['gradient_color_1'] ); ?>', '<?php echo esc_js( $settings['gradient_color_2'] ); ?>']
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('strong').text((stepValue * 100).toFixed(0) + "%");
                    });
                }
            });
        }

        $(document).ready(function() {
            animateElements();
            $(window).scroll(animateElements);
        });
    })(jQuery);
</script>
                        </div>
                    </div>
                </div>
            </div>
			<?php endif; ?>
            <div class="container container-stage">
                <?php if ($settings['process_switch'] === 'yes') : ?>
                <div class="choose-us-one-thumb">
                    <?php if(!empty($settings['main_title'])): ?>
                    <div class="content">
                        <div class="left-info">
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                        <?php else: ?>
                        <div class="content" style="grid-template-columns: 2fr;">
                        <?php endif; ?>
                        <div class="process-style-one">
                            <?php foreach ( $settings['process_items'] as $index => $item ) : ?>
                            <div class="process-style-one-item wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                    <span><?php echo esc_html( sprintf('%02d', $item['process_number']) ); ?></span>
                                    <h3 class="h4-to-h3"><?php echo esc_html( $item['process_title'] ); ?></h3>
                                    <p><?php echo esc_html( $item['process_description'] ); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
                <?php endif; ?>
        </div>
        <?php
    }
}
