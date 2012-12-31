<?php
/*
 * sanitzer cleans twig vars based upon buckets,
 * 'html', 'attr', etc. corr. $twig_vars['html'], $twig_vars['attr'], etc.
 *
 * e.g. the variable $twig_vars['html']['name'] will
 *      get scrubbed for html output and placed into $twig_vars['name']
 *
 * current buckets: html, attr, url, int, bool
 *
 * custom buckets/scrubbers may be defined below.  use bucket prefix 'scrub_'.
 * e.g. variables in the $twig_vars['scrub_null'] bucket will be scrubbed by function null_scrubber
 * 
 */

 
// let sanitize run the show!
function sanitize(&$data, $scrubber = 'html') {
        $scrubber .= '_scrubber';
        if (function_exists($scrubber)) {
            if (is_array($data)) {
                array_walk_recursive($data, $scrubber);
            } else {
                $scrubber($data, false);
            }
        }
}

// three everyday scrubbers for html, attribute, and url escaping
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

// some casting scrubbers
function int_scrubber(&$item, $key) {
    $item = (int)$item;
}

function bool_scrubber(&$item, $key) {
    $item = (bool)$item;
}

// define custom scrubbers below
function null_scrubber(&$item, $key) {
    $item = NULL;
}

// end of scrubber definitions... let's scrub!



// apply run of the mill scrubbers
foreach (array('html', 'attr', 'url', 'int', 'bool') as $scrubber) {
    foreach ($twig_vars[$scrubber] as $key => $data) {
        $twig_vars[$key] = $data;
        sanitize($twig_vars[$key], $scrubber);
    }
}

// apply custom scrubbers w/ scrub_ prefix
foreach ($twig_vars as $scrubkey => $scrubdata) {
    if (preg_match("/^scrub_(.+)$/", $scrubkey, $match)) {
        $scrubber = $match[1];
        foreach ($twig_vars[$scrubkey] as $key => $data) {
            $twig_vars[$key] = $data;
            sanitize($twig_vars[$key], $scrubber);
        }
    }
}

/*
echo "<pre>";
print_r($twig_vars);
echo "</pre>";
*/

?>
