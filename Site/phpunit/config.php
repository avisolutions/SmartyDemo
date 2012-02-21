<?php
/**
 * Project:	Smarty Extended Application
 * Author:	AVI Solutions <info@avisolutions.com> 
 * File:	configs/config.php
 * Version:	1.0
 * Usage:	This file invokes Framework. Therefore this file should be inluded in each php site pages.
 */

/* Site Folder Path Related Constants */
define('SITE_ROOT_DIR',				'../');
define('SMARTY_DIR',				SITE_ROOT_DIR		.	'libs/smarty/');
define('CONFIG_DIR',				SITE_ROOT_DIR		.	'configs/');
define('CONFIG_FILE',				CONFIG_DIR			.	'config.php');
define('TEMPLATE_DIR',				SITE_ROOT_DIR		.	'templates');
define('COMPILE_DIR',				SITE_ROOT_DIR		.	'templates_c');
define('CACHE_DIR',					SITE_ROOT_DIR		.	'caches');

/* Site Related Constants */
define('SITE_ROOT',					'/SmartyTest/');
define('SITE_DOCUMENT_DIR',			'/AVI/SmartyTest/');
define('SITE_TITLE',				'AVI Web Solutions PVT LTD : Smarty Test Site');

/* Database Related Constants */
define('DB_TYPE',				'mysql');
define('DB_HOST',				'localhost');
define('DB_USER',				'root');
define('DB_PASSWORD',			'#ru5ret9u');
define('DB_NAME',				'avi_smarty_test');
?>
