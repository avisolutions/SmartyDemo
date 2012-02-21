<?php
/**
 * Project:	Smarty Extended Application
 * Author:	AVI Solutions <info@avisolutions.com>
 * File:	libs/Framework.php
 * Version:	1.0
 * Usage:	This file invokes Framework. Therefore this file should be inluded in each php site pages.
 */
// require_once('../libs/smarty/Smarty.class.php');
 
// Framework configuration
class Framework extends Smarty {
    public function __construct() {
      parent::__construct();
	  
      $this->config_dir		=	CONFIG_DIR;
      $this->cache_dir		=	CACHE_DIR;
	  
	  $this->template_dir	=	TEMPLATE_DIR;
	  $this->compile_dir	=	COMPILE_DIR;
    }
}
?>