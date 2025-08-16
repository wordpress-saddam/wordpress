<?php
namespace ILJ\Core\Options;

use ILJ\Helper\Help;
use ILJ\Helper\Options as OptionsHelper;

/**
 * Option: Multi-keyword mode
 *
 * @package ILJ\Core\Options
 * @since   1.1.3
 */
class MultipleKeywords extends AbstractOption {
	
	/**
	 * Get the unique identifier for the option
	 *
	 * @return string
	 */
	public static function getKey() {
		return self::ILJ_OPTIONS_PREFIX . 'multiple_keywords';
	}
	
	/**
	 * Get the default value of the option
	 *
	 * @return bool
	 */
	public static function getDefault() {
		return false;
	}
	
	/**
	 * Get the frontend label for the option
	 *
	 * @return string
	 */
	public function getTitle() {
		return __('Link as often as possible', 'internal-links');
	}
	
	/**
	 * Get the frontend description for the option
	 *
	 * @return string
	 */
	public function getDescription() {
		return __('Allows posts and keywords to get linked as often as possible.', 'internal-links') . Help::getOptionsLink('link-countings/', 'greedy-mode', 'greedy mode') . '<br>' . __('Deactivates all other restrictions', 'internal-links');
	}

	/**
	 * Outputs the options form element for backend administration
	 *
	 * @param  mixed $value
	 * @return mixed
	 */
	public function renderField($value) {
		OptionsHelper::renderToggle($this, $value);
	}

	/**
	 * Checks if a value is a valid value for option
	 *
	 * @param  mixed $value The value that gets validated
	 * @return bool
	 */
	public function isValidValue($value) {
		return 1 === (int) $value || 0 === (int) $value;
	}
}
