<?php
/* Smarty version 3.1.33, created on 2020-06-12 11:50:47
  from '/var/www/application/views/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee36c171c5460_01146244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0295dc2594d6d52e225e46ce491d0b75aba146d' => 
    array (
      0 => '/var/www/application/views/templates/home.tpl',
      1 => 1584423505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee36c171c5460_01146244 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BootStrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!--BootStrap-->
    <title>ES Editor</title>
    <link rel = "stylesheet" type = "text/css" href = "css/ES.css">
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
    </header>

  <div id="B">
    <a href="/addCompany">
      <img src="pic/add.png" width="60" height="60" alt="addContent" title="企業を追加">
    </a>
    <!--<img src="pic/delete.png" width="60" height="60" alt="deleteContent" title="企業を削除">-->
  </div>
  <div id="C">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Company</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($_smarty_tpl->tpl_vars['message']->value)) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
          <tr>
            <td><a href='/company/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php } else { ?>
          <tr>
            <td>データなし</td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
  </body>
</html>
<?php }
}
