<?php
namespace ILJ\Backend\MenuPage\Tour;

use ILJ\Backend\MenuPage\Tour\Step;

/**
 * Step: Editor
 *
 * Gives insights about creating keywords for an asset
 *
 * @package ILJ\Backend\Tour
 * @since   1.1.0
 */
class Editor extends Step {

	/**
	 * renderContent
	 *
	 * @return void
	 */
	public function renderContent() {
		?>
		<h1><?php esc_html_e('Begin with setting up keywords for your posts and pages', 'internal-links'); ?></h1>
		<?php
		$data_container = array(
			array(
				'title'       => __('Find the Keyword Editor', 'internal-links'),

				'description' => '<p>' .
				__('The <strong>Keyword Editor</strong> is the heart of the Internal Link Juicer.', 'internal-links') . ' ' . __('With its help, you can <strong>configure keywords</strong> for your posts, which will later form the link text for each post.', 'internal-links') .
				'</p><p>' .
				__('You can find the Keyword Editor anytime you edit content (whether pages or posts). It’s located on the <strong>right-hand sidebar</strong> within the editor window.', 'internal-links') .
				'</p><p>' .
				__('In the video, we\'ll show you how to get to the Keyword Editor of a post or page.', 'internal-links') .
				'</p>',

				'video'       => '-y4HTOYNBP0',
			),
			array(
				'title'       => __('Add keywords to your content', 'internal-links'),

				'description' => '<p>' .
				__('With the help of the Keyword Editor, you can <strong>assign keywords to a post</strong>, which it will then use for internal links.', 'internal-links') .
				'</p><p>' .
				__('Add your desired keyword to the appropriate input field and confirm using the Enter key (or by clicking the button).', 'internal-links') .
				'</p><p>' .
				__('You can add your desired keywords one by one or by separating them with commas.', 'internal-links') .
				'</p><p>' .
				__('The video shows an example of how to assign a keyword to a post.', 'internal-links') .
				'</p>',

				'video'       => 'rc9EqywuwCI',
			),
			array(
				'title'       => __('Create smart links with the gap feature', 'internal-links'),

				'description' => '<p>' .
				__('With the help of the intelligent gap feature, you can <strong>diversify your anchor texts</strong> even better.', 'internal-links') . ' ' . __('You can get a more organic link profile and <strong>cover a wider range</strong> of possible links.', 'internal-links') .
				'</p><p>' .
				__('That’s because you no longer just link to well-defined keywords or phrases.', 'internal-links') . ' ' . __('This feature makes it possible to define constant words of a phrase and to <strong>freely create variations</strong> in the gap between them.', 'internal-links') .
				'</p><p>' .
				__('The gap feature can be activated by clicking on the link in the Keyword Editor (below the input field).', 'internal-links') . '</p><p>' .
				__('You have 3 options to define gaps.', 'internal-links') . ' ' . __('Assuming the configured gap value is 3, it behaves in the following ways, depending on the gap type:', 'internal-links') .
				'</p><ul><li>' .
				__('<strong>"Minimal" Type</strong>: A phrase is linked if there are one to three words between the adjacent words.', 'internal-links') . '</li><li>' .
				__('<strong>"Exact" Type</strong>:  A phrase is linked if there are exactly 3 words between the adjacent words.', 'internal-links') . '</li><li>' .
				__('<strong>"Maximum" Type</strong>: A phrase is linked if there are at least 3 or more words between the adjacent words.', 'internal-links') .
				'</li></ul><p>' .
				__('The adjacent words are constant and included in the link.', 'internal-links') . ' ' . __('The gap keywords are variable.', 'internal-links') .
				'</p><p>' .
				__('In the video, you can see an example of how to configure gaps.', 'internal-links'),

				'video'       => '66eCwCiwGbM',
			),
		);

		foreach ($data_container as $data) {
			$this->renderFeatureRow($data);
		}
	}
}
