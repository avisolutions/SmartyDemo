<?php
require_once('config.php');
require_once(SMARTY_DIR . 'Smarty.class.php');
require_once(SITE_ROOT_DIR . 'libs/Framework.php');
require_once(SITE_ROOT_DIR . 'libs/BaseClass.php');
require_once('../class/article.php');


class ArticleTest extends PHPUnit_Framework_TestCase  
{  
  public function setUp(){ }  
  public function tearDown(){ }  
  public function testConnectionIsValid()  
  {  
    // test to ensure that the object from an fsockopen is valid  
    $oArticle = new Article();
    $this->assertTrue($oArticle->show() !== false);  
    $this->assertTrue($oArticle->articleshow() !== false);  
    $this->assertTrue($oArticle->getWithPaging() !== false);  
  }  
}
?>
