<?php
/**
 * Project: Smarty Extended Application
 * Author: 	AVI Solutions <info@avisolutions.com>
 * File: 	libs/BaseClass.php
 * Version: 1.0
 */

/**
 * Base Class
 */
class BaseClass
{
	/* Protected Variables */
	protected $aProperties	=	array();
	
	public function __get($Property)
	{
		return array_key_exists($Property, $this->aProperties) ? $this->aProperties[$Property] : NULL;
	}
	
	public function __set($Property, $Value)
	{
		$this->aProperties[$Property] = $Value;
	}
	  
	/* Class construct */
	public function __construct()
	{
		try
		{
			$this->DBDNS				=	DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=UTF-8";
			
			$this->Smarty				=	new Framework();
			$this->Smarty->debugging	=	false;
			$this->Smarty->caching		=	false;
	
			$this->DBUtil				=	new PDO($this->DBDNS, DB_USER, DB_PASSWORD);
		
			$this->SiteURL				=	SITE_URL;
			$this->SiteRoot				=	SITE_ROOT;
			
			foreach($this->aProperties as $propertyName => $propertyValue)
				$this->Smarty->assign($propertyName, $propertyValue);
				
		}
		catch (PDOException $ex)
		{
      		print "Error!: " . $ex->getMessage();
      		die();
		}
		
	}
	
	/* Class destructor */
    public function __destruct()
    {
		
    }
	
	public function Redirect($RedirectURL)
	{
		header("Location: " . $RedirectURL);
	}
	
	public function getPagination()
	{
		$Pages				=	array();
		$intCurrentPage		=	$this->PageNo;
		$intTotalPages		=	$this->PageCount;
		$intStartPage		=	($this->PageNo <= 5 ? 1 : $this->PageNo - 5);
		$intEndPage			=	($this->PageNo + 5 > $this->PageCount ? $this->PageCount : $this->PageNo + 5);
		
		if ($intCurrentPage > 5)
			$intStartPage	= ($intCurrentPage + 5 >= $intTotalPages ? $intTotalPages - 10 : $intCurrentPage - 5);
		$intEndPage			=	$intStartPage + 10;

		if ($intEndPage > $intTotalPages)
			$intEndPage 	= $intTotalPages;
			
		for ($intI = $intStartPage; $intI <= $intEndPage; $intI++)
			$Pages[]		=	$intI;
		
		return $Pages;
	}
}
?>