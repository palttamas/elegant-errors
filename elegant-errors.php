<?php

/**
 * Provides elegant error messages
 *
 * @package   elegant-errors
 * @link      https://github.com/palttamas/elegant-errors
 * @author    Tamas Pal <tomsdevelopment@gmail.com>
 * @copyright 2023 Tamas Pal
 * @license   MIT
 *
 * Plugin Name:  Elegant Errors
 * Description:  Elegant error messages for WordPress
 * Version:      1.0.0
 * Plugin URI:   https://github.com/palttamas/elegant-errors
 * Author:       Tamas Pal
 * Author URI:   https://github.com/palttamas
 * Text Domain:  elegant-errors
 * Domain Path:  /languages/
 * Requires PHP: 5.5
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files
 * (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'EE_VERSION', '1.0.0' );

$ee_dir = dirname( __FILE__ );

require_once "$ee_dir/vendor/autoload.php";

if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
    return;
}

if ( defined( 'DOING_CRON' ) && DOING_CRON ) {
    return;
}

if( defined('WP_DEBUG_DISPLAY') && WP_DEBUG_DISPLAY === true ) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

