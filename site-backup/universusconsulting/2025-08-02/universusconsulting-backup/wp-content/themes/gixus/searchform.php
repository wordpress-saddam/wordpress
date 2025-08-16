<div class="search">
    <div class="sidebar-info">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text"  placeholder="<?php esc_attr_e( 'Enter Keyword', 'gixus' )?>" name="s" class="form-control" value="<?php the_search_query(); ?>">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>