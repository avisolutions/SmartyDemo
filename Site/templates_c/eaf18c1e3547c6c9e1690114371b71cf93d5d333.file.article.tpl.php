<?php /* Smarty version Smarty-3.1.7, created on 2012-02-21 07:37:01
         compiled from "../templates/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16442903034f438fed3db766-15699324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaf18c1e3547c6c9e1690114371b71cf93d5d333' => 
    array (
      0 => '../templates/article.tpl',
      1 => 1329496370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16442903034f438fed3db766-15699324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SiteRoot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f438fed51b0a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f438fed51b0a')) {function content_4f438fed51b0a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="content">
  <p>&nbsp;</p>
  <h1>Article goes here....</h1>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a href="<?php echo $_smarty_tpl->tpl_vars['SiteRoot']->value;?>
">Go back to List</a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>