<?php
/**
 * The file that defines frontend-spesific functionality of the plugin
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
 * The frontend-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and frontend-specific hooks.
 *
 * @package Nutrisia
 * @since 0.0.1
 */
class NutrisiaFrontend {
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
		require_once plugin_dir_path(dirname(__file__)) . 'frontend/widget/nutrisia-shop-contact.php';
	}
}

/* End of file: nutrisia-frontend.php */
