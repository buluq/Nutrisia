<?php
/**
 * Fired during the plugin uninstalled.
 *
 * When populating this file, consider the following flow of control:
 *
 * - the method should be static,
 * - check if the $_REQUEST content actually is the plugin name,
 * - run an admin referrer check to make sure it goes through authentication,
 * - verify the output of $_GET makes sense
 * - repeat with other user roles (best directly by using the links/query string parameters),
 * - repeat things for multisite (once for a single site in the network, once sitewide)
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

/* If uninstall not called form WordPress, then exit. */
if (!defined('WP_UNINSTALL_PLUGIN')) {
	exit;
}

/* End of file: uninstall.php */