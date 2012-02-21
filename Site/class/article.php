<?php
/**
 * Project:	Smarty Extended Application
 * Author:	AVI Solutions <info@avisolutions.com>
 * File:	class/article.php
 * Version:	1.0
 */

class Article extends BaseClass
{
	public function show()
	{
		$this->PageSize				=	((isset($_REQUEST["pagesize"]) && trim($_REQUEST["pagesize"]) != "") ? intval($_REQUEST["pagesize"]) : 10);
		$this->PageNo				=	1;
		
		if (isset($_REQUEST["pageno"]) && trim($_REQUEST["pageno"]) != "")
			$this->PageNo			=	intval($_REQUEST["pageno"]);
		
		$this->StartRow				=	(int)((($this->PageNo < 1 ? 1 : $this->PageNo) - 1) * $this->PageSize);
		
		$this->Smarty->assign("PageNo",		$this->PageNo);
		$this->Smarty->assign("PageSize",	$this->PageSize);
		$this->Smarty->assign("Articles",	$this->getWithPaging());
		$this->Smarty->assign("Pages",		$this->getPagination());
		$this->Smarty->assign("PageCount",	$this->PageCount);
		$this->Smarty->display("article-list.tpl");
	}
	
	public function articleshow()
	{
		$this->Smarty->display("article.tpl");
	}
	
	public function getWithPaging()
	{
		
		$data						=	NULL;
		$query						=	"SELECT SQL_CALC_FOUND_ROWS A.*,
											B.`full_name` AS `author_name`
										 FROM `tbl_article` A
										 	LEFT JOIN `tbl_author` B
												ON A.`author_id` = B.`id`";
		$orderby					=	"ORDER BY A.`created_on` DESC";
		if ($this->PageNo > -1)
			$orderby				.=	" LIMIT " . $this->StartRow . ", " . $this->PageSize;
		
		$this->DBUtil->query("SET NAMES 'utf8'");
		$PDOQuery					=	$this->DBUtil->query($query . " " .$orderby);
		$this->TotalRows			=	(int)$this->DBUtil->query("SELECT FOUND_ROWS()")->fetchColumn();
		$this->PageCount			=	ceil($this->TotalRows / $this->PageSize);
		$this->EndRow				=	($this->StartRow + $this->PageSize > $this->TotalRows ? $this->TotalRows : $this->StartRow + $this->PageSize);
		$this->StartRow				=	$this->StartRow + 1;
		foreach($PDOQuery as $row)
			$data[]					=	$row;
		
		return $data;
	}
}
?>