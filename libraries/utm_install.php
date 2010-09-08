<?php
/**
 * UTM - Install
 *
 * @author	   John Etherton
 * @package	   UTM
 */

class Utm_Install {

	/**
	 * Constructor to load the shared database library
	 */
	public function __construct()
	{
		$this->db = Database::instance();
	}

	/**
	 * Creates the required database tables for the actionable plugin
	 */
	public function run_install()
	{
		// We don't realy have any stuff to do here
	}

	/**
	 * Deletes the database tables for the actionable module
	 */
	public function uninstall()
	{
		// We don't realy have any stuff to do here
	}
}