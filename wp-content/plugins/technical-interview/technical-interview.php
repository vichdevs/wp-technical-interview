<?php

/*
Plugin Name:    Technical Interview
Plugin URL:     http://technical-interview.dev
Description:    Plugin for the technical interview
Version:        0.1
Author:         James Whayman
Author URI:     http://jameswhayman.com
 */

class TechnicalInterview {
	/**
	 * TechnicalInterview constructor.
	 */
	public function __construct() {
		$includes = [
			'widgets/contact-form.php'
		];

		$this->load_includes( $includes );
		$this->register_actions();
	}

	/**
	 * @param $files
	 */
	public function load_includes( $files ) {
		foreach ( $files as $file ) {
			$path = plugin_dir_path(__FILE__) . $file;

			if (!file_exists($path)) {
				trigger_error(__('File ' . $path . ' could not be found'), E_USER_ERROR);
			}

			require_once($path);
		}
	}

	/**
	 * Register WordPress actions
	 */
	public function register_actions() {

		add_action('widgets_init', [$this, 'register_widgets']);
	}

	/**
	 * Register WordPress widgets
	 */
	public function register_widgets() {

		register_widget('ContactForm');
	}
}

new TechnicalInterview();