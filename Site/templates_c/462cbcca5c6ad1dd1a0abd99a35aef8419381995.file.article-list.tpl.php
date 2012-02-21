<?php /* Smarty version Smarty-3.1.7, created on 2012-02-21 09:30:30
         compiled from "./templates/article-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:342995404f43aa8621aeb0-46723388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462cbcca5c6ad1dd1a0abd99a35aef8419381995' => 
    array (
      0 => './templates/article-list.tpl',
      1 => 1329497294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342995404f43aa8621aeb0-46723388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Articles' => 0,
    'SiteRoot' => 0,
    'Article' => 0,
    'Pages' => 0,
    'Page' => 0,
    'PageNo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f43aa8634531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f43aa8634531')) {function content_4f43aa8634531($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="content">
  <p>&nbsp;</p>
  <ul class="article">
    <?php  $_smarty_tpl->tpl_vars["Article"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["Article"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["Article"]->key => $_smarty_tpl->tpl_vars["Article"]->value){
$_smarty_tpl->tpl_vars["Article"]->_loop = true;
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SiteRoot']->value;?>
article.php?id=<?php echo $_smarty_tpl->tpl_vars['Article']->value['id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</strong>, <span class="author">by <?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</span></a></li>
    <?php } ?>
  </ul>
  <p>&nbsp;</p>
  <div class="pager">
	<ul>
	  <?php  $_smarty_tpl->tpl_vars["Page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["Page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["Page"]->key => $_smarty_tpl->tpl_vars["Page"]->value){
$_smarty_tpl->tpl_vars["Page"]->_loop = true;
?>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['SiteRoot']->value;?>
index.php?pageno=<?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
&pagesize=10"<?php if ($_smarty_tpl->tpl_vars['Page']->value==$_smarty_tpl->tpl_vars['PageNo']->value){?> class="act"<?php }?>><?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
</a></li>
	  <?php } ?>
	</ul>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>