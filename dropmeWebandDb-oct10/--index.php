<?php
ob_start();
/**
 * The directory in which your application specific resources are located.
 * The application directory must contain the bootstrap.php file.
 * @link http://kohanaframework.org/guide/about.install#application
 */
//To check the folder exists

//Local
$domainname = "";
//Live
/*$urlSegments = parse_url($_SERVER["SERVER_NAME"]);
$urlHostSegments = explode('.', $urlSegments['path']);
if(count($urlHostSegments) > 2) {
	$domainname = str_replace("-","_",$urlHostSegments[0]);
}*/
if(is_dir($domainname)){
	$filename = $domainname.'/';
}else{
	$filename = '';
}
$application = $filename.'application';

/**
 * The directory in which your modules are located.
 *
 * @link http://kohanaframework.org/guide/about.install#modules
 */
$modules = $filename.'modules';

/**
 * The directory in which the Kohana resources are located. The system
 * directory must contain the classes/kohana.php file.
 *
 * @link http://kohanaframework.org/guide/about.install#system
 */
$system = 'system';
$domainname='loadtest';
$customlangpath= 'public'.DIRECTORY_SEPARATOR.$domainname;

define(SUBDOMAIN_NAME, $domainname);
/**
 * The default extension of resource files. If you change this, all resources
 * must be renamed to use the new extension.
 *
 * @link http://kohanaframework.org/guide/about.install#ext
 */
define('EXT', '.php');

/**
 * Set the PHP error reporting level. If you set this in php.ini, you remove this.
 * @link http://www.php.net/manual/errorfunc.configuration#ini.error-reporting
 *
 * When developing your application, it is highly recommended to enable notices
 * and strict warnings. Enable them by using: E_ALL | E_STRICT
 *
 * In a production environment, it is safe to ignore notices and strict warnings.
 * Disable them by using: E_ALL ^ E_NOTICE
 *
 * When using a legacy application with PHP >= 5.3, it is recommended to disable
 * deprecated notices. Disable with: E_ALL & ~E_DEPRECATED
 */
ini_set('display_errors', 'On');

# Error reporting may look like this but E_ALL is only what we need
error_reporting(E_ALL | E_STRICT);

/**
 * End of standard configuration! Changing any of the code below should only be
 * attempted by those with a working knowledge of Kohana internals.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 */

// Set the full path to the docroot
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

// Make the application relative to the docroot, for symlink'd index.php
if ( ! is_dir($application) AND is_dir(DOCROOT.$application))
	$application = DOCROOT.$application;

// Make the modules relative to the docroot, for symlink'd index.php
if ( ! is_dir($modules) AND is_dir(DOCROOT.$modules))
	$modules = DOCROOT.$modules;

// Make the system relative to the docroot, for symlink'd index.php
if ( ! is_dir($system) AND is_dir(DOCROOT.$system))
	$system = DOCROOT.$system;
// Make the system relative to the docroot, for symlink'd index.php
if ( ! is_dir($customlangpath) AND is_dir(DOCROOT.$customlangpath))
	$customlangpath = DOCROOT.$customlangpath;
// Define the absolute paths for configured directories
define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
define('MODPATH', realpath($modules).DIRECTORY_SEPARATOR);
define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);
define('CUSTOMLANGPATH', realpath($customlangpath).DIRECTORY_SEPARATOR);

// Clean up the configuration vars
unset($application, $modules, $system);

if (file_exists('install'.EXT))
{
	// Load the installation check
	return include 'install'.EXT;
}

/**
 * Define the start time of the application, used for profiling.
 */
if ( ! defined('KOHANA_START_TIME'))
{
	define('KOHANA_START_TIME', microtime(TRUE));
}

/**
 * Define the memory usage at the start of the application, used for profiling.
 */
if ( ! defined('KOHANA_START_MEMORY'))
{
	define('KOHANA_START_MEMORY', memory_get_usage());
}

// Bootstrap the application
require APPPATH.'bootstrap'.EXT;

/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
 
#LAMP 7.0 Supported purpose we are added try catch method here
try{
echo Request::factory()
	->execute()
	->send_headers(TRUE)
	->body();
}
 catch (Error $e) //  php7 Throwable
{
    throw new ErrorException($e->getMessage(), $e->getCode(), 0, $e->getFile(), $e->getLine());
}
	
	
