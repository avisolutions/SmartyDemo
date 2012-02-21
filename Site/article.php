<?php
/**
 * Project:	Smarty Extended Application
 * Author:	AVI Solutions <info@avisolutions.com>
 * File:	article.php
 * Version:	1.0
 */
require_once('configs/config.php');
require_once(SMARTY_DIR . 'Smarty.class.php');
require_once(SITE_ROOT_DIR . 'libs/Framework.php');
require_once(SITE_ROOT_DIR . 'libs/BaseClass.php');
require_once('class/article.php');

$articles	=	new Article;
$articles->articleshow();
?>