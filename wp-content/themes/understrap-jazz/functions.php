<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
 * Understrap-Jazz functions and definitions
 *
 * @package understrap
 */



$jazz_includes = array(
    '/jazz-walker.php',                  // Custom walker for menu.
    '/jazz-enqueue.php',                      // Enqueue scripts and styles.
);

foreach ($jazz_includes as $file) {
    $filepath = locate_template('inc' . $file);
    if (!$filepath) {
        trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}
