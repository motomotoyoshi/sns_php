<?php

  require_once(__DIR__ . '/../config/config.php');

  // $app = new MyApp\Controller\index();

  // $app->run();

  // var_dump($_SESSION['me']);
  ?>

  <!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
   <div id="container">
    <form action="logout.php" method="post" id="logout">
      hoge@example.com <input type="submit" value="Logout" />
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
    <h1>Users <span class="fs12">(3)</span></h1>
    <ul>
      <li>hoge@example.com</li>
      <li>hoge@example.com</li>
      <li>hoge@example.com</li>
    </ul>
   </div> 
  </body>
  </html>