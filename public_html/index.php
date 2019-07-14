<?php

  require_once(__DIR__ . '/../config/config.php');

  $app = new MyApp\Controller\index();

  $app->run();