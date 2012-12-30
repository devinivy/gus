<?php
/*
 * Sanitzer cleans twig vars based upon buckets,
 * 'html', 'attr', 'url', etc.
 *
 */

function sanitize(&$data, $scrubber = 'html') {
        $scrubber .= '_scrubber';
        if (function_exists($scrubber)) {
            array_walk_recursive($data, $scrubber);
        }
}

function html_scrubber(&$item, $key) {
    $item = htmlspecialchars($item, ENT_QUOTES, 'UTF-8');
}

function attr_scrubber(&$item, $key) {
    $item = str_replace('"', '&quot;', $item);
    $item = str_replace('\'', '&#039;', $item);
}

function url_scrubber(&$item, $key) {
    $item = urlencode($item);
}

function weiner_scrubber(&$item, $key) {
    $item = 'weiner';
}


// run of the mill scrubbers
foreach (array('html', 'attr', 'url') as $scrubber) {
    foreach ($twig_vars[$scrubber] as $key => $data) {
        $twig_vars[$key] = $data;
        sanitize($twig_vars[$key], $scrubber);
    }
}


// custom scrubbers w/ san_ prefix
foreach ($twig_vars as $scrubkey => $scrubdata) {
    if (preg_match("/^san_(.+)$/", $scrubkey, $match)) {
        $scrubber = $match[1];
        foreach ($twig_vars[$scrubkey] as $key => $data) {
            $twig_vars[$key] = $data;
            sanitize($twig_vars[$key], $scrubber);
        }
    }
}

// echo "<pre>";
// print_r($twig_vars);
// echo "</pre>";


?>