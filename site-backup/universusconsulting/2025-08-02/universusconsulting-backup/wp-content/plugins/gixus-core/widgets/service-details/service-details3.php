<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Service_Details_Widget_Three extends \Elementor\Widget_Base {

    public function get_name() {
        return 'service_details_three';
    }

    public function get_title() {
        return __( 'Service Details Widget Three', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info';
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
            'service_title',
            [
                'label' => __( 'Service Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Service Process', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'service_description',
            [
                'label' => __( 'Service Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
            ]
        );

        // Accordion Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'accordion_question',
            [
                'label' => __( 'Question', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'What problem does your business solve?', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'accordion_answer',
            [
                'label' => __( 'Answer', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => implode("\n", [
                    'Business Management consultation',
                    'Team Building Leadership',
                    'Growth Method Analysis',
                    'Assessment Report Analysis'
                ]),
                'description' => __( 'Add each list item on a new line.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'accordion_items',
            [
                'label' => __( 'Accordion Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'accordion_question' => __( 'What problem does your business solve?', 'gixus-core' ),
                        'accordion_answer' => __( 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
                        'list_items' => implode("\n", [
                            'Business Management consultation',
                            'Team Building Leadership',
                            'Growth Method Analysis',
                            'Assessment Report Analysis'
                        ]),
                    ],
                    [
                        'accordion_question' => __( 'How does your business generate income?', 'gixus-core' ),
                        'accordion_answer' => __( 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
                        'list_items' => implode("\n", [
                            'Business Management consultation',
                            'Team Building Leadership',
                            'Growth Method Analysis'
                        ]),
                    ],
                    [
                        'accordion_question' => __( 'Which parts of business are profitable?', 'gixus-core' ),
                        'accordion_answer' => __( 'New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
                        'list_items' => implode("\n", [
                            'Business Management consultation',
                            'Team Building Leadership',
                            'Growth Method Analysis'
                        ]),
                    ],
                ],
                'title_field' => '{{{ accordion_question }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="services-content default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title"><?php echo esc_html( $settings['service_title'] ); ?></h2>
                        <p><?php echo esc_html( $settings['service_description'] ); ?></p>
                        <div class="accordion mt-50" id="faqAccordion">
                            <?php foreach ( $settings['accordion_items'] as $index => $item ) : ?>
                                <div class="accordion-item accordion-style-one">
                                    <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                        <button class="accordion-button <?php echo $index === 0 ? 'show' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                                            <?php echo esc_html( $item['accordion_question'] ); ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p><?php echo wp_kses_post( $item['accordion_answer'] ); ?></p>
                                            <?php if(!empty($item['list_items'])): ?>
                                            <ul class="list-style-two">
                                                <?php
                                                $list_items = explode( "\n", $item['list_items'] );
                                                foreach ( $list_items as $list_item ) {
                                                    echo '<li>' . esc_html( trim( $list_item ) ) . '</li>';
                                                }
                                                ?>
                                            </ul>
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