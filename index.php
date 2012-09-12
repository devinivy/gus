<?php
/*/
 * Gus - the web app kickstarter
 * 
 * Welcome to the index file! Here you will find 
 * application globals configs and dependencies.
 * 
 */

// Global Configuration
$config = array(
	'app_root' => "/home/maxfelker/core/httpdocs/gus",
	'web_root' => "http://{$_SERVER['HTTP_HOST']}/gus"
);

// Require Twig Dependencies
require_once "{$config['app_root']}/lib/Twig/Autoloader.php";
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem("{$config['app_root']}/templates/");

// Build Twig object and set some environment variables
$twig = new Twig_Environment($loader, array(
    'cache' => "{$config['app_root']}/templates/cache/",
    'debug' => true
));

/*/
 * Twig Vars are variables used in templates,
 * feel free to add to the $twig_vars array
 * 
 */
 
$twig_vars = array(
	'global' => "{$config['web_root']}",
	'lib' => "{$config['web_root']}/lib",
);

// Get route specific
require_once  "{$config['app_root']}/routing.php";

// render the template and die
die($twig->render('global.html', $twig_vars));

?>