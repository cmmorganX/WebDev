<?php 
function write_log($log, $location = 'debug.log') {
    error_log(print_r($log, true)."\n\r", 3, $location);
}

/**
 * Validate array by making sure that the data we're working with is in fact an array
 * and that the key we're searching for exists
 */
function v_array($needle, $haystack) {
    if(is_array($haystack) && array_key_exists($needle, $haystack)) {
        return $haystack[$needle];
    }

    return 0;
}
?>