<?php

  require_once(__DIR__ . '/../config/config.php');

  // $app = new MyApp\Controller\index();

  // $app->run();

  // echo "login screen";
  // exit;
  ?>
  <!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
   <div id="container">
    <form action="" method="post">
      <p>
        <input type="text" name="email" placeholder="email">
      </p>
      <p>
        <input type="password" name="password" placeholder="password">
      </p>
      <div class="btn">Login</div>
    </form>
   </div> 
  </body>
  </html>