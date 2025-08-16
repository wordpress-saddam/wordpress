<!-- Start Blog Comment -->
<div class="blog-comments">
    <div class="comments-area">
        <?php if ( have_comments() ) : ?>
        <div class="comments-title">
            <h3><?php comments_number( esc_html__('0 Comment', 'gixus'), esc_html__('1 Comment', 'gixus'), esc_html__('% Comments', 'gixus') ); ?></h3>
            <div class="comments-list">

                <?php
            wp_list_comments(array(
                'callback' => 'gixus_comment_callback'
            ));
            ?>
            </div>
        </div>
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <div class="text-center">
          <ul class="pagination">
            <li>
              <?php 
              paginate_comments_links( 
              array(
              'prev_text' => wp_specialchars_decode('<i class="fa fa-angle-left"></i>',ENT_QUOTES),
              'next_text' => wp_specialchars_decode('<i class="fa fa-angle-right"></i>',ENT_QUOTES),
              ));  
              ?>
            </li> 
          </ul>
        </div>
        <?php endif; ?>
        
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php echo esc_html__( 'Comments are closed.' , 'gixus' ); ?></p>
        <?php endif; ?> 
        
        <?php endif; ?>
        <?php
        if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
            $custom_comment_form_args = array(
                'fields' => array(
                    // Customize the name field with localization and ARIA attributes
                    'author' => '<div class="row"><div class="col-md-6">
                                    <div class="form-group">
                                        <input name="author" class="form-control" placeholder="' . esc_attr__('Name *', 'gixus') . '" type="text" ' . ( $aria_req ? 'aria-required="true"' : '' ) . ' />
                                    </div>
                                 </div>',
                    // Customize the email field with localization and ARIA attributes
                    'email' => '<div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" class="form-control" placeholder="' . esc_attr__('Email *', 'gixus') . '" type="email" ' . ( $aria_req ? 'aria-required="true"' : '' ) . ' />
                                    </div>
                                </div></div>',
                ),
                // Customize the comment textarea field
                'comment_field' => '<div class="col-md-12">
                                        <div class="form-group comments">
                                            <textarea name="comment" class="form-control" placeholder="' . esc_attr__('Comment', 'gixus') . '"></textarea>
                                        </div>
                                    </div>',
                // Customize the submit button
                'submit_button' => '<div class="col-md-12">
                                        <div class="form-group full-width submit">
                                            <button class="btn btn-animation dark border" type="submit">' . esc_attr__('Post Comment', 'gixus') . '</button>
                                        </div>
                                    </div>',
                // Remove default titles and comment notes
                'title_reply_before'=> '<div class="title"><h3>',                
                'title_reply'=> esc_html__( 'Leave a comments', 'gixus' ),
                'title_reply_after'=> '</h3></div>',
				'submit_field' => '%1$s %2$s',
            );

comment_form($custom_comment_form_args);
?>
    </div>
</div>
<!-- End Comments Form -->