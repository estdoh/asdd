<?php
// Version
define('VERSION', '2.3.0.2');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Installerr
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');