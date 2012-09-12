<?php

// grab path from script
$web_app_suffix = str_replace("/index.php", "", $_SERVER['SCRIPT_NAME']);

// determine route
$route = str_replace("$web_app_suffix/", "", $_SERVER['REDIRECT_SCRIPT_URL']);

// starting looking for a defined route
switch($route) {
	
	// home (or nothing)
	default:
	case 'home':
		
		// set the title of the page
		$twig_vars['title'] = "Home Page";
		
		// set the template
		$twig_vars['route_template'] = "home.html";
		
		
	break;
	
	// route example
	case "example":
		
		// set the title of the page
		$twig_vars['title'] = "Example Routing Page";
		
		// set the template
		$twig_vars['route_template'] = "example.html";
		
	break;
	
}

?>