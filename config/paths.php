<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * These defines should only be edited if you have cake installed in
 * a directory layout other than the way it is distributed.
 * When using custom settings be sure to use the DS and do not add a trailing DS.
 */

/**
 * The full path to the directory which holds "src", WITHOUT a trailing DS.
 */
define('ROOT', dirname(__DIR__));

/**
 * The actual directory name for the application directory. Normally
 * named 'src'.
 */
define('APP_DIR', 'src');

/**
 * Path to the application's directory.
 */
define('APP', ROOT . DS . APP_DIR . DS);

/**
 * Path to the config directory.
 */
define('CONFIG', ROOT . DS . 'config' . DS);

/**
 * File path to the webroot directory.
 */
define('WWW_ROOT', ROOT . DS . 'webroot' . DS);

/**
 * Path to the tests directory.
 */
define('TESTS', ROOT . DS . 'tests' . DS);

/**
 * Path to the temporary files directory.
 */
define('TMP', ROOT . DS . 'tmp' . DS);

/**
 * Path to the logs directory.
 */
define('LOGS', ROOT . DS . 'logs' . DS);

/**
 * Path to the cache files directory. It can be shared between hosts in a multi-server setup.
 */
define('CACHE', TMP . 'cache' . DS);

/**
 * The absolute path to the "cake" directory, WITHOUT a trailing DS.
 *
 * CakePHP should always be installed with composer, so look there.
 */
define('CAKE_CORE_INCLUDE_PATH', ROOT . DS . 'vendor' . DS . 'cakephp' . DS . 'cakephp');

/**
 * Path to the cake directory.
 */
define('CORE_PATH', CAKE_CORE_INCLUDE_PATH . DS);
define('CAKE', CORE_PATH . 'src' . DS);

/**
 * CORE API Keys
 * API Keys
 */
define('GOOGLE_MAP_KEY', 'AIzaSyDH_jo-Tr08tfAcNliOZVjE0hU8JAS2I6A');

/**
 * STATIC dummy TEXTS
 * Static dummy texts
 */
define('DUMMY_SUBHEAD_SMALL', 'Package Name');
define('DUMMY_SUBHEAD_DESCRIPTION', '(4 Days 4 Nights)');
define('DUMMY_TEXT_LONG', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English.');


/* base url*/
define('BASE_URL','http://seeingo.com/');
/**
 * Project related Constant texts
 * home page
 */
define('HOME_START_PLANNING_SUBTEXT', 'Define your own CONTOURS');
define('HOME_START_PLANNING_MAINTEXT', 'Moods');
define('HOME_TRIP_BY_MONTH', 'TRIP BY MONTH');
define('HOME_TRIP_BY_MONTH_SUBTEXT', 'Travel-o-Pedia');
define('HOME_DESTINATIONS_HEAD', 'Destinations');
define('HOME_DESTINATIONS_TEXT', 'Destination Search');
define('HOME_BEST_OFFER', 'Best offer');
define('HOME_BEST_OFFER_TEXT', 'Contrary to popular belief, Lorem Ipsum is not simply random text.<br/> It has roots in a piece of classical Latin');
define('HOME_FILL_FORM', 'Fill form below and we will get in touch with you');
define('HOME_CALL_TEXT', 'Give us a call or visit our office here');
define('HOME_OFFICE_ADDRESS', 'Plot No 9, 1st Floor Amberhai Extension<br/>Dwarka Sector 19, Delhi 110075');
define('HOME_LANDLINE', '+91-11-47114711');
define('HOME_EMAIL', 'support@seeingo.com');
define('HOME_LATITUDE','28.586069');
define('HOME_LONGITUDE','77.048723');

/**
 * EMAIL details
 * Email constants
 */
define('EMAIL_TO', 'support@seeingo.com');
//define('EMAIL_TO', 'chilly5476@gmail.com');
define('EMAIL_SUBJECT', 'messaged from Seeingo website');
define('EMAIL_REPLY_TO', 'support@seeingo.com');
define('EMAIL_CC', 'creativity@seeingo.com');
//define('EMAIL_CC', 'chilly5476@hotmail.com');

