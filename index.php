<?php
/*
 * Gus - the web app kickstarter
 * 
 * Welcome to the index file! Here you will find 
 * application globals configs and dependencies.
 * 
 */

// Global Configuration
$config = array(
	'app_root' => ".",
	'web_root' => "/~devinivy/gus"
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

/*
 * Twig Vars are variables used in templates,
 * feel free to add to the $twig_vars array
 * 
 */
 
$twig_vars = array(
        
        //paths
	'global' => "{$config['web_root']}",
	'lib' => "{$config['web_root']}/lib",
	'js' => "{$config['web_root']}/js",
	'css' => "{$config['web_root']}/css",
	'img' => "{$config['web_root']}/img",
        
        // scrubbers
        'html' => array(),
        'attr' => array(),
        'url' => array(),
        
        // casting scrubbers
        'int' => array(),
        'bool' => array()
        
);

// get route specific
require_once  "{$config['app_root']}/routing.php";

// sanitize twig vars
require_once  "{$config['app_root']}/sanitizer.php";

// render the template and die
die($twig->render('global.html', $twig_vars));

?>