<?php /* Smarty version Smarty-3.1.7, created on 2012-02-17 22:02:51
         compiled from "./templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119114f3e801a8b33f3-52030273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f796f05812d9c2fea127ad94f8a7d7107795dd4b' => 
    array (
      0 => './templates\\article.tpl',
      1 => 1329496370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119114f3e801a8b33f3-52030273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f3e801a8f4eb',
  'variables' => 
  array (
    'SiteRoot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3e801a8f4eb')) {function content_4f3e801a8f4eb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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