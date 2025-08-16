<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_hero';
    }

    public function get_title() {
        return __( 'Home One Hero', 'gixus-core' );
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
            'small_heading',
            [
                'label' => __( 'Small Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Business Advisor', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_heading',
            [
                'label' => __( 'Main Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Grow <strong>business</strong> <br>with great advice', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'gixus-core' ),
            ]
        );
		
		$this->add_control(
            'button_text2',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Call Now', 'gixus-core' ),
            ]
        );
        

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Button Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.btn-gradient::after' => 'background-image: linear-gradient(to right, {{VALUE}} , {{VALUE}},  {{VALUE}} );',
                ],
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
            ]
        );
		
		$this->add_control(
            'button_link2',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/anim-2.png',
                ],
            ]
        );
        
        $this->add_control(
            'background_color',
            [
                'label' => __( 'Background Color', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-style-one-area .shape-blury' => 'background: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'background_color1',
            [
                'label' => __( 'Background Border', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-style-one .thumb::before' => 'border: 1px solid {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'background_color2',
            [
                'label' => __( 'Background Color Two', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-style-one .thumb::after' => 'border: 100px solid {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Main Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/1.png',
                ],
            ]
        );

        $this->add_control(
            'icon_one',
            [
                'label' => __( 'Icon One', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-chart-pie',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'icon_one_text',
            [
                'label' => __( 'Icon One Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<strong>86%</strong> Business Growth', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'icon_two',
            [
                'label' => __( 'Icon Two', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-rocket',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'icon_two_text',
            [
                'label' => __( 'Icon Two Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<strong>75%</strong> Marketing', 'gixus-core' ),
            ]
        );
        
        

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		//echo "<pre>"; print_r($settings); echo "</pre>";
        ?>
        <div class="banner-style-one-area overflow-hidden bg-gray default-padding2">
            <div class="shape-blury"></div>
            <div class="banner-style-one">
                <div class="container">
                    <div class="content">
                        <div class="row align-center">
                            <div class="col-xl-6 col-lg-7 pr-50 pr-md-15 pr-xs-15">
                                <div class="information">
                                    <?php if(!empty($settings['bgimg']['url'])): ?>
                                    <div class="animation-shape">
                                        <img src="<?php echo esc_url( $settings['bgimg']['url'] ); ?>" alt="Universus Consulting Home">
                                    </div>
                                    <?php endif; ?>
<!--                                     <h4 class="wow fadeInUp" data-wow-duration="400ms"><?php echo esc_html( $settings['small_heading'] ); ?></h4> -->
                                    <h1 class="wow fadeInUp to-h1" data-wow-delay="500ms" data-wow-duration="400ms"><?php echo wp_kses_post( $settings['main_heading'] ); ?></h1>
                                    <p class="wow fadeInUp"  data-wow-delay="900ms" data-wow-duration="400ms"><?php echo  $settings['description']; ?></p>
                                    <?php if ( $settings['button_link']['url'] || $settings['button_link2']['url'] ) : ?>
                                    <div class="button mt-40 wow fadeInUp"  data-wow-delay="1200ms" data-wow-duration="400ms">
                                        <?php if ( $settings['button_link']['url'] ) : ?>
										<a class="btn btn-md circle btn-gradient animation hero-btn-one" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>">
                                            <?php echo esc_html( $settings['button_text'] ); ?>
                                        </a>
										<?php endif; ?>
										<?php if ( $settings['button_link2']['url'] ) : ?>
                                    <a class="btn btn-md circle btn-gradient animation hero-btn-two cost-cal-btn" href="<?php echo esc_url( $settings['button_link2']['url'] ); ?>">
                                            <?php echo esc_html( $settings['button_text2'] ); ?>
                                        </a>
                                    <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
									
									
                                </div>
                            </div>

                            <div class="banner-one-thumb col-xl-6 col-lg-5 pl-60 pl-md-15 pl-xs-15">
                                <div class="thumb">
                                    <?php if(!empty($settings['image']['url'])): ?>
                                    <img class="wow fadeInUp" src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="Thumb">
                                <?php endif; ?>
                                    <div class="strategy">
                                        <?php if(false && !empty($settings['icon_one_text'])): ?>
                                        <div class="item wow fadeInLeft" data-wow-delay="800ms">
                                            <div class="icon">
<i class="<?php echo esc_attr( $settings['icon_one']['value'] ); ?>"></i>                                            </div>
                                            <div class="info">
                                                <p><?php echo wp_kses_post( $settings['icon_one_text'] ); ?></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(false && !empty($settings['icon_two_text'])): ?>
                                         <div class="item wow fadeInRight" data-wow-delay="500ms">
                                            <div class="icon">
<i class="<?php echo esc_attr( $settings['icon_two']['value'] ); ?>"></i>                                            </div>
                                            <div class="info">
                                                <p><?php echo wp_kses_post( $settings['icon_two_text'] ); ?></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    protected function _content_template() {
        ?>
        <# var button_url = settings.button_link.url ? settings.button_link.url : '#'; #>
        <div class="banner-style-one-area overflow-hidden bg-gray">
            <div class="shape-blury"></div>
            <div class="banner-style-one">
                <div class="container">
                    <div class="content">
                        <div class="row align-center">
                            <div class="col-xl-6 col-lg-7 pr-50 pr-md-15 pr-xs-15">
                                <div class="information">
                                    <div class="animation-shape">
                                        <img src="{{{ settings.bgimg.url }}}" alt="Universus Consulting Home">
                                    </div>
                                    <h4>{{{ settings.small_heading }}}</h4>
                                    <h2>{{{ settings.main_heading }}}</h2>
                                    <p>{{{ settings.description }}}</p>
                                    <# if ( settings.button_link.url ) { #>
                                    <div class="button mt-40">
                                        <a class="btn btn-md circle btn-gradient animation" href="{{{ button_url }}}">{{{ settings.button_text }}}</a>
                                    </div>
                                    <# } #>
                                    <# if ( settings.button_link2.url ) { #>
                                    <div class="button mt-40">
                                        <a class="btn btn-md circle btn-gradient animation" href="{{ settings.button_link2.url }}">{{{ settings.button_text2 }}}</a>
                                    </div>
                                    <# } #>

                                </div>
                            </div>

                            <div class="banner-one-thumb col-xl-6 col-lg-5 pl-60 pl-md-15 pl-xs-15">
                                <div class="thumb">
                                    <img src="{{{ settings.image.url }}}" alt="Thumb">
                                    <div class="strategy">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="{{ settings.icon_one.value }}"></i>
                                            </div>
                                            <div class="info">
                                                <p>{{{ settings.icon_one_text }}}</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon">
                                                <i class="{{ settings.icon_two.value }}"></i>
                                            </div>
                                            <div class="info">
                                                <p>{{{ settings.icon_two_text }}}</p>
                                            </div>
                                        </div>
                                    </div>
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