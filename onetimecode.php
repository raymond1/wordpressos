<?php
/*
Plugin name: ONE TIME CODE
*/

function onetimecode_activate(){
  $test = fopen(__DIR__ . "/activation.log", "w+");
  fwrite($test, __DIR__ . "/activation.log");
  fclose($test);
}

function onetimecode_deactivate(){
  $test = fopen("/home/person/Desktop/programming/wordpress/wp-content/plugins/onetimecode/deactivation.log", "w+");
  fwrite($test, __DIR__);
  fclose($test);
}

function onetimecode_uninstall(){
  $test = fopen("/home/person/Desktop/programming/wordpress/wp-content/plugins/onetimecode/deactivation.log", "w+");
  fwrite($test, "This program was uninstalled.");
  fclose($test);
}

register_uninstall_hook(__FILE__, 'onetimecode_uninstall');
register_activation_hook(__FILE__, 'onetimecode_activate');
register_deactivation_hook( __FILE__, 'onetimecode_deactivate' );
