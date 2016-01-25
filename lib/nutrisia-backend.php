<?php
/**
 * The file that defines admin-spesific functionality of the plugin
 *
 * Copyright 2016 Sunu Haeriadi.
 *
 * This file is part of Nutrisia.
 *
 * Nutrisia is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License,
 * or (at your option) any later version.
 *
 * Nutrisia is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Nutrisia.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @package Nutrisia
 * @since 0.0.1
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and admin-specific hooks.
 *
 * @package Nutrisia
 * @since 0.0.1
 */
class NutrisiaBackend {
	/**
	 * The unique identifier of the plugin.
	 *
	 * @since 0.0.1
	 * @access private
	 * @var string $plugin_name The string used to uniquely identify the plugin.
	 */
	private $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since 0.0.1
	 * @access private
	 * @var string $plugin_version The current version of the plugin.
	 */
	private $plugin_version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $plugin_version The version of this plugin.
	 */
	public function __construct($plugin_name, $plugin_version) {
		$this->plugin_name    = $plugin_name;
		$this->plugin_version = $plugin_version;

		$this->loadDependecies();
	}


	/**
	 * Load the required dependecies for the plugin.
	 *
	 * Include the following files that make up the plugin:
	 * - nutrisia-loader.php for orchestrating the hooks of the plugin,
	 *
	 * @since 0.0.1
	 * @access private
	 */
	private function loadDependecies() {
		/**
		 * The class responsible for plugin administration page.
		 */
		require_once plugin_dir_path(dirname(__file__)) . 'backend/nutrisia-dashboard.php';
	}

	/**
	 * Register plugin settings into WordPress.
	 *
	 * @since 0.0.1
	 * @access protected
	 * @param string $option_group The settings group name.
	 * @param string $option_name The name of option to sanitize and save.
	 * @param callback $function A callback function that sanitize the options.
	 */
	protected function createOptionGroup($option_group, $option_name, $function = '') {
		register_setting($option_group, $option_name, $function);
	}
	
	/**
	 * Add sub menu page to WordPress Plugins menu.
	 *
	 * @since 0.0.1
	 * @access protected
	 * @param string $page_title The text to be used for page title.
	 * @param string $menu_title The text to be used for menu label.
	 * @param string $capability The capability required for the menu to be displayed.
	 * @param string $menu_slug The unique ID for the menu.
	 * @param callback $function The function to be called to output the content of page.
	 */
	protected function createOptionMenu($page_title, $menu_title, $menu_slug, $function = '', $capability = 'manage_options') {
		add_options_page(
			$page_title,
			$menu_title,
			$capability,
			$menu_slug,
			$function
		);
	}

	/**
	 * Create group of settings on the plugin administration page.
	 *
	 * @since 0.0.1
	 * @access protected
	 * @param string $section_id Unique ID for the settings group.
	 * @param string $section_title The text for section title.
	 * @param callback $function Function for the section content.
	 * @param string $page The menu page on which to display the section.
	 */
	protected function createOptionsSection($section_id, $section_title, $function, $page) {

	}
}

/* End of file: nutrisia-backend.php */