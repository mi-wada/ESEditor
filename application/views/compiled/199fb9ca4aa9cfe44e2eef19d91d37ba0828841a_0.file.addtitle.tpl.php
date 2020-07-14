<?php
/* Smarty version 3.1.33, created on 2020-07-13 06:56:11
  from '/var/www/application/views/templates/addtitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c058ba94224_69266504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '199fb9ca4aa9cfe44e2eef19d91d37ba0828841a' => 
    array (
      0 => '/var/www/application/views/templates/addtitle.tpl',
      1 => 1584423706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c058ba94224_69266504 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ja">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/ES.css">
  <title>ES Editor</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/home">ES Editor</a>
      <form class="RightWhite" method="post" action="/signout">
        <p class="FormAdjust">
          <input type="submit" name="signout" class="btn btn-info" value = "Sign out">
        </p>
      </form>
    </nav>
  </header>
  <main>
    <form class="Center" method="post" action="/saveTitle">
      <p><?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
</p>
      <p><input type="text" name="title" placeholder="タイトルを入力"></p>
      <p><input type="number" name="character_limit" placeholder="文字制限を入力"></p>
      <input type="submit" class="btn btn-info" name="signup">
    </form>
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
