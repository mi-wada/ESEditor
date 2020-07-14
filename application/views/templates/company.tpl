<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BootStrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--BootStrap-->
    <title>ES Editor</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/ES.css">
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
    <a href="/addTitle">
      <img src="../pic/add.png" width="60" height="60" title="テーマを追加">
    </a>
    <!--<img src="pic/delete.png" width="60" height="60" alt="deleteContent" title="企業を削除">-->
  </div>
  <div id="C">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>{$companyName}</th>
          </tr>
        </thead>
        <tbody>
          {if count($titles)}
          {foreach $titles as $title}
          <tr>
            <td><a href='/edit/{$title.title}'>{$title.title}</a></td>
            <td>{$title.textLen} / {$title.limit} 文字</td>
          </tr>
          {/foreach}
          {else}
          <tr>
            <td>データなし</td>
          </tr>
          {/if}
        </tbody>
      </table>
    </div>
  </div>
  </body>
</html>
