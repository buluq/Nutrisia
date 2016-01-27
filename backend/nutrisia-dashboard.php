<?php
/**
 * The file that defines settings and administration page for the plugin
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
 * The dashboard page for the plugin.
 *
 * @package Nutrisia
 * @since 0.0.1
 */
class NutrisiaDashboard extends NutrisiaBackend {
	/**
	 * Plugin administration page.
	 *
	 * @since 0.0.1
	 */
	public function createPluginBoard() {

		include plugin_dir_path(dirname(__file__)) . 'backend/nutrisia-view-dashboard.php';
	}

	/**
	 * Add sub menu page to WordPress Plugins menu.
	 *
	 * @since 0.0.1
	 * @param string $page_title The text to be used for page title.
	 * @param string $menu_title The text to be used for menu label.
	 * @param string $capability The capability required for the menu to be displayed.
	 * @param string $menu_slug The unique ID for the menu.
	 * @param callback $function The function to be called to output the content of page.
	 */
	public function addPluginMenu() {
		$this->createOptionMenu(
			'Administrasi Nutrisia',
			'Nutrisia',
			'nutrisia',
			[$this, 'createPluginBoard']
		);
	}

	/**
	 * Register settings for plugin option.
	 *
	 * @since 0.0.1
	 */
	public function registerPluginSettings() {
		$this->createOptionGroup('nutrisia_settings', 'livehelperscript');
		$this->createOptionGroup('nutrisia_settings', 'nutrisia_supportsite');
	}

	/**
	 * Insert the live chat script into footer.
	 */
	public function insertLiveChat() {
		if (get_option('livehelperscript') !== '') {
			echo get_option('livehelperscript');
		}
		else {
			echo '<!-- live chat tidak terpasang -->';
		}
	}
}

/* End of file: nutrisia-dashboard.php */