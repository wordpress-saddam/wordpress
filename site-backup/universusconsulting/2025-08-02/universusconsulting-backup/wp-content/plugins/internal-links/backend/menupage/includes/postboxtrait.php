<?php
namespace ILJ\Backend\MenuPage\Includes;

/**
 * Backend Postbox
 *
 * Responsible for activating and generating individual postboxes
 *
 * @package ILJ\Backend\Menupage
 * @since   1.2.0
 */
trait PostboxTrait {

	/**
	 * Renders the postbox
	 *
	 * @since  1.2.0
	 * @param  array $args The arguments for the rendering
	 * @return void
	 */
	protected function renderPostbox($args) {
		$defaults = array(
			'class'           => '',
			'title'           => '',
			'title_span'      => '',
			'content'         => '',
			'help'            => '',
			'before_headline' => '',
		);

		 $args = wp_parse_args($args, $defaults);
		?>
		<div class="postbox ilj-postbox <?php echo esc_attr('' !== $args['class'] ? $args['class'] : ''); ?>">
		<?php
		 if ('' != $args['help']) {
			 $help_link = sprintf('<a class="tip" href="%s" target="_blank" rel="noopener" title="%s"><span class="dashicons dashicons-editor-help"></span></a>', $args['help'], __('Get help', 'internal-links'));
		 }

		 $title = esc_html($args['title']);

		 if ('' != $args['title_span']) {
			 $title = sprintf('<span class="%s">%s</span>', esc_html($args['title_span']), $title);
		 }

		 printf('%s<h2>%s%s</h2>', wp_kses_post($args['before_headline']), wp_kses_post($title), isset($help_link) ? wp_kses_post($help_link) : '');
		 echo '      <div class="inside">';
		 // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Ignored since the data is printed mixed html content along with input fields.
		 echo $args['content'];
		 echo '      </div>';
		 echo '  </div>';
	}
}
