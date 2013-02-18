<?php

/**
*
* The launcher for the Awesomebar 
*
**/
function tsc_responsive_initialise_awesomebar(moodle_page $page) {
    $page->requires->yui_module('moodle-theme_tsc_responsive-awesomebar', 'M.theme_tsc_responsive.initAwesomeBar');
}