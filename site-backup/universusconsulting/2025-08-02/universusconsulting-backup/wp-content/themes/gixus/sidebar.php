<!-- Start Sidebar -->
<div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
    <aside>
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php endif; ?>
    </aside>
</div>