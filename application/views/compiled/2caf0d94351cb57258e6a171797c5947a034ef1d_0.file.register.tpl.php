<?php
/* Smarty version 3.1.33, created on 2020-06-12 11:50:30
  from '/var/www/application/views/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee36c066a20e5_97667683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2caf0d94351cb57258e6a171797c5947a034ef1d' => 
    array (
      0 => '/var/www/application/views/templates/register.tpl',
      1 => 1584423505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee36c066a20e5_97667683 (Smarty_Internal_Template $_smarty_tpl) {
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
          <a class="navbar-brand" href="/">ES Editor</a>
      </nav>
    </header>
    <main>
      <form class="Center" method="post" action="/signup">
        <p>会員登録</p>
        <p><input type="id" name="id" placeholder="ID"></p>
        <p><input type="password" name="password" placeholder="PASSWORD"></p>
        <p><input type="password" name="passwordcheck" placeholder="確認用PASSWORD"></p>
        <input type="submit" class="btn btn-info" name="signup" value="Sign up">
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
