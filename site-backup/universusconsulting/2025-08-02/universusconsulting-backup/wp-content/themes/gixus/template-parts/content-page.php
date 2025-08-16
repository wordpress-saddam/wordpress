<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item-box'); ?>>
    <div class="thumb">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
            </a>
        <?php endif; ?>
    </div>
    <div class="info">
        <div class="meta">
            <ul>
                <li>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <i class="fas fa-calendar-alt"></i> <?php echo get_the_modified_date('F j, Y'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <i class="fas fa-user-circle"></i> <?php the_author(); ?>
                    </a>
                </li>
            </ul>
        </div>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
    </div>
</div>
