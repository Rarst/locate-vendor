<?php

namespace Rarst\Composer;

/**
 * Experimental helper for vendor directory location in Composer
 */
class Locate_Vendor {

	/**
	 * @return string path to vendor directory
	 */
	static function get_vendor_path(  ) {

		return dirname( dirname( __DIR__ ) );
	}

	/**
	 * @param string $package vendor/package
	 *
	 * @return string|bool path to package directory or false
	 */
	static function get_package_path( $package ) {

		$path = self::get_vendor_path() . '/' . $package;

		return file_exists( $path ) ? $path : false;
	}
}