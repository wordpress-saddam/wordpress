<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Elementor_Home6_Brand_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_brand';
    }

    public function get_title() {
        return __( 'Home Six Brand', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-image';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'brand_items',
            [
                'label' => __( 'Brand Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'brand_title',
                        'label' => __( 'Brand Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => __( 'Image Generator', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    [
                        'brand_title' => 'Image&nbsp;Generator',
                    ],
                    [
                        'brand_title' => 'Code&nbsp;Solution',
                    ],
                    [
                        'brand_title' => 'Artificial&nbsp;Intelligence',
                    ],
                ],
                'title_field' => '{{{ brand_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="brand-style-two-area text-light relative overflow-hidden">
            <div class="brand-style-one">
                <div class="container-fill">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-items">
                                <div class="brand-conetnt">
                                    <?php foreach ( $settings['brand_items'] as $brand ) : ?>
                                        <div class="item">
                                            <h2><?php echo $brand['brand_title']; ?></h2>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="brand-conetnt">
                                    <?php foreach ( $settings['brand_items'] as $brand ) : ?>
                                        <div class="item">
                                            <h2><?php echo  $brand['brand_title']; ?></h2>
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
