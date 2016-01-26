<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions
 * used across the plugin.
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
 * The core plugin class.
 *
 * This is used to define hooks and internationalization, maintain the unique
 * identifier of the plugin as well as the current version of the plugin.
 *
 * @package Nutrisia
 * @since 0.0.1
 */
class NutrisiaCore {
	/**
	 * The loader that is responsible for maintaining and registering all hooks
	 * that power the plugin.
	 *
	 * @since 0.0.1
	 * @access protected
	 * @var NutrisiaLoader $loader Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of the plugin.
	 *
	 * @since 0.0.1
	 * @access protected
	 * @var string $plugin_name The string used to uniquely identify the plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since 0.0.1
	 * @access protected
	 * @var string $plugin_version The current version of the plugin.
	 */
	protected $plugin_version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and version that can be used througout the plugin.
	 * Load the dependecies, define the locale, and set the hooks.
	 *
	 * @since 0.0.1
	 */
	public function __construct() {
		$this->plugin_name    = 'nutrisia';
		$this->plugin_version = '0.0.1';

		$this->loadDependecies();
		$this->setPluginLocale();
		$this->defineBackendHooks();
		$this->defineFrontendHooks();
	}

	/**
	 * Register all of the hooks related to the administration area functionality.
	 *
	 * @since 0.0.1
	 * @access private
	 */
	private function defineBackendHooks() {
		$backend   = new NutrisiaBackend($this->getPluginName(), $this->getPluginVersion());
		$dashboard = new NutrisiaDashboard($this->getPluginName(), $this->getPluginVersion());

		$this->loader->addAction('admin_init', $dashboard, 'registerPluginSettings');
		$this->loader->addAction('admin_menu', $dashboard, 'addPluginMenu');
		$this->loader->addAction('wp_footer', $dashboard, 'insertLiveChat', 100);
	}

	/**
	 * Register all of the hooks related to frontend functionality of the plugin.
	 *
	 * @since 0.0.1
	 * @access private
	 */
	private function defineFrontendHooks() {
		$frontend = new NutrisiaFrontend($this->getPluginName(), $this->getPluginVersion());
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
		 * The class responsible for orchestrating the actions and filters of
		 * the core plugin.
		 */
		require_once plugin_dir_path(dirname(__file__)) . 'lib/nutrisia-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path(dirname(__file__)) . 'lib/nutrisia-i18n.php';

		/**
		 * The class responsible for defining all actions for backend.
		 */
		require_once plugin_dir_path(dirname(__file__)) . 'lib/nutrisia-backend.php';

		/**
		 * The class responsible for defining all actions for frontend.
		 */
		require_once plugin_dir_path(dirname(__file__)) . 'lib/nutrisia-frontend.php';

		$this->loader = new NutrisiaLoader();
	}

	/**
	 * Define the locale for the plugin for internationalization.
	 *
	 * Uses the NutrisiaI18n class in order to set the domain
	 * and to register the hook with WordPress.
	 *
	 * @since    0.0.1
	 * @access   private
	 */
	private function setPluginLocale() {
		$locale = new NutrisiaI18n();
		$this->loader->addAction('plugins_loaded', $locale, 'loadPluginTextdomain');
	}


	/**
	 * Run the loader to execute all of the hooks.
	 *
	 * @since 0.0.1
	 */
	public function executePlugin() {
		$this->loader->run();
	}

	/**
	 * The reference to the class that orchestrates the hooks.
	 *
	 * @since 0.0.1
	 * @return NutrisiaLoader Orchestrates the hooks of the plugin.
	 */
	public function getPluginLoader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since 0.0.1
	 * @return string The name of the plugin.
	 */
	public function getPluginName() {
		return $this->plugin_name;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since 0.0.1
	 * @return string The version number of the plugin.
	 */
	public function getPluginVersion() {
		return $this->plugin_version;
	}
}

/* End of file: nutrisia-core.php */