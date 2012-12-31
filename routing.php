<?php

// grab path
$page_path = explode('/', $_GET['page']);

// determine route from path
$route = $page_path[0];

// starting looking for a defined route
switch($route) {
	
	// home (or nothing)
	default:
	case 'home':
		
		// set the title of the page
		$twig_vars['title'] = "Home Page";
		
		// set the template
		$twig_vars['route_template'] = "home.html";
		$twig_vars['int']['name'] = array("0", 0, array("10 dogs"));
		
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