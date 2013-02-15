<?php

/**
 * Settings for the bootstrap theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    	
	$name = 'theme_tsc_responsive/enablejquery';
    $title = get_string('enablejquery','theme_tsc_responsive');
    $description = get_string('enablejquerydesc', 'theme_tsc_responsive');
    $default = 1;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
     
    $name = 'theme_tsc_responsive/gakey';
	$title = get_string('gakey','theme_tsc_responsive');
	$description = get_string('gakeydesc', 'theme_tsc_responsive');
	$setting = new admin_setting_configtext($name, $title, $description, '');
	$settings->add($setting);
    
    // Use Awesomebar
    $name = 'theme_tsc_responsive/useawesomebar';
    $title = get_string('useawesomebar','theme_tsc_responsive');
    $description = get_string('useawesomebardesc', 'theme_tsc_responsive');
    $default = 1;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);	
	
	// Hide Settings block
    $name = 'theme_tsc_responsive/hidesettingsblock';
    $title = get_string('hidesettingsblock','theme_tsc_responsive');
    $description = get_string('hidesettingsblockdesc', 'theme_tsc_responsive');
    $default = 1;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Hide Navigation block
    $name = 'theme_tsc_responsive/hidenavigationblock';
    $title = get_string('hidenavigationblock','theme_tsc_responsive');
    $description = get_string('hidenavigationblockdesc', 'theme_tsc_responsive');
    $default = 1;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    


}