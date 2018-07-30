<?php
/**
 * Plugin Name: PWA Kollektion erlaube Json Konfig
 * Description: Erlaubt Json Konfig.
 * Author:      Daniel Bieli
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// security
if (!defined( 'ABSPATH' )) { die( 'Forbidden' ); }

// optimization config path
define('O10N_CONFIG_FILE_PATH', WP_CONTENT_DIR . '/optimization-config/'); // wp-content/optimization-config/

// conditional optimization JSON config proxy
add_action('init', function () {

	$config_dirs = array();

	// AMP pages
	if (is_amp_endpoint()) {

		$config_dirs[] = O10N_CONFIG_FILE_PATH . '/amp/';

	} else {

		// load global config for all pages
		$config_dirs[] = O10N_CONFIG_FILE_PATH . '/global/';

		if (is_page([1,5,19])) {
			$config_dirs[] = O10N_CONFIG_FILE_PATH . '/special-page/';
		} else if (is_page()) {
			$config_dirs[] = O10N_CONFIG_FILE_PATH . '/page/';
		} else if (is_single()) {
			$config_dirs[] = O10N_CONFIG_FILE_PATH . '/post/';
		}

	}

	// walk config directories in defined order
	foreach ($config_dirs as $dir) {

		// read config directory
		$files = new \FilesystemIterator($dir, \FilesystemIterator::SKIP_DOTS);
		foreach ($files as $fileinfo) {

			// verify file
			if (!$fileinfo->isFile() || $fileinfo->getExtension() !== 'json') {
				continue;
			}

			// load config
			\O10n\config(file_get_contents($dir . $fileinfo->getFilename()));
		}
	}

}, 10, 0);
