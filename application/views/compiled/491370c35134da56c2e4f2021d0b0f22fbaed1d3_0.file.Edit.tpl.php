<?php
/* Smarty version 3.1.33, created on 2020-03-12 07:09:16
  from '/var/www/application/views/templates/Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e69e01c0b7318_76316092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491370c35134da56c2e4f2021d0b0f22fbaed1d3' => 
    array (
      0 => '/var/www/application/views/templates/Edit.tpl',
      1 => 1583996948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e69e01c0b7318_76316092 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ja">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/tmp2.css">
  <title>ES Editor</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">ES Editor</a>
    </nav>
  </header>
  <main>
    <div class="Center">
      <p><?php echo $_smarty_tpl->tpl_vars['CompanyName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
      <form method="post" action="/SaveContent">
        <textarea name="Text" rows="18" cols="70"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</textarea><br>
        <input type="submit" class="btn btn-info" name="signup">
      </form>
    </div>
  </main>
<footer>
</footer>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
