<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gixus
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Single Item -->
<div class="item" data-aos="fade-up">
    <div class="thumb">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
            </a>
        <?php endif; ?>
    </div>
    <div class="info">
        <div class="meta">
            <ul>
                <?php if (is_sticky()) : ?>
                <li>
                    <span><i class="fas fa-thumbtack"></i><?php esc_html_e('STICKY POST','gixus'); ?><span>
                </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo esc_url( get_day_link( get_the_date('Y'), get_the_date('m'), get_the_date('d') ) ); ?>">
                        <i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>">
                        <i class="far fa-user-circle"></i> <?php the_author(); ?>
                    </a>
                </li>
            </ul>
        </div>
        
        <h2 class="title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <p>
            <?php the_excerpt(); ?>
        </p>
        
        <a class="btn mt-10 btn-md circle btn-theme animation" href="<?php the_permalink(); ?>">
            <?php esc_html_e('Continue Reading', 'gixus'); ?>
        </a>
    </div>
</div>
<!-- Single Item -->

</div>
