<?php
/**
 * The Nutrisia Plugin
 *
 * Nutrisia is a WordPress plugin to enhance the functionality of
 * Java Multi Mandiri websites.
 *
 * Plugin Name: Nutrisia
 * Description: WordPress plugin for Java Multi Mandiri websites.
 * Version:     0.0.1
 * Author:      CV. Java Multi Mandiri
 * Author URI:  http://www.jvm.co.id
 * License:     GPLv3+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: nutrisia
 * Domain Path: /lang
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

/* Exit if accessed directly */
if (!defined('WPINC')) {
	exit;
}

/**
 * The code that runs during plugin activation.
 */
function activateNutrisia() {
	require_once plugin_dir_path(__file__) . 'lib/nutrisia-activator.php';
	NutrisiaActivator::activatePlugin();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivateNutrisia() {
	require_once plugin_dir_path(__file__) . 'lib/nutrisia-activator.php';
	NutrisiaActivator::deactivatePlugin();
}

/*
 * Registering activation and deactivation hooks.
 */
register_activation_hook(__file__, 'activateNutrisia');
register_deactivation_hook(__file__, 'deactivateNutrisia');

/**
 * The core plugin class that used to define plugin information, hooks, etc.
 */
require plugin_dir_path(__file__) . 'lib/nutrisia-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * the kicking off the plugin from this point in the file
 * does not affect the page life cycle.
 */
function executeNutrisia() {
	$nutrisia = new NutrisiaCore();
	$nutrisia->executePlugin();
}

executeNutrisia();

/* Enf of file: nutrisia.php */