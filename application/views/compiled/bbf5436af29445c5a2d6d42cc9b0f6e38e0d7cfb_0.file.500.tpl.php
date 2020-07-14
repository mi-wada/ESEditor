<?php
/* Smarty version 3.1.33, created on 2019-06-13 11:41:38
  from '/var/www/application/views/templates/error/500.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d023672a00626_58697704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf5436af29445c5a2d6d42cc9b0f6e38e0d7cfb' => 
    array (
      0 => '/var/www/application/views/templates/error/500.tpl',
      1 => 1560172077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d023672a00626_58697704 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>500 Internal Server Error</title>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['show_trace']->value) {?>
  <pre><?php echo $_smarty_tpl->tpl_vars['trace']->value;?>
</pre>
<?php }?>
</body>
</html>
<?php }
}
