<?php /* Smarty version Smarty-3.1.7, created on 2012-02-21 06:20:59
         compiled from "./templates/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5086725844f437e1b3c0cc4-05071553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8cadff64b65c98c52f0bac33a4fd0c3cb02a05' => 
    array (
      0 => './templates/article.tpl',
      1 => 1329496370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5086725844f437e1b3c0cc4-05071553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SiteRoot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f437e1b47dfe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f437e1b47dfe')) {function content_4f437e1b47dfe($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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