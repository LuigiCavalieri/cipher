<?php 
/**
 * Plugin Name: Cipher
 * Plugin URI: https://sitetreeplugin.com/blog/cipher/
 * Description: Cipher allows commenters to publish (pre-formatted) code.
 * Version: 1.2.2
 * Author: Luigi Cavalieri
 * Author URI: http://luigicavalieri.com
 * License: GPL v3.0
 * License URI: https://opensource.org/licenses/GPL-3.0
 * 
 * 
 * @package Cipher
 * @version 1.2.2
 * @copyright Copyright 2020 Luigi Cavalieri.
 * @license https://opensource.org/licenses/GPL-3.0 GPL v3.0
 * 
 * 
 * Copyright 2020 Luigi Cavalieri.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ************************************************************************* */


if ( defined( 'ABSPATH' ) ) {
	include( 'library/plugin.class.php' );
	include( 'core/cipher.class.php' );

	Cipher::launch( __FILE__ );
}

?>