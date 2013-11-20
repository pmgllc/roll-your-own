<?php
/*
Plugin Name: Roll Your Own
Plugin URI: http://www.petersenmediagroup.com/plugins/
Description: Adds a theme-dependent area to add functions that must be
preserved if the theme is changed (i.e., CPTs).
Version: 1.0.0
Author: Jesse Petersen
Author URI: http://www.petersenmediagroup.com

	Copyright 2013 Jesse Petersen

	Limit of liability: Installation and use of this plugin acknowledges the
 	understanding that this program alters WordPress and adds
 	settings to the WordPress database. The author is not responsible for any
 	damages or loss of data that might possibly be incurred through the
 	installation or use of the plugin.

 	Support: This is a free plugin, therefore support is limited to bugs that
 	affect all installations. Requests of any other nature will be at the
 	discretion of the plugin author to add or modify the code to account for
 	various installations, servers, or plugin conflicts.

 	Licenced under the GNU GPL:	
 	
 	This program is free software; you can redistribute it and/or modify
 	it under the terms of the GNU General Public License as published by
 	the Free Software Foundation; either version 2 of the License, or
 	(at your option) any later version.	
 	
 	This program is distributed in the hope that it will be useful,
 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 	GNU General Public License for more details.	
 	
 	You should have received a copy of the GNU General Public License
 	along with this program; if not, write to the Free Software
 	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// Start up the engine
class Roll_Your_Own
{

	/**
	 * Static property to hold the singleton instance
	 *
	 * @return Roll_Your_Own
	 */
	static $instance = false;

	/**
	 * If an instance exists, this returns it.  If not, it creates one and
	 * returns it.
	 *
	 * @return Roll_Your_Own
	 */

	public static function getInstance() {
		if ( !self::$instance )
			self::$instance = new self;
		return self::$instance;
	}

	/**
	 * This is the constructor
	 *
	 * @return Roll_Your_Own
	 */
	private function __construct() {

/**
 * Add theme-independent (theme agnostic) functions in this block
*/

// PUT STUFF HERE
// PUT STUFF HERE
// PUT STUFF HERE
// PUT STUFF HERE

/**
 * End functions block
 */		
	}

/// end class
}

// Instantiate the class
$Roll_Your_Own = Roll_Your_Own::getInstance();